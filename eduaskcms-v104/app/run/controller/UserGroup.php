<?php
namespace app\run\controller;

class UserGroup extends Run
{
    public function _initialize(){
        
        call_user_func(array('parent',__FUNCTION__)); 
    }
    
    public function lists()
    {
        if(!$this->local['list_fields'])
        $this->local['list_fields'] = array(
            'title',
            'alias',
            'is_admin'
        );
        call_user_func(array('parent',__FUNCTION__));
    }  
}
