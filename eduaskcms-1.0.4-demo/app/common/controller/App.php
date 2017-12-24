<?php
namespace app\common\controller;

use think\Controller;
use think\Loader;
use app\common\utility\Hash;
use app\common\utility\TpText;

class App extends Controller
{

    public $assign;
    public $local;
    public $params;
    public $args;
    public $paginate;
    public $helper = [
        'Auth' => [
            'userModel' => 'User',
            'contain' => ['UserGroup', 'Member']
        ],
        'Form',
        'Html'
    ];

    ##定义试图名称
    public $fetch = null;

    public function __construct()
    {
        $GLOBALS['controller'] = $this;
        ##加载助手类
        if (!empty($this->helper)) {
            $this->helper = Hash::normalize($this->helper);
            foreach ($this->helper as $h => $h_option) {
                eval('$this->$h = new  app\common\helper\\' . $h . ';');
                if (!empty($h_option)) {
                    foreach ($h_option as $pro_name => $pro) {
                        $this->$h->$pro_name = $pro;
                    }
                }
            }
        }
        $this->assign = new Assign;
        call_user_func(array('parent', __FUNCTION__));
    }


    protected function _initialize()
    {
        ##获取URL参数
        $this->passedArgs = Hash::diff($this->request->param(), $this->request->request());
        ##IIS编码修正
        if (strpos($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS') !== false) {
            foreach ($this->passedArgs as &$passedArg) {
                $passedArg = mb_convert_encoding($passedArg, 'UTF-8', 'GBK');
            }
        }

        ##当前访问参数        
        $this->params = [
            'module' => $this->request->module(),
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'param' => $this->passedArgs
        ];

        ##当前URL参数
        $this->args = $this->passedArgs;

        ##P3P跨域
        if ($this->request->isAjax() || substr($this->params['action'], 0, 5) == 'ajax_') {
            header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
        }

        $this->callback = new \app\common\lib\callback($this);
        if (is_callable([$this->callback, 'appBeforeEach'])) {
            call_user_func(array($this->callback, 'appBeforeEach'));
        }

        if ($this->callback->appBeforeAction) {
            call_user_func(array($this->callback, $this->callback->appBeforeAction));
        }

        ##处理model信息
        $this->m = $this->params['controller'];
        ##当前模型
        $this->mdl = $this->loadModel($this->m);
        $this->assign->mdl = $this->m;
        $this->assign->mdl_name = isset($this->mdl->cname) ? $this->mdl->cname : $this->m;


        if (isset($this->mdl->parentModel)) {
            if ($this->mdl->parentModel == 'parent')
                $this->local['parent_conj'] = 'parent_id';
            else
                $this->local['parent_conj'] = isset($this->mdl->assoc[$this->mdl->parentModel]['foreignKey']) ? $this->mdl->assoc[$this->mdl->parentModel]['foreignKey'] : Loader::parseName($this->mdl->parentModel) . '_id';
            $this->assign->parent_field = $this->local['parent_conj'];
        }

        ##准备当前模型需要准备的数据
        $this->setPrepareModel($this->m);

        ##Auth助手设置
        if ($this->Auth) {
            $this->Auth->loginAction = 'User/login';
            $this->Auth->logoutRedirect = 'User/login';
            $this->Auth->loginRedirect = 'Index/Index';
        }

        ##当前登录信息
        $this->login = [];
        if ($this->Auth->user('id')) {
            //$this->Auth->relogin();//如果需要登录用户数据 时时更新(特别是用户数据有修改想更新就执行这句，重新更新session)
            $this->login = $this->Auth->user();
            $this->assign->login = $this->login;
        }

        switch (strtolower($this->params['module'])) {
            ##后台
            case 'run':
                if ($this->login) {
                    if (!$this->login['UserGroup']['is_admin'] && $this->params['action'] != 'logout') {
                        $this->redirect('User/logout');
                    }
                }
                break;
            ##前台
            case 'home':
                if (in_array($this->params['action'], (array)$this->need_login_action))
                    $this->Auth->deny($this->params['action']);
                else
                    $this->Auth->allow($this->params['action']);
                break;
        }

        ##根目录地址        
        $this->root = $this->assign->root = (substr($this->request->root(), -10) != '/index.php' ? $this->request->root() : substr($this->request->root(), 0, -10)) . '/';
        $this->absroot = $this->assign->absroot = (substr($this->request->root(true), -10) != '/index.php' ? $this->request->root(true) : substr($this->request->root(true), 0, -10)) . '/';


        ##判断当前是否通过手机端访问
        $this->isMobile = $this->assign->isMobile = $this->request->isMobile();

        ##当前服务器时间  
        $this->now = $this->assign->now = time();

        $this->addTitle(setting('site_title'));
        $this->addKeywords(setting('site_keywords'));
		$this->addDescription(setting('site_description')); 
        
        
        
        ##检查是否可以访问，最后一定要调这个方法        
        if (!$this->Auth->check()) {
            ##没有登录   
            if (!$this->request->isAjax()) {
                return $this->redirect($this->Auth->loginAction);
            } else {
                return abort(403, '访问被拒绝'); 
            }
            exit;
        }
    }

    protected function beforeRender()
    {
        $this->assign->mdls[$this->m] = $this->mdl;
        if ($this->mdl /*&& ($this->mdl instanceof \think\Model)*/ && $this->mdl->assoc) {
            foreach (array_keys($this->mdl->assoc) as $m) {
                $this->assign->mdls[$m] = $this->loadModel(!isset($this->mdl->assoc[$m]['foreign']) ? $m : $this->mdl->assoc[$m]['foreign']);
            }
        }
        //pr($this->local['prepare_form_models']);exit ;

        if ($this->local['prepare_form_models']) {
            foreach ($this->local['prepare_form_models'] as $m) {
                if ($this->assign->mdls[$m]->form)
                    foreach ($this->assign->mdls[$m]->form as $field => &$info) {
                        if (isset($info['prepare'])) {
                            if (empty($info['prepare'])) {
                                continue;
                            }
                            switch ($info['prepare']['type']) {
                                case 'select':
                                    if (!isset($info['prepare']['property']))
                                        $info['prepare']['property'] = 'options';
                                    $foreign = $info['prepare']['foreign'] ? $info['prepare']['foreign'] : $info['foreign'];
                                    if ($foreign) {
                                        list($foreign_mdl, $displayField) = pluginSplit($foreign);
                                        if ($this->mdl->assoc[$foreign_mdl]['foreign']) $foreign_mdl = $this->mdl->assoc[$foreign_mdl]['foreign'];
                                    } else {
                                        $foreign_mdl = Loader::parseName(substr($field, 0, -3), 1);
                                        $displayField = $this->assign->mdls[$foreign_mdl]->display ? $this->assign->mdls[$foreign_mdl]->display : 'title';
                                    }

                                    $pkField = $this->assign->mdls[$foreign_mdl]->getPk();
                                    $queryFields = array($pkField, $displayField);

                                    $data = db($foreign_mdl)->field($queryFields)->where($info['prepare']['params']['where'])->select();
                                    $info[$info['prepare']['property']] = Hash::combine($data, '{n}.' . $pkField, '{n}.' . $displayField);

                                    break;
                                case 'file':
                                    break;
                                case 'cache':
                                    break;
                                case 'dictionary':
                                    break;
                                default:
                                    break;

                            }
                        }
                    }
            }
        }

        //if($this->assign->item_actions && is_array($this->assign->item_actions)) $this->assign->item_actions = Hash::normalize($this->assign->item_actions);
        if (is_callable([$this->callback, 'appAfterEach'])) {
            call_user_func(array($this->callback, 'appAfterEach'));
        }
        if ($this->callback->appAfterAction) {
            call_user_func(array($this->callback, $this->callback->appAfterAction));
        }

    }

    protected function message($type, $msg = null, $redirects = null, $auto = 3)
    {
        if ($this->request->isAjax) {
            return $this->ajax($type, $msg, $redirects);
        }

        if (!$redirects) {
            $redirects = 'back';
        }

        settype($redirects, 'array');
        if (!array_key_exists('back', $redirects)) {
            $redirects['返回上一页'] = session('last_url');
        }

        foreach ($redirects as $title => &$url) {
            if (is_numeric($title) && $url == 'back') {
                unset($redirects[$title]);
                $redirects['返回上一页'] = session('last_url');
                continue;
            }
            if (!$url) {
                continue;
            }
            if (is_array($url)) {
                $url = url($url[0], $url[1] ? $url[1] : null);
            }
        }

        $this->assign->data = array(
            'type' => $type,
            'redirect' => Hash::filter($redirects),
            'message' => $msg,
            'auto' => $auto,
        );
        if (config('app_debug')) {
            return $this->fetch = '/message';
        }

        session('messageinfo', $this->assign->data);
        return $this->redirect('Index/redirect_message');
        exit();
    }

    protected function ajax($type, $msg, $data = null)
    {
        echo(json_encode(array(
            'result' => $type,
            'data' => $data,
            'message' => $msg
        )));
        exit;
    }

    protected function loadModel($model, $fileExists = true)
    {
        if (isset($this->$model) && is_object($this->$model)) {
            return $this->$model;
        }
        if (file_exists(APP_PATH . 'common' . DS . 'model' . DS . $model . EXT)) {
            return $this->$model = $this->assign->mdls[$model] = Loader::model($model);
        } else {
            return $this->$model = $this->assign->mdls[$model] = db($model);
        }
    }

    protected function setPrepareModel($mdl_names = null, $prepareForm = false)
    {
        settype($mdl_names, 'array');
        if (!in_array($this->m, $mdl_names)) {
            $mdl_names[] = $this->m;
        }
        $this->local['prepare_form_models'] = array_unique(array_merge((array)$this->local['prepare_form_models'], $mdl_names));
    }

    protected function addFilter($col, $value)
    {
        if (is_array($value)) {
            $value = implode(' - ', Hash::flatten($value));
        }
        $this->assign->filter[$col] = $value;
    }

    protected function addAction($title, $url = null, $icon = null, $class = null)
    {
        $this->assign->actions = (array)$this->assign->actions;
        if (!isset($url)) {
            array_push($this->assign->actions, $title);
        } else {
            array_push($this->assign->actions, compact('title', 'url', 'icon', 'class'));
        }
    }

    protected function addItemAction($title, $url = null, $icon = null)
    {
        $this->assign->item_actions = (array)$this->assign->item_actions;
        if (!isset($url)) {
            $this->assign->item_actions[] = $title;
        } else {
            $this->assign->item_actions[] = compact('title', 'url', 'icon');
        }
    }

    protected function addTitle($title)
    {
        settype($this->assign->meta['title'], 'array');
        array_unshift($this->assign->meta['title'], $title);
    }

    protected function addKeywords($title)
    {
        settype($this->assign->meta['keywords'], 'array');
        array_unshift($this->assign->meta['keywords'], $title);
    }

    protected function addDescription($title)
    {
        settype($this->assign->meta['description'], 'array');
        array_unshift($this->assign->meta['description'], $title);
    }

    protected function addPath($title, $url = null)
    {
        if ($url) {
            $this->assign->path[$title] = $url;
        } else {
            $this->assign->path[] = $title;
        }
    }

    protected function setTitle($title, $type = 'title')
    {
        switch ($type) {
            case 'title':
                $this->assign->meta['title'] = $title;
                break;
            case 'operation':
                $this->assign->title[$type] = $title;
                $this->addTitle($title);
                break;
            default:
                $this->assign->title[$type] = $title;
                break;
        }
    }

    protected function setKeywords($title)
    {
        $this->assign->meta['keywords'] = array($title);
    }

    protected function setDescription($title)
    {
        $this->assign->meta['description'] = array($title);
    }

    protected function furl($url)
    {
        $url = trim($url);
        if (strpos($url, 'http://') === false && strpos($url, 'https://') === false) {
            if ($url{0} == '/') $url = substr($url, 1);
            $url = $this->absroot . $url;
        }
        return $url;
    }

    protected function getPage($query_mdl = null)
    {
        if (!isset($this->local['contain'])) {
            $this->local['contain'] = null;
        }

        if ($query_mdl && is_string($query_mdl)) {
            $query_mdl = $this->loadModel($query_mdl);
        }
        if ($query_mdl === null) {
            $query_mdl = $this->mdl;
        }
        // pr($this->local['fields']);
        $this->list = $query_mdl->with($query_mdl->parseWith($this->local['contain']))->where($this->local['where'])->field($this->local['fields'][$this->m])->order($this->local['order'])->paginate($this->local['limit'] ? $this->local['limit'] : 10);

        // 获取分页显示
        $this->render = $this->list->render();
        $this->page = $this->list->toArray();
        //数据数据处理到数组

        $list = array();

        foreach ($this->list as $key => $item) {
            $list[$key] = $item->getArray($item);
            //$list[$key] = $item->getArray($item,$this->local['contain']);
        }
        //pr($list);
        $this->list = $list;
    }
    //查询出来的数据 最终得到数组

    ##重写assign方法，统一管理，让变量传出都通过我们自己的Assign对象传出
    protected function assign($name, $value = '')
    {
        $this->assign->$name = $value;
        return true;
    }

    ##页面输出前Assign出所有变量
    protected function assignVars()
    {
        ##Assign出全局变量        
        $this->assign->args = $this->args;
        $this->assign->params = $this->params;
        $this->assign->this = $GLOBALS['controller'];

        if (!$this->assign->VarsReturned) {
            foreach ($this->assign as $_var => $_value) {
                parent::assign($_var, $_value);
            }
            $this->assign->VarsReturned = true;
        }
        return true;
    }

    //传递了单模板地址：如果在当前控制器名文件夹找找不到，就使用view根目录下的模板
    protected function getTemp($template = '')
    {
        if ($template && !in_array(substr($template, 0, 1), array('.', '/')) && strpos($template, '/') === false && strpos($template, '@') === false) {
            $path = APP_PATH . $this->params['module'] . DS . 'view' . DS;
            $self_file = $this->params['controller'] . DS . $template . '.' . config('template.view_suffix');
            if (file_exists($path . $self_file)) {
                return $this->params['controller'] . '/' . $template;
            } else {
                if (file_exists($path . $template . '.' . config('template.view_suffix'))) {
                    return '/' . $template;
                } else {
                    return $this->params['controller'] . '/' . $template;
                }
            }
        }
        return $template;
    }

    protected function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        $args = func_get_args();
        if (isset($args[0])) {
            $args[0] = $this->getTemp($args[0]);
        }
        $this->beforeRender();
        $this->assignVars();
        return call_user_func_array(array('parent', __FUNCTION__), $args);
    }

    ##执行_finish之前回调函数，扩展自己的代码
    protected function before_finish()
    {

    }

    ##每一个请求最后都将执行_finish方法
    public function finish()
    {
        $this->before_finish();
        ##所有试图页面都尽量使用 $this->fetch = '页面' 来指定
        if ($this->fetch !== null && $this->fetch !== false) {
            if ($this->fetch === true) {
                $this->fetch = $this->params['controller'] . '/' . $this->params['action'];
            }
            return $this->fetch($this->fetch);##在这里实现最终模板渲染
        }
    }

    protected function display($content = '', $vars = [], $replace = [], $config = [])
    {
        $this->beforeRender();
        $this->assignVars();
        $parent_result = call_user_func_array(array('parent', __FUNCTION__), func_get_args());
        $this->afterRender();
        return $parent_result;
    }
}
