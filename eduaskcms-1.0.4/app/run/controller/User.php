<?php
namespace app\run\controller;

class User extends Run
{
    public function _initialize()
    {
        $this->Auth->allow(['login']);
        call_user_func(array('parent', __FUNCTION__));
    }

    public function login()
    {
        $this->assign->addCss('admin/login');

        if ($this->Auth->user('id')) {
            return $this->message('success', '亲！你已经登录了，无需重新登录', array('back' => false, '返回首页' => array('run/Index/index')));
        }
        $redirect = session('REFERER') ? session('REFERER') : 'run/Index/index';
        if (strpos($redirect, 'run/') === false) {
            $redirect = 'run/Index/index';
        }

        if ($this->request->isPost() && $this->Form->check_token()) {
            if (captcha_check(input('post.captcha'))) {
                $this->Auth->login();
                $logined = $this->Auth->user();

                if ($logined) {
                    if ($logined['status'] == 'verified') {
                        //登录成功
                        \think\Hook::listen('login', $logined);
                        $this->redirect($redirect);
                    } elseif ($logined['status'] == 'unverified') {
                        $this->assign->error = '用户名未激活';
                        $this->Auth->logout();
                    } else {
                        $this->assign->error = '用户名已禁用';
                        $this->Auth->logout();
                    }
                } else {
                    $this->assign->error = '亲！用户名或者密码有误';
                }
            } else {
                $this->assign->error = '亲！验证码错误了哦';
            }
        }
        return $this->fetch = 'login';
    }

    public function logout()
    {
        if ($this->Auth->user('id'))
            $this->Auth->logout();
        $this->redirect('User/login');
    }

    public function modify()
    {
        $this->assignDefault('password', '');
        $this->mdl->form['password']['info'] = '不修改请保持为空';
        return call_user_func(array('parent', __FUNCTION__));
    }

    public function lists()
    {
        if (!$this->local['filter']) {
            $this->local['filter'] = [
                'username',
                'status'
            ];
        }

        if (!$this->local['list_fields'])
            $this->local['list_fields'] = array(
                'username' => array(
                    'name' => '用户名'
                ),
                'user_group_id',
                //'Member.nickname',
                //'Member.truename',
                //'Member.headimg',
                'status',

                'logined_ip',
                'logined',
                'created'
            );

        $this->addItemAction('用户信息', array('Member/modify', ['parent_id' => 'id'], 'parse' => ['parent_id']), '&#xe612;');
        call_user_func(array('parent', __FUNCTION__));
        $this->addAction("登录日志", array('UserLogin/lists'), 'fa-eye');
    }
}
