<?php
namespace app\run\controller;

class DictionaryItem extends Run
{
    public function _initialize(){
        
        call_user_func(array('parent',__FUNCTION__)); 
    }
    
    public function lists(){
        if(!$this->local['list_fields'])
        $this->local['list_fields'] = array(
			'dictionary_id',
			'key',
			'value',			
			'created',
        );
        
        call_user_func(array('parent',__FUNCTION__));
    } 
    
    
    public function create(){
        return call_user_func(array('parent',__FUNCTION__));
    }   
         
}