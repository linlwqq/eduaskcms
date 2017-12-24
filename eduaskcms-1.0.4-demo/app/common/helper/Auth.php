<?php
namespace app\common\helper;

class Auth
{
    ##用户模型名称比如User
    public $userModel = 'User';
    private $userModelObject = NULL;

    ##登录地址
    public $loginAction = NULL;

    ##登出以后跳转地址
    public $logoutRedirect = '';//__ROOT__;

    ##登录以后跳转地址    
    public $loginRedirect = '';// __ROOT__;

    ##登录帐号字段
    public $userField = 'username';

    ##登录密码字段
    public $pwdField = 'password';

    ##关联查询模型
    public $contain = [];

    private $allowMethod = [];

    ##登录用户session名
    private $AuthKey;

    public function __construct()
    {
        $this->AuthKey = md5(config('auth_helper_key') ? config('auth_helper_key') : 'Auth');
    }

    ##Auth获取用户模型对象
    protected function getUserObj()
    {
        if ($this->userModelObject) {
            return;
        }
        if (!$this->userModel) {
            exit('请设置Auth::userModel');
        }
        $this->userModelObject = model($this->userModel);
    }

    ##Auth登录
    public function login($data = array())
    {
        //if(session('?'.$this->AuthKey))  redirect($this->loginRedirect);        
        $this->getUserObj();
        if (empty($data)) {
            $data = input('post.');
        }
        if ($data['data']) {
            $data = $data['data'];
        }
        $data = $data[$this->userModel] ? $data[$this->userModel] : $data;
        if (!is_array($data)) {
            return false;
        }
        if (!trim($data[$this->userField]) || !trim($data[$this->pwdField])) {
            return false;
        }

        $username = addslashes(trim($data[$this->userField]));
        $password = self::password(trim($data[$this->pwdField]));
        $login = $this->userModelObject->with($this->contain)->where(array($this->userField => array('eq', $username), $this->pwdField => array('eq', $password)))->find();

        if (!$login) {
            return false;
        }
        $login = $login->getArray();
        unset($login[$this->pwdField]);
        session($this->AuthKey, $login);
        session('REFERER', null);
        return true;
    }

    ##Auth登录后更新用户信息并重写session
    public function relogin()
    {
        if (!session('?' . $this->AuthKey)) {
            return false;
        }
        /*
        $login = session($this->AuthKey) ;
        $username  = $login[$this->userField];
        $password  = $login[$this->pwdField] ;
        $this->login(array($this->userField=>$username,$this->pwdField=>$password)) ; 
        */
        $this->getUserObj();
        $login = $this->userModelObject->with($this->contain)->where(['id' => $this->user('id')])->find();
        if (!$login) {
            $this->logout();
            return false;
        }
        $login = $login->getArray();
        unset($login[$this->pwdField]);
        session($this->AuthKey, $login);
        return true;
    }

    ##Auth登出
    public function logout()
    {
        session($this->AuthKey, NULL);
        //redirect($this->logoutRedirect);
    }

    ##Auth获取用户信息
    public function user($key = NULL)
    {
        if (!session('?' . $this->AuthKey)) {
            return false;
        }
        $login = session($this->AuthKey);
        if (!$key) {
            return $login;
        }
        if (in_array($key, array_keys($login))) {
            return $login[$key];
        }
        return $login;
    }

    ##Auth可访问方法
    public function allow($method = NULL)
    {
        $args = func_get_args();
        if (empty($args)) {
            $this->allowMethod = get_class_methods($GLOBALS['controller']);
            return;
        }
        if (!is_array($method)) {
            $method = array($method);
        }
        $this->allowMethod += $method;
    }

    ##Auth不可访问方法
    public function deny($method = NULL)
    {
        $args = func_get_args();
        if (empty($args)) {
            $this->allowMethod = array();
            return;
        }
        if (!is_array($method)) {
            $method = array($method);
        }
        $this->allowMethod = array_diff($this->allowMethod, $method);
    }

    ##检查是否登录
    public function check()
    {
        if (!session('?' . $this->AuthKey) && !in_array(request()->action(), $this->allowMethod)) {
            session('REFERER', request()->url(true));
            return false;
        }
        return true;
    }
    
    public function check_power()
    {
        $together = strtolower($GLOBALS['controller']->params['controller']) . '::' . strtolower($GLOBALS['controller']->params['action']);
        
        $powerModel = model('Power');
        $powerTeeModel = model('PowerTree');
        if ($powerTeeModel->where(['together' => $together])->count()) {
            $user_id  = $this->user('id');
            $user_group_id = $this->user('user_group_id');
            
            $powers = $powerModel->where(['foreign_id' => intval($user_id), 'type' => 'user'])->find();
            if ($powers) {
                $powers = $powers->getData();
                $powers = unserialize(@gzuncompress($powers['content']));
            } else {
                $powers = $powerModel->where(['foreign_id' => intval($user_group_id), 'type' => 'usergroup'])->find();
                if ($powers) {
                    $powers = $powers->getData();
                    $powers = unserialize(@gzuncompress($powers['content']));
                } else {
                    $powers = [];
                }
            }
            if (in_array('all::all', $powers)) {
                return true;
            }
            return in_array($together, $powers);
        } 
        return true;
    }

    ##密码加密，返回密码
    public static function password($password)
    {
        return md5(crypt($password, config('auth_helper_key') . substr($password, 0, 2)));
    }

    public function __destruct()
    {
        if (!request()->isAjax()) {
            session('last_url', request()->url(true));
        }
    }
}
