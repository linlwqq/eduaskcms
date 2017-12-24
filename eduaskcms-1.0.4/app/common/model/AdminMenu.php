<?php
namespace app\common\model;

use app\common\utility\Hash;

class AdminMenu extends App
{
    //关联模型
    public $assoc = [];
    public $display = 'title';
    public $cache = [];

    ##父模型名
    public $parentModel = 'parent';

    public function initialize()
    {
        $this->form = [
            'id' => [
                'type' => 'integer',
                'name' => 'ID',
                'elem' => 'hidden'
            ],
            'parent_id' => array(
                'type' => 'integer',
                'name' => '父级栏目',
                'elem' => 'nest_select.AdminMenu'
            ),
            'title' => array(
                'type' => 'string',
                'name' => '栏目标题',
                'elem' => 'text'
            ),
            'url' => array(
                'type' => 'string',
                'name' => '栏目URL',
                'elem' => 'text'
            ),
            'icon' => array(
                'type' => 'string',
                'name' => '栏目图标',
                'elem' => 'text'
            ),
            'is_nav' => array(
                'type' => 'integer',
                'name' => '导航显示',
                'elem' => 'checker'
            ),
            'is_debug' => array(
                'type' => 'integer',
                'name' => '调试隐藏',
                'elem' => 'checker',
                'info' => '当关闭调试以后，将不会显示'
            ),
            'list_order' => array(
                'type' => 'integer',
                'name' => '排序权重',
                'elem' => 'number',
                'list' => 'edit'
            ),
            //其他字段
        ];
        call_user_func_array(['parent', __FUNCTION__], func_get_args());
    }

    /*
    //表单分组
    public $formGroup = [
        'advanced'=>'高级选项'
    ];
    */

    //数据验证    
    protected $_validate = [
        'title' => array(
            'rule' => 'require',
            'message' => '请填写栏目标题'
        ),
        'parent_id' => array(
            array(
                'rule' => array('egt', 1),
                'message' => '请选择父级导航'
            ),
            array(
                'rule' => array('call', 'checkParent'),
                'on' => 'edit'
            )
        )
    ];
    
    public function checkParent($value, $rule, $data)
    {
        if ($value == $data['id'] || in_array($value, (array)adminmenu('children', $data['id']))) {
            return '不能选择本栏目以及其子栏目做为父级';
        }
        return true;
    }
    
    
    public function after_write()
    {
        $parent_rslt = call_user_func(array('parent', __FUNCTION__));
        $this->writeToFile();
        return $parent_rslt;
    }
    
    public function after_delete()
    {
        $parent_rslt = call_user_func(array('parent', __FUNCTION__));
        if ($this->data['id']) {                   
            $this->where(array('id' => array('IN', adminmenu('children', $this->data['id']))))->delete();##删除掉所有子级
        }        
        $this->writeToFile();
        return $parent_rslt;
    }
    
    public function writeToFile()
    {
        $listStore = array();
        $list = $this->order(array('list_order' => 'ASC', 'id' => 'ASC'))->select();
        if ($list) {
            foreach ($list as $item) {
                $listStore[$item['id']] = $item->toArray();
            }
        }
        $first = reset($listStore);
        
        $this->cache['threaded'][$first['id']] = $this->threaded($first['id'], $listStore);
        $this->getChildren($this->cache['threaded'], 'children');

        $navStore = array();
        $list = $this->order(array('list_order' => 'ASC', 'id' => 'ASC'))->where(array('is_nav' => 1))->select();
        if ($list) {
            foreach ($list as $item) {
                $navStore[$item['id']] = $item->toArray();
            }
        }
        $this->cache['nav'] = $this->threaded($first['id'], $navStore);
       
        /*]*/

        $this->cache['list'] = $listStore;

        write_file_cache('AdminMenu', $this->cache);
        return true;
    }
}
