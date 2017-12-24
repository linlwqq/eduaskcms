<?php
namespace app\home\controller;

class Product extends Home
{
    public function _initialize()
    {
        
        call_user_func(array('parent',__FUNCTION__)); 
    }
    public function show()
    {
        /*
        ##如果列表页也需要将每个产品的关联图片查询出来打开注释即可
        if (in_array($this->m, json_decode(setting('use_picture_model')))) {
            $this->local['contain']  = [
                'ProductPicture' => [
                    'where' => [
                        'is_verify' => 1
                    ],
                    'order' => [
                        'list_order' => 'DESC',
                        'id' => 'ASC'
                    ]
                ]
            ];
        }*/
        call_user_func(array('parent',__FUNCTION__)); 
    }
             
    public function view()
    {
        if (in_array($this->m, json_decode(setting('use_picture_model')))) {
            $this->local['contain']  = [
                'ProductPicture' => [
                    'where' => [
                        'is_verify' => 1
                    ],
                    'order' => [
                        'list_order' => 'DESC',
                        'id' => 'ASC'
                    ]
                ]
            ];
        }
        call_user_func(array('parent',__FUNCTION__)); 
    }        
}
