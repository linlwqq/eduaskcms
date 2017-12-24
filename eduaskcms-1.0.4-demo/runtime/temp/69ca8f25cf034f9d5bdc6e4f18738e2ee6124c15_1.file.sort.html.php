<?php /* Smarty version 3.1.27, created on 2017-11-01 16:48:44
         compiled from "E:\phpStudy\WWW\eduaskcms\app\run\view\sort.html" */ ?>
<?php
/*%%SmartyHeaderCode:2242359f98a6c2544c7_14358258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ca8f25cf034f9d5bdc6e4f18738e2ee6124c15' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\sort.html',
      1 => 1502783081,
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
    '2b2bf8c6f1f55c9995943ac1dc2a9561e810e2df' => 
    array (
      0 => '2b2bf8c6f1f55c9995943ac1dc2a9561e810e2df',
      1 => 0,
      2 => 'string',
    ),
    '7cd5c231eb5d17e9f83d4c719fb0eb195ffe58a5' => 
    array (
      0 => '7cd5c231eb5d17e9f83d4c719fb0eb195ffe58a5',
      1 => 0,
      2 => 'string',
    ),
    'ff4954569fc58e3e3e1dbc263a183fdfcb9ac2ab' => 
    array (
      0 => 'ff4954569fc58e3e3e1dbc263a183fdfcb9ac2ab',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2242359f98a6c2544c7_14358258',
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
  'unifunc' => 'content_59f98a6c2fc462_44604055',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\69ca8f25cf034f9d5bdc6e4f18738e2ee6124c15_1.file.sort.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_url_191359f98a6c29e853_79832180',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\69ca8f25cf034f9d5bdc6e4f18738e2ee6124c15_1.file.sort.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_furl_191359f98a6c29e853_79832180',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f98a6c2fc462_44604055')) {
function content_59f98a6c2fc462_44604055 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2242359f98a6c2544c7_14358258';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '191359f98a6c29e853_79832180', 'content_59f98a6c29e857_03939900');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '2242359f98a6c2544c7_14358258';
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
$_smarty_tpl->properties['nocache_hash'] = '2242359f98a6c2544c7_14358258';
?>

<div class="admin_main">
    <div class="admin_header_fixed">
        <div class="admin_header clearfix">
            <div class="title"><i></i><?php echo $_smarty_tpl->tpl_vars['title']->value['operation'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
    		<div class="action">
                <b></b>
                <div class="layui-btn-group <?php if (count($_smarty_tpl->tpl_vars['actions']->value) == 1) {?>layui-btn-group-only<?php }?>">
    			<?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
if (!$_smarty_tpl->tpl_vars['item']->value) {
continue 1;
}?><a class="layui-btn layui-btn-danger layui-btn-small <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
" href="<?php $_smarty_tpl->callTemplateFunction ('url', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['item']->value['url']), true);?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </div>
            </div>
    		<?php }?>
        </div>
    </div>
    <div class="admin_base">
    
<div class="box_sort">
    <div class="box_content">
        <ul id="sortable" class="list">
            <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
            <li class="ui-state-default clearfix">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="sort_left"><a rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<span class="em">:)</span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                        <td class="sort_rght">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                        <img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['thumb'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['image'] : $tmp);?>
" alt="" />
                        <?php }?>
                        </td>
                    </tr>
                </table>
            </li>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        </ul>
        <form method="post" onsubmit="return order_submit()">
            <input name="data[order]" type="hidden" />
            <div style="text-align: center;padding-top: 15px;">
                <input  type="submit" class="layui-btn" value="提交"/>
            </div>
        </form>
    </div>
</div>


    </div>
    <div class="admin_bottom">
    
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2242359f98a6c2544c7_14358258';
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

<?php echo '<script'; ?>
 type="text/javascript">
$( "#sortable" ).sortable({
	placeholder: "ui-state-highlight"
});
$( "#sortable" ).disableSelection();

function order_submit(){
    
    var order_arr=[];
	$('li.ui-state-default').each(function(){
		order_arr.push($(this).find('a').attr('rel'));
	})
	$('input[name="data[order]"]').val(order_arr.join(','));
	return true;
}

<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:191359f98a6c29e853_79832180%%*/
if ($_valid && !is_callable('content_59f98a6c29e857_03939900')) {
function content_59f98a6c29e857_03939900 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '191359f98a6c29e853_79832180';
?>

<?php
/*/%%SmartyNocache:191359f98a6c29e853_79832180%%*/
}
}
?><?php
/* smarty_template_function_url_191359f98a6c29e853_79832180 */
if (!function_exists('smarty_template_function_url_191359f98a6c29e853_79832180')) {
function smarty_template_function_url_191359f98a6c29e853_79832180($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_191359f98a6c29e853_79832180 */

?>
<?php
/* smarty_template_function_furl_191359f98a6c29e853_79832180 */
if (!function_exists('smarty_template_function_furl_191359f98a6c29e853_79832180')) {
function smarty_template_function_furl_191359f98a6c29e853_79832180($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_191359f98a6c29e853_79832180 */

?>
