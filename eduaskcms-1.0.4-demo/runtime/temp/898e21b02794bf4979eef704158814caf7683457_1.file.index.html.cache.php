<?php /* Smarty version 3.1.27, created on 2017-11-01 15:48:30
         compiled from "E:\phpStudy\WWW\eduaskcms\app\run\view\Index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:3047759f97c4e81a144_01420562%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898e21b02794bf4979eef704158814caf7683457' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\Index\\index.html',
      1 => 1509249444,
      2 => 'file',
    ),
    '3529266b02c7b1f827dd58f39eb25dd878836205' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\base.html',
      1 => 1508943562,
      2 => 'file',
    ),
    'b4a9f2c703ecebb793a3c6697888885e86a5a90a' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\global.html',
      1 => 1502010996,
      2 => 'file',
    ),
    '53d494e8e3dc4b687da22f0f361353840244ad41' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\functions.html',
      1 => 1500624845,
      2 => 'file',
    ),
    '8c7ef4626b3991837a8b7237f2064f2c54eebb1c' => 
    array (
      0 => '8c7ef4626b3991837a8b7237f2064f2c54eebb1c',
      1 => 0,
      2 => 'string',
    ),
    '8b71cb42d6f9d53942c648621316097c8818dc2b' => 
    array (
      0 => '8b71cb42d6f9d53942c648621316097c8818dc2b',
      1 => 0,
      2 => 'string',
    ),
    '2a9854f582a316280979555a7b503aa08ac8bfa6' => 
    array (
      0 => '2a9854f582a316280979555a7b503aa08ac8bfa6',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3047759f97c4e81a144_01420562',
  'variables' => 
  array (
    'this' => 0,
    'is_response' => 0,
    'meta' => 0,
    'is_favicon' => 0,
    'css' => 0,
    'html' => 0,
    'root' => 0,
    'absroot' => 0,
    'js' => 0,
    'defer_js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f97c4e942f90_04527983',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\898e21b02794bf4979eef704158814caf7683457_1.file.index.html.cache.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_url_3211359f97c4e860658_69497627',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\898e21b02794bf4979eef704158814caf7683457_1.file.index.html.cache.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_furl_3211359f97c4e860658_69497627',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f97c4e942f90_04527983')) {
function content_59f97c4e942f90_04527983 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\phpStudy\\WWW\\libs\\smarty\\smarty-3.1.27\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '3047759f97c4e81a144_01420562';
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head>
<?php $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->Form, null, 0);
$_smarty_tpl->tpl_vars['html'] = new Smarty_Variable($_smarty_tpl->tpl_vars['this']->value->Html, null, 0);?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($_smarty_tpl->tpl_vars['is_response']->value) {?>
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="renderer" content="webkit"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="format-detection" content="telephone=no, email=no" />
<?php }?>
<meta name="Keywords" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['keywords']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['keywords']);
}?>" />
<meta name="Description" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['description']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['description']);
}?>" />
<?php if ($_smarty_tpl->tpl_vars['is_favicon']->value) {?><link rel="shortcut icon" href="favicon.ico" /><?php }?>
<title><?php echo implode(' - ',(($tmp = @$_smarty_tpl->tpl_vars['meta']->value['title'])===null||$tmp==='' ? array() : $tmp));?>
</title>
<?php echo $_smarty_tpl->tpl_vars['html']->value->css($_smarty_tpl->tpl_vars['css']->value,true);?>


<?php echo '<script'; ?>
 type="text/javascript">var wwwroot='<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
';var absroot='<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
';<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['js']->value,true);?>


<?php /*  Call merged included template "functions.html" */
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, '3211359f97c4e860658_69497627', 'content_59f97c4e860658_14880853');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '3047759f97c4e81a144_01420562';
?>

<?php echo '<script'; ?>
 type="text/javascript">
var layer;
$(function(){
    layui.use(['layer'], function(){
        layer = layui.layer;        
        layer.config({
            zIndex:10000
        });
    })
})

HKUC.ajax_request.defaultSuccessHandlers= {
    'success':function(rslt_msg,rslt_data){ 
       layer.alert(rslt_msg,{
            icon:1
        }); 
    },
    'error':function(rslt_msg,rslt_data){
        layer.alert(rslt_msg,{
            icon:2
        });                   
    },
    'nopower':function(msg,data){
        
        layer.alert(msg,{
            icon:2
        });
    }
};
HKUC.ajax_request.defaultErrorHandlers={
    403:function(text,rerun){
        layer.alert('登录超时，请刷新重新登录',{
            icon:2
        });
	},
    404:function(text,rerun){
        layer.alert('页面不存在',{
            icon:2
        });
    }
};

<?php echo '</script'; ?>
>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3047759f97c4e81a144_01420562';
?>

<?php echo '<script'; ?>
 type="text/javascript">
var winWidth = $(window).width();
var heiHeght = $(window).height();
<?php echo '</script'; ?>
>
<div id="gloBox" class="<?php echo $_smarty_tpl->tpl_vars['default_skin']->value;?>
">
    <div id="gloTop" class="clearfix">
        <div class="gtLeft clearfix">
            <div class="logo <?php if (!$_smarty_tpl->tpl_vars['dev']->value['cms_logo']) {?>text<?php }?>"><?php if ($_smarty_tpl->tpl_vars['dev']->value['cms_logo']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;
echo $_smarty_tpl->tpl_vars['dev']->value['cms_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['dev']->value['cms_title'];?>
"/><?php } else {
echo $_smarty_tpl->tpl_vars['dev']->value['cms_title'];
}?></div>
            <div class="menuBar" >
                <ul class="list">
                    <li class="bar_line bar_top"></li>
                    <li class="bar_line bar_mid"></li>
                    <li class="bar_line bar_foot"></li>
                </ul>
            </div>
        </div>
        
        <div class="gtRght">
            <ul class="layui-nav list" lay-filter="">
                <li class="layui-nav-item circle gohome first"><a class="tooltip" data-tip-text="访问前台" data-tip-type="3" href="<?php echo url('Home/Index/index');?>
" target="_blank"><i class="fa fa-home"></i></a></li>
                <li class="layui-nav-item circle"><a class="tooltip javascript" rel="full_screen" data-tip-text="F11全屏" data-tip-type="3" href="javascript:void(0);"><i class="fa fa-arrows "></i></a></li>
                <li class="layui-nav-item circle"><a class="tooltip javascript" rel="simple_clear" data-tip-text="清除缓存" data-tip-type="3" href="<?php echo url('Tool/clearCache');?>
"><i class="fa fa-remove" style="margin: -7px 0 0 -5px;"></i></a></li>
                <li class="layui-nav-item circle"><a target="_blank" class="tooltip" data-tip-text="培训手册" data-tip-type="3" href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['manual_url'];?>
"><i class="fa fa-book" style="margin: -7px 0 0 -7px;"></i></a></li>
                <li class="layui-nav-item circle skin-down"><a  href="javascript:void(0);"><i class="fa fa-yelp" style="margin: -7px 0 0 -6px;"></i></a>
                    <div class="skin-show clearfix">
                        <a data-skin="default" rel="change_skin"  style="background: #009688;" class="javascript"></a>
                        <a data-skin="green" rel="change_skin"  style="background: rgba(0,166,90,1);" class="javascript"></a>
                        <a data-skin="pink"  rel="change_skin" style="background: rgba(250,96,134,1);" class="javascript"></a>
                        <a data-skin="blue"  rel="change_skin" style="background: rgba(0,192,239,1);" class="javascript"></a>
                        <a data-skin="red"   rel="change_skin" style="background: rgba(250,42,0,1);" class="javascript"></a>
                    </div>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;" class="admin-user" >
                        <span class="admin-user-headpic"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['headimg'])===null||$tmp==='' ? 'images/admin/default_headimg.png' : $tmp);?>
" alt=""/></span><span class="admin-user-name en-font"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['nickname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['login']->value['username'] : $tmp);?>
</span>
                     </a>
                    <dl class="layui-nav-child">
                        <i class="i"></i>
                        <dd><a href="<?php echo url('User/modify',array('id'=>$_smarty_tpl->tpl_vars['login']->value['id']));?>
" class="new_tab" data-icon="fa-user"><i class="fa fa-pencil" aria-hidden="true"></i>修改密码</a></dd>
                        <dd><a href="" class="javascript" rel="lockScreen"><i class="fa fa-lock" aria-hidden="true" style="padding-right: 2px;padding-left: 2px;"></i>锁屏(Alt+L)</a></dd>
                        <dd class="bt"><a href="<?php echo url('User/logout');?>
"><i class="fa fa-sign-out" aria-hidden="true"></i>注销登录</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
        
    </div>
    <div id="gloLeft" class="sizing">
        <div class="leftbg"></div>
        <div id="leftBar">
            <ul class="list" id="gloMenu">
                <?php $_smarty_tpl->tpl_vars['cms_menu'] = new Smarty_Variable((($tmp = @adminmenu('nav'))===null||$tmp==='' ? array() : $tmp), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['cms_menu'] = new Smarty_Variable(reset($_smarty_tpl->tpl_vars['cms_menu']->value), null, 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['cms_menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level1']->_loop = false;
$_smarty_tpl->tpl_vars['level1_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['level1_id']->value => $_smarty_tpl->tpl_vars['level1']->value) {
$_smarty_tpl->tpl_vars['level1']->_loop = true;
$foreach_level1_Sav = $_smarty_tpl->tpl_vars['level1'];
?>
                <?php $_smarty_tpl->tpl_vars['is_display'] = new Smarty_Variable(true, null, 0);?>
                <?php if (!config('app_debug') && adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'is_debug')) {
$_smarty_tpl->tpl_vars['is_display'] = new Smarty_Variable(false, null, 0);
}?>
                <?php if ($_smarty_tpl->tpl_vars['is_display']->value) {?>
                <li class="current">
                    <div class="navT">                    
                        <a href="<?php echo url(adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'url'));?>
"><i data-icon="<?php echo adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon');?>
" class="fa <?php echo adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon');?>
   animated" ></i><cite><?php echo adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'title');?>
</cite></a>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['level1']->value) {?>
                    <div class="navC">
                        <ul class="list">
                            <?php
$_from = $_smarty_tpl->tpl_vars['level1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['level2'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['level2']->_loop = false;
$_smarty_tpl->tpl_vars['level2_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['level2_id']->value => $_smarty_tpl->tpl_vars['level2']->value) {
$_smarty_tpl->tpl_vars['level2']->_loop = true;
$foreach_level2_Sav = $_smarty_tpl->tpl_vars['level2'];
?>
                            <?php $_smarty_tpl->tpl_vars['is_display1'] = new Smarty_Variable(true, null, 0);?>
                            <?php if (!config('app_debug') && adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'is_debug')) {
$_smarty_tpl->tpl_vars['is_display1'] = new Smarty_Variable(false, null, 0);
}?>
                            <?php if ($_smarty_tpl->tpl_vars['is_display1']->value) {?>
                            <li class="b"><a href="<?php echo url(adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'url'));?>
"><i data-icon="<?php echo (($tmp = @adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'icon'))===null||$tmp==='' ? adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon') : $tmp);?>
" class="fa fa-angle-right fa-lg animated"></i><cite><?php echo adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'title');?>
</cite></a></li>
                            <li class="s"><a href="<?php echo url(adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'url'));?>
" class="tooltip" data-tip-text="<?php echo adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'title');?>
" data-tip-bg="#009688" data-title="<?php echo adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'title');?>
" data-icon="<?php echo (($tmp = @adminmenu($_smarty_tpl->tpl_vars['level2_id']->value,'icon'))===null||$tmp==='' ? adminmenu($_smarty_tpl->tpl_vars['level1_id']->value,'icon') : $tmp);?>
"><i class="fa fa-reorder"></i></a></li>
                            <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['level2'] = $foreach_level2_Sav;
}
?>
                        </ul>
                    </div>
                    <?php }?>
                </li>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['level1'] = $foreach_level1_Sav;
}
?>
            </ul>
        </div>
    </div>
    
    <div id="gloRght" lay-allowClose="true">            
        <div class="layui-tab admin-nav-card" lay-filter="admin-tab" >
            <div class="topBg coverBg"></div>
            <div class="tab-bg"></div>
            <a href="javascript:void(0);" class="tab-prev"><i class="fa fa-angle-double-left fa-2x"></i></a>
            <a href="javascript:void(0);" class="tab-next"><i class="fa fa-angle-double-right fa-2x"></i></a>
			<ul class="layui-tab-title">
				<li class="layui-this">
					<i class="fa fa-desktop" aria-hidden="true"></i><cite>后台首页</cite>
				</li>
			</ul>
			<div class="layui-tab-content">
				<div class="layui-tab-item layui-show admin_home">
                    <div class="admin_content">
                        <div class="admin_content_box">
                            <div id="admHome">
                                
                                <div class="homeRght">
                                    <div class="headimg">
                                        <a href="<?php echo url('Member/modify',array('parent_id'=>$_smarty_tpl->tpl_vars['login']->value['id']));?>
" data-icon="fa-user" data-title="修改信息" class="new_tab"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['headimg'])===null||$tmp==='' ? 'images/admin/default_headimg.png' : $tmp);?>
" alt=""/></a>
                                    </div>
                                    <div class="welcome en-font">
                                        您好！<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['nickname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['login']->value['username'] : $tmp);?>
</span>                                        
                                        <a href="<?php echo url('User/logout');?>
" ><i style="color: red;" class="fa fa-sign-out" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="time bline en-font">
                                        <b></b>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span class="showtime"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['now']->value,'Y-m-d H:i:s');?>
</span>
                                    </div>
                                    <div class="info bline en-font">
                                        真实姓名：<span class="c"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['truename'])===null||$tmp==='' ? '未设置' : $tmp);?>
</span>
                                    </div>
                                    <div class="info bline en-font">
                                        登录时间：<span class="c"><?php echo $_smarty_tpl->tpl_vars['login']->value['logined'];?>
</span>
                                    </div>
                                    <div class="info bline en-font">
                                        登录地址：<span class="c"><?php echo $_smarty_tpl->tpl_vars['login']->value['logined_ip'];?>
</span>
                                    </div>
                                    
                                    <div class="notice">                                        
                                        <div class="con">
                                            <div class="layui-btn-group skin">
                                                <a href="<?php echo url('Feedback/lists');?>
" class="layui-btn new_tab" data-title="留言列表" data-icon="fa-pencil-square-o">留言<span class="layui-badge layui-bg-gray"><?php if ($_smarty_tpl->tpl_vars['count']->value['feedback'] < 99) {
echo $_smarty_tpl->tpl_vars['count']->value['feedback'];
} else { ?>99+<?php }?></span></a>
                                                <a class="layui-btn" onclick="layer.msg('敬请期待')">订单<span class="layui-badge layui-bg-gray">0</span></a>
                                                <a class="layui-btn" onclick="layer.msg('敬请期待')">消息<span class="layui-badge layui-bg-gray">0</span></a>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    <div class="quick">                                        
                                        <div class="con">
                                            <div class="layui-btn-group">
                                                <a href="<?php echo url('Tool/getLog');?>
" class="layui-btn layui-btn-primary">下载日志</a>
                                                <a href="<?php echo url('Tool/removeLog');?>
" class="layui-btn layui-btn-primary javascript" rel="simple_clear">清除日志</a>
                                                <a href="<?php echo url('Tool/switchTrace');?>
" class="layui-btn layui-btn-primary javascript" rel="switch_trace"><?php if (config('app_trace')) {?>关闭Trace<?php } else { ?>启用Trace<?php }?></a>
                                            </div>
                                            <div class="layui-btn-group">
                                                <a href="<?php echo url('Tool/clearCache');?>
" class="layui-btn layui-btn-primary javascript" rel="simple_clear">清除缓存</a>
                                                <a href="<?php echo url('Tool/removeTemp');?>
" class="layui-btn layui-btn-primary javascript" rel="simple_clear" >清临时文件</a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['manual_url'];?>
" target="_blank" class="layui-btn layui-btn-primary">培训手册</a>
                                            </div>
                                        </div>
                                    </div>  
                                                                      
                                </div>
                            
                            
                                <div class="homeLeft">
                                    <div class="cms_count">
                                        <ul class="grid">
                                            <li class="li-1">                                                
                                                <div class="info">
                                                    <a href="<?php echo url('Article/lists');?>
" class="new_tab" data-title="文章列表" data-icon="fa-file-text">
                                                    <i class="icon"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
images/admin/article.png" alt=""/></i>
                                                    <span class="number en-font"><?php if ($_smarty_tpl->tpl_vars['count']->value['article'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['article'];
} else { ?>999+<?php }?></span>
                                                    <span class="name">文章</span>
                                                    </a>
                                                </div>
                                                
                                            </li>
                                            <li class="li-2">
                                                <div class="info">
                                                    <a href="<?php echo url('Product/lists');?>
" class="new_tab" data-title="产品列表" data-icon="fa-camera">
                                                    <i class="icon"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
images/admin/product.png" alt=""/></i>
                                                    <span class="number en-font"><?php if ($_smarty_tpl->tpl_vars['count']->value['product'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['product'];
} else { ?>999+<?php }?></span>
                                                    <span class="name">产品</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="li-3">
                                                <div class="info">
                                                    <a href="<?php echo url('Album/lists');?>
" class="new_tab" data-title="图集列表" data-icon="fa-image">
                                                    <i class="icon"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
images/admin/album.png" alt=""/></i>
                                                    <span class="number en-font"><?php if ($_smarty_tpl->tpl_vars['count']->value['album'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['album'];
} else { ?>999+<?php }?></span>
                                                    <span class="name">图集</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="li-4">
                                                <div class="info">
                                                    <a href="<?php echo url('User/lists');?>
" class="new_tab" data-title="会员列表" data-icon="fa-users">
                                                    <i class="icon"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
images/admin/user.png" alt=""/></i>
                                                    <span class="number en-font"><?php if ($_smarty_tpl->tpl_vars['count']->value['user'] < 999) {
echo $_smarty_tpl->tpl_vars['count']->value['user'];
} else { ?>999+<?php }?></span>
                                                    <span class="name">会员</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="cms_info clearfix">
                                        <div class="you">
                                            <div class="info">
                                                <div class="title en-font">使用者：<a href="<?php echo url('Setting/lists');?>
"  class="new_tab" data-title="设置列表" data-icon=" fa-gears"><i class="fa fa-pencil-square-o"></i></a></div>
                                                <div class="con">
                                                    <ul class="list">
                                                        <li><i class="fa fa-thumbs-up"></i>名称：<span><?php echo setting('site_title');?>
</span></li>
                                                        <li><i class="fa fa-wifi"></i>网址：<span class="en-font"><a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
</a></span></li>
                                                        <li><i class="fa fa-phone"></i>电话：<span class="en-font"><?php echo setting('tel');?>
</span></li>
                                                        <li><i class="fa fa-envelope"></i>邮箱：<span class="en-font"><?php echo setting('email');?>
</span></li>
                                                        <li><i class="fa fa-map-marker"></i> 地址：<span><?php echo setting('address');?>
</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dev">
                                            <div class="info">
                                                <div class="title en-font">开发者：</div>
                                                <div class="con">
                                                    <ul class="list">                                                        
                                                        <li><i class="fa fa-thumbs-up"></i>名称：<span><?php echo $_smarty_tpl->tpl_vars['dev']->value['corp_title'];?>
</span></li>
                                                        <li><i class="fa fa-wifi"></i>网址：<span class="en-font"><a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['site'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['dev']->value['site'];?>
</a></span></li>
                                                        <li><i class="fa fa-phone"></i>电话：<span class="en-font"><?php echo $_smarty_tpl->tpl_vars['dev']->value['tel'];?>
</span></li>
                                                        <li><i class="fa fa-envelope"></i>邮箱：<span class="en-font"><?php echo $_smarty_tpl->tpl_vars['dev']->value['email'];?>
</span></li>
                                                        <li><i class="fa fa-map-marker"></i> 地址：<span><?php echo $_smarty_tpl->tpl_vars['dev']->value['address'];?>
</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="cms_about clearfix">                                        
                                        <div class="server">
                                            <div class="info">
                                                <div class="con">
                                                    <table class="layui-table">
                                                        <tr>
                                                            <th width="25%">存储配额限制</th>
                                                            <th width="25%">配额已使用</th> 
                                                            <th width="25%">配额续费日期</th>
                                                            <th>域名到期日期</th>                                    
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['storage_limit'];?>
</td>
                                                            <td  class="skin">
                                                                <a href="<?php echo url('Tool/getSiteSize');?>
" class="javascript link" rel="get_site_size">『计算』 <span id="showSiteSize" class="layui-badge layui-bg-orange">0KB</span></a>
                                                             </td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['storage_expire'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['domain_expire'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <th>操作系统</th>
                                                            <th>服务器环境</th>
                                                            <th>服务器IP</th>
                                                            <th>上传最大限制</th>                                                         
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['php_os'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['server_software'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['server_name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['upload_max_filesize'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <th>PHP版本</th>
                                                            <th>MYSQL版本</th>
                                                            <th>脚本超时时间</th>
                                                            <th>CURL支持</th>                                                         
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['php_version'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['mysql_version'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['max_execution_time'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['curl_extension'];?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <th>系统官网</th>
                                                            <th>建站手册</th>  
                                                            <th>检查更新</th> 
                                                            <th>系统版本</th>                                                        
                                                        </tr>
                                                        <tr>
                                                            <td class="skin"><a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['cms_site'];?>
" class="link" target="_blank">『访问』</a></td>
                                                            <td class="skin"><a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['use_url'];?>
"  class="link" target="_blank">『查阅』</a></td>
                                                            <td class="skin"><a href="<?php echo $_smarty_tpl->tpl_vars['dev']->value['update_url'];?>
" class="link" target="_blank">『求点赞』</a></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['dev']->value['cms_title'];?>
 V<?php echo $_smarty_tpl->tpl_vars['dev']->value['cms_version'];?>
</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
    </div>
</div>
<div id="lockScreen" <?php if ($_smarty_tpl->tpl_vars['is_lock_screen']->value) {?>style="display: block;"<?php }?>>
    <div class="init">
        <div class="relative">
            <div class="lockTime en-font"></div>
            <div class="pic"><img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['headimg'])===null||$tmp==='' ? 'images/admin/default_headimg.png' : $tmp);?>
" alt=""/><p class="en-font"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login']->value['Member']['nickname'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['login']->value['username'] : $tmp);?>
</p></div>
        </div>
        <div class="wrbox">
            <input  type="password" id="screenPwd" class="wrin" value="" autocomplete="off" placeholder="请输入密码解锁.."/><br /><button id="closeLock" class="layui-btn">立即解锁</button>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
var layer,Tab;
layui.use(['element','layer','tab'], function(){
    var element = layui.element;
    layer = layui.layer;
    
    layer.config({
        zIndex:10000
    });
    
    Tab = layui.tab({ 
    	elem: '.layui-tab' ,
    	maxSetting: {
    		max: 20,
    		tipMsg: '最多只能开启20个'
    	},
    	contextMenu:true,
        autoRefresh:true
    });
})

$('#gloMenu>li').each(function(){
    var childLen  = $(this).find('.navC').find('li').length;
    if(childLen) {
        var html = $(this).find('.navT').find('a').html();
         $(this).find('.navT').html('<span>'+html+'</span>') ;
    }
})

$('#gloMenu').on('click','.navT',function(){
    var parent  = $(this).closest('li');
    var index   = parent.index();
    if(parent.find('.navC').find('li').length){
        if(parent.hasClass('open')){
            parent.find('.navC').stop(true).slideUp(300,function(){ parent.removeClass('open')}) ;
        }else{
            var openLi  = $('#gloMenu').find('li.open') ;
            openLi.removeClass('open').find('.navC').stop(true).slideUp(300) ;
            parent.addClass('open').find('.navC').stop(true).slideDown(300) ;
        }
        
    }
})

$('#gloMenu').on('click','a',function(){
    //if(!$(this).hasClass('isNav')) return false ;
    var href  = $(this).attr('href');
    var title = $(this).attr('data-title') || $(this).attr('title');
    if(!title)  title=$(this).text();        
    var icon  = $(this).attr('data-icon') || $(this).find('i.fa').attr('data-icon');        
    
    
    $('#gloMenu').find('a.current').removeClass('current');
    $(this).addClass('current') ;
    
    
    Tab.tabAdd({
        title: title,
        href : href,
        icon : icon
    })
    return false ;
})

    
$('#gloTop').find('.menuBar').click(function(){
    if($('#gloBox').hasClass('menu_close')){
        $('#gloBox').removeClass('menu_close') ;
    }else{
        $('#gloBox').addClass('menu_close') ;
    }
})

$('.skin-down').hover(function(){
    $(this).find('.skin-show').stop(true,true).slideDown(300);
},function(){
    $(this).find('.skin-show').stop(true,true).slideUp(300);
})

function change_skin(){
    var skin  = $(this).attr('data-skin');    
    var url = "<?php echo url('Tool/set_skin');?>
";
    HKUC.ajax_request.call(this,url,{
            skin : skin
        },
    	{
    		'success':function(msg,data){
  		        $('#gloBox').removeClass().addClass(skin);
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

function simple_clear(){
    var url = $(this).attr('href');
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
                layer.msg(msg)
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

function switch_trace(){
    var url = $(this).attr('href');
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
                layer.msg(msg,{
                    time:1000,
                    end:function(){
                        window.location.reload();
                    }
                });
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}


function get_site_size(){
    var url = $(this).attr('href');
    layer.msg('查询中请稍后...',{ time:30*60*1000, shade :[0.01, '#393D49']});
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
                layer.closeAll();
                $('#showSiteSize').html(msg)
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

function newTime(){
    var now  = new Date();
    var year = now.getFullYear() ;
    var month = (now.getMonth()+1) >=10 ? (now.getMonth()+1): '0' + (now.getMonth()+1);
    var date  = now.getDate() >=10 ? now.getDate(): '0' + now.getDate();
    var hour = now.getHours() >=10 ? now.getHours(): '0' + now.getHours();
    var minute = now.getMinutes() >=10 ? now.getMinutes(): '0' + now.getMinutes();
    var second = now.getSeconds() >=10 ? now.getSeconds(): '0' + now.getSeconds();
    var datetime = year + '-' + month + '-' + date + ' ' + hour + ':' + minute + ':' + second;
    $('.showtime').html(datetime);
    $('.lockTime').html(hour + ':' + minute + ':' + second)
}
newTime()
setInterval(newTime,1000)


//同时按下alt+L锁屏
document.onkeydown = function(event){
    if (event.keyCode == 76 && event.altKey){
        lockScreen()
    }
}


//锁屏
function lockScreen(){
    if($('#lockScreen').is(':visible')) return false ; 
    $('#screenPwd').val('');   
    $('#lockScreen').fadeIn(300, function(){
        $('#closeLock').addClass('shake');
    })
    var url = "<?php echo url('Tool/lock_screen');?>
";
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

$('#screenPwd').keyup(function(event){
    if (event.keyCode == 13) {
        $('#closeLock').trigger('click');
    }
})

$('#closeLock').click(function(){
    var url = "<?php echo url('Tool/relieve_screen');?>
";
    var pwd = $.trim($('#screenPwd').val());
    if (!pwd) {
       layer.msg('请先输入密码'); 
       return false;
    }
    HKUC.ajax_request.call(this,url,{
            pwd : pwd
        },
    	{
    		'success':function(msg,data){
    		    layer.closeAll();
  		        $('#lockScreen').fadeOut(300);
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg);
    		}
    	}
    );
})

//resize
$(window).resize(function(){
    winWidth = $(window).width();
    heiHeght = $(window).height();
    $('#gloRght').height(heiHeght - 51);
    $('#gloLeft,#gloSLeft').css('height',(heiHeght - 51) + 'px')
    $('.layui-tab-content').height(heiHeght - 51 - 40);
    
}).trigger('resize')

//Tab
$(window).resize(function(){
    if(typeof(Tab) != 'undefined') Tab.resize();
})

$('.tab-prev').unbind('click').bind('click',function(){
    var left    = $('.layui-tab-title').position().left ;
    left  = left+117 <0 ? left+117 :0 ;
    $('.layui-tab-title').stop(true).animate({ left : left },500);
})

$('.tab-next').unbind('click').bind('click',function(){
    var left    = $('.layui-tab-title').position().left ;
    var boxWid  = $('.layui-tab-title').width() ;
    var liWid   = 0;
    $('.layui-tab-title').children('span').remove().end().find('li').each(function(){
        liWid += $(this).outerWidth() ;
    })
    left  = left-117 > -(liWid-boxWid) ? left-117 :-(liWid-boxWid);
    if(left>0)left =  0;
    $('.layui-tab-title').stop(true).animate({ left : left },500);
})

function full_screen(){
    var docElm = document.documentElement;
    //W3C
    if (docElm.requestFullscreen) {
    docElm.requestFullscreen();
    }
    //FireFox
    else if (docElm.mozRequestFullScreen) {
    docElm.mozRequestFullScreen();
    }
    //Chrome等
    else if (docElm.webkitRequestFullScreen) {
    docElm.webkitRequestFullScreen();
    }
    //IE11
    else if (docElm.msRequestFullscreen) {
    docElm.msRequestFullscreen();
    }
}

<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3047759f97c4e81a144_01420562';
?>

<?php echo '<script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
layui.use(['layer'], function(){
  var layer = layui.layer
  layer.msg('<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
',{
    offset :['50px', '35%']
  });
});
<?php }?>
<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:3211359f97c4e860658_69497627%%*/
if ($_valid && !is_callable('content_59f97c4e860658_14880853')) {
function content_59f97c4e860658_14880853 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3211359f97c4e860658_69497627';
?>

<?php
/*/%%SmartyNocache:3211359f97c4e860658_69497627%%*/
}
}
?><?php
/* smarty_template_function_url_3211359f97c4e860658_69497627 */
if (!function_exists('smarty_template_function_url_3211359f97c4e860658_69497627')) {
function smarty_template_function_url_3211359f97c4e860658_69497627($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>'','item'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if (is_array($_smarty_tpl->tpl_vars['url']->value)) {
if ($_smarty_tpl->tpl_vars['url']->value[1] && $_smarty_tpl->tpl_vars['url']->value['parse'] && $_smarty_tpl->tpl_vars['item']->value) {
$_from = $_smarty_tpl->tpl_vars['url']->value['parse'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
if (!$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]) {?>continue<?php }
$_smarty_tpl->createLocalArrayVariable('url', null, 0);
$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]];
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
}
echo url($_smarty_tpl->tpl_vars['url']->value[0],(($tmp = @$_smarty_tpl->tpl_vars['url']->value[1])===null||$tmp==='' ? array() : $tmp),(($tmp = @$_smarty_tpl->tpl_vars['url']->value[2])===null||$tmp==='' ? true : $tmp));
} else {
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_url_3211359f97c4e860658_69497627 */

?>
<?php
/* smarty_template_function_furl_3211359f97c4e860658_69497627 */
if (!function_exists('smarty_template_function_furl_3211359f97c4e860658_69497627')) {
function smarty_template_function_furl_3211359f97c4e860658_69497627($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if ($_smarty_tpl->tpl_vars['url']->value) {
if (strpos($_smarty_tpl->tpl_vars['url']->value,'http://') === false && strpos($_smarty_tpl->tpl_vars['url']->value,'https://') === false) {
if ($_smarty_tpl->tpl_vars['url']->value[0] == '/') {
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(substr($_smarty_tpl->tpl_vars['url']->value,1), null, 0);
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['root']->value).($_smarty_tpl->tpl_vars['url']->value), null, 0);
}
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_furl_3211359f97c4e860658_69497627 */

?>
