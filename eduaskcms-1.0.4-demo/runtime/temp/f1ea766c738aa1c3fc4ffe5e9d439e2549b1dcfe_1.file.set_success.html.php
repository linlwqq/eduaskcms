<?php /* Smarty version 3.1.27, created on 2017-11-01 17:11:24
         compiled from "E:\phpStudy\WWW\eduaskcms\app\run\view\Setting\set_success.html" */ ?>
<?php
/*%%SmartyHeaderCode:5659f98fbcb1d989_95833813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ea766c738aa1c3fc4ffe5e9d439e2549b1dcfe' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\Setting\\set_success.html',
      1 => 1503495949,
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
    '395c1ca30178b81944d7ec39eb6404da166e8d86' => 
    array (
      0 => '395c1ca30178b81944d7ec39eb6404da166e8d86',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '5659f98fbcb1d989_95833813',
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
  'unifunc' => 'content_59f98fbcb92ca7_61370086',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\f1ea766c738aa1c3fc4ffe5e9d439e2549b1dcfe_1.file.set_success.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_url_3145959f98fbcb5c192_42396256',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\f1ea766c738aa1c3fc4ffe5e9d439e2549b1dcfe_1.file.set_success.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_furl_3145959f98fbcb5c192_42396256',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f98fbcb92ca7_61370086')) {
function content_59f98fbcb92ca7_61370086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5659f98fbcb1d989_95833813';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '3145959f98fbcb5c192_42396256', 'content_59f98fbcb5c199_24330595');
/*  End of included template "functions.html" */?>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '5659f98fbcb1d989_95833813';
?>

<div class="admin_message">
    <div class="notification success">
    	<div>设置成功</div>
    </div>
    
    <div class="redirect layui-btn-group">
        <a class="javascript redirect_selection  hidden layui-btn layui-btn layui-btn-danger" id="rs_close">关闭窗口</a>
        <a href="<?php echo url('lists',array('parent_id'=>$_smarty_tpl->tpl_vars['args']->value['parent_id']));?>
" id="rs_return" class="redirect_selection  layui-btn hidden layui-btn-normal layui-btn-danger">返回列表</a>
     </div>
    <?php $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable(3, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['auto']->value) {?>
    <div class="count_down hidden">
    	系统将在<span id="count_down_count"><?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
</span>秒后自动关闭窗口
    </div>
    
    <?php echo '<script'; ?>
>
    	var left_seconds=parseInt('<?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
');
    	function count_down(){
    		if(left_seconds<0){
                $('#rs_close').trigger('click') ;
    			return;
    		}
    		$('#count_down_count').html(left_seconds--);
    		count_down.timeout=window.setTimeout(count_down,1000);
    	}
    	$(document).ready(function(){ count_down(); });
    	$('#cancel_count_down').click(function(){
    		window.clearTimeout(count_down.timeout);
    		$(this).parent().remove();
    	})
    	
    <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        if(self != parent){            
            $('.count_down').show() ;
            $('#rs_close').css('display','inline-block').click(function(){
                //top.$('.layui-tab').find('.layui-tab-title li.layui-this .layui-tab-close').trigger('click');
                parent.layer.closeAll();
                parent.location.reload();
            }); 
        }else{
            $('#rs_return').css('display','inline-block');
        }
          
        
    })
    <?php echo '</script'; ?>
>
</div>

<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>

</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:3145959f98fbcb5c192_42396256%%*/
if ($_valid && !is_callable('content_59f98fbcb5c199_24330595')) {
function content_59f98fbcb5c199_24330595 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3145959f98fbcb5c192_42396256';
?>

<?php
/*/%%SmartyNocache:3145959f98fbcb5c192_42396256%%*/
}
}
?><?php
/* smarty_template_function_url_3145959f98fbcb5c192_42396256 */
if (!function_exists('smarty_template_function_url_3145959f98fbcb5c192_42396256')) {
function smarty_template_function_url_3145959f98fbcb5c192_42396256($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_3145959f98fbcb5c192_42396256 */

?>
<?php
/* smarty_template_function_furl_3145959f98fbcb5c192_42396256 */
if (!function_exists('smarty_template_function_furl_3145959f98fbcb5c192_42396256')) {
function smarty_template_function_furl_3145959f98fbcb5c192_42396256($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_3145959f98fbcb5c192_42396256 */

?>
