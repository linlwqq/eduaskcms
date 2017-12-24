<?php /* Smarty version 3.1.27, created on 2017-11-01 15:17:20
         compiled from "E:\phpStudy\WWW\eduaskcms\app\run\view\PowerTree\tree.html" */ ?>
<?php
/*%%SmartyHeaderCode:1871759f97500dc38c1_47991866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98d331ce30d75ee2aceaf441a4435d7c6adb2c1' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\PowerTree\\tree.html',
      1 => 1509520623,
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
    'bb24d7906b9c335b76c5408489d52831ff0ee6b5' => 
    array (
      0 => 'bb24d7906b9c335b76c5408489d52831ff0ee6b5',
      1 => 0,
      2 => 'string',
    ),
    'd1128765d636758c814e62bfd514aa9c50455c65' => 
    array (
      0 => 'd1128765d636758c814e62bfd514aa9c50455c65',
      1 => 0,
      2 => 'string',
    ),
    '92ca36b3a9c57cc4bfc0b83f02cbc85494584792' => 
    array (
      0 => '92ca36b3a9c57cc4bfc0b83f02cbc85494584792',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1871759f97500dc38c1_47991866',
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
  'unifunc' => 'content_59f97500e92977_86095041',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\e98d331ce30d75ee2aceaf441a4435d7c6adb2c1_1.file.tree.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_url_1293459f97500e09dd4_96358522',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\e98d331ce30d75ee2aceaf441a4435d7c6adb2c1_1.file.tree.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_furl_1293459f97500e09dd4_96358522',
    ),
    'tree' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\e98d331ce30d75ee2aceaf441a4435d7c6adb2c1_1.file.tree.html.php',
      'uid' => 'e98d331ce30d75ee2aceaf441a4435d7c6adb2c1',
      'call_name' => 'smarty_template_function_tree_1871759f97500dc38c1_47991866',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f97500e92977_86095041')) {
function content_59f97500e92977_86095041 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1871759f97500dc38c1_47991866';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1293459f97500e09dd4_96358522', 'content_59f97500e05f56_86895653');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '1871759f97500dc38c1_47991866';
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
$_smarty_tpl->properties['nocache_hash'] = '1871759f97500dc38c1_47991866';
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
    
<?php if (powertree()) {?>


<div id="menu_tree">
    <?php $_smarty_tpl->callTemplateFunction ('tree', $_smarty_tpl, array('data'=>reset(powertree('threaded')),'level'=>1), true);?>

</div>

<?php } else { ?>
<div style="text-align: center;padding-top: 50px;"><a href="<?php echo url('PowerTree/start');?>
" rel="start" class="layui-btn javascript">初始化权限节点</a>
    <p>首次使用，请先<strong>初始化权限节点</strong>；以避免手动添加大量节点数据。</p>
</div>
<?php }?>


    </div>
    <div class="admin_bottom">
    
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1871759f97500dc38c1_47991866';
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
>

function start(){
    var url = $(this).attr('href');
    layer.msg('处理中请稍后...',{ time:20, shade :[0.01, '#393D49']});
    HKUC.ajax_request.call(this,url,null,
    	{
    		'success':function(msg,data){
  		        layer.closeAll();
                layer.alert(msg, function(){
                    location.reload();
                });
                
    		},
    		'error':function(msg,data){
                  layer.closeAll();
                  layer.msg(msg)
    		}
    	}
    );
}

$('#menu_tree .self').click(function(){
    var parent = $(this).parent('.menu_level') ;
    $('#menu_tree').find('.isClick').removeClass('isClick');
    parent.addClass('isClick');
    if(parent.hasClass('no_child')) return false ;
    if(parent.hasClass('isOpen'))
        parent.removeClass('isOpen').children('.menu_children').hide().end().children('.self').find('.fa-icon').removeClass('fa-minus-circle').addClass('fa-plus-circle')
    else
        parent.addClass('isOpen').children('.menu_children').show().end().children('.self').find('.fa-icon').removeClass('fa-plus-circle').addClass('fa-minus-circle')
}).find('a').click(function(e){
    e.stopPropagation();
    if($(this).hasClass('item-action-delete')){
        var href  = $(this).attr('href') ;
        layer.confirm('该操作不可逆，请确认删除该栏目及其子栏目？',function(){
            layer.closeAll();
            location.href  = href; 
        })
        return false ;
    }
})

<?php echo '</script'; ?>
>



</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:1293459f97500e09dd4_96358522%%*/
if ($_valid && !is_callable('content_59f97500e05f56_86895653')) {
function content_59f97500e05f56_86895653 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1293459f97500e09dd4_96358522';
?>

<?php
/*/%%SmartyNocache:1293459f97500e09dd4_96358522%%*/
}
}
?><?php
/* smarty_template_function_url_1293459f97500e09dd4_96358522 */
if (!function_exists('smarty_template_function_url_1293459f97500e09dd4_96358522')) {
function smarty_template_function_url_1293459f97500e09dd4_96358522($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_1293459f97500e09dd4_96358522 */

?>
<?php
/* smarty_template_function_furl_1293459f97500e09dd4_96358522 */
if (!function_exists('smarty_template_function_furl_1293459f97500e09dd4_96358522')) {
function smarty_template_function_furl_1293459f97500e09dd4_96358522($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_1293459f97500e09dd4_96358522 */

?>
<?php
/* smarty_template_function_tree_1871759f97500dc38c1_47991866 */
if (!function_exists('smarty_template_function_tree_1871759f97500dc38c1_47991866')) {
function smarty_template_function_tree_1871759f97500dc38c1_47991866($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('level'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['children'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['children']->_loop = false;
$_smarty_tpl->tpl_vars['self_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['self_id']->value => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
$foreach_children_Sav = $_smarty_tpl->tpl_vars['children'];
?>
<div class="menu_level menu_level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['children']->value) {?>no_child<?php }?> <?php if ($_smarty_tpl->tpl_vars['level']->value > 1 && $_smarty_tpl->tpl_vars['children']->value) {?>isOpen<?php }?>">
    <div class="self clearfix">
        <i class="lline"></i>
        <?php $_smarty_tpl->tpl_vars['child_count'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['children']->value), null, 0);?>
        <span class="menu_action">
            <a href="<?php echo url('PowerTree/create',array('parent_id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
"><i class="fa fa-plus"></i>添加子节点</a>
            <?php if ($_smarty_tpl->tpl_vars['child_count']->value > 1) {?><a href="<?php echo url('PowerTree/sort',array('parent_id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
"><i class="fa fa-sort"></i>排序子节点</a><?php }?>            
            <a href="<?php echo url('PowerTree/modify',array('id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
"><i class="fa fa-edit"></i>编辑</a>
            <a href="<?php echo url('PowerTree/delete',array('id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
" class="item-action-delete"><i class="fa fa-close"></i>删除</a>
            <?php if (powertree($_smarty_tpl->tpl_vars['self_id']->value,'url')) {?>
            <a href="<?php echo url(powertree($_smarty_tpl->tpl_vars['self_id']->value,'url'));?>
"><i class="fa fa-eye"></i>访问</a>
            <?php }?>
        </span>
        <span class="menu_info clearfix">            
            <i class="fa  <?php if ($_smarty_tpl->tpl_vars['children']->value) {
if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>fa-plus-circle<?php } else { ?>fa-minus-circle<?php }
} else { ?>fa-minus-circle<?php }?>  fa-lg left fa-icon"></i>
            <span class="menu_title left">
                <?php if (powertree($_smarty_tpl->tpl_vars['self_id']->value,'icon')) {?><i class="fa <?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'icon');?>
"></i><?php }?> 
                <a href="<?php echo url('PowerTree/modify',array('id'=>$_smarty_tpl->tpl_vars['self_id']->value));?>
"><?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'title');?>
</a>
            </span>
            <span class="menu_id left">〖ID：<?php echo $_smarty_tpl->tpl_vars['self_id']->value;?>
〗</span>  
            <span class="left en-font">〖控制器：<?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'controller');?>
〗</span>
            <?php if (powertree($_smarty_tpl->tpl_vars['self_id']->value,'action')) {?><span class="left en-font">〖方法：<?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'action');?>
〗</span> <?php }?>                 
            <?php if ($_smarty_tpl->tpl_vars['child_count']->value > 0) {?><span class="menu_child_count left">〖子节点数：<?php echo $_smarty_tpl->tpl_vars['child_count']->value;?>
〗</span><?php }?>
        </span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['children']->value) {?>
    <div class="menu_children">
        <?php $_smarty_tpl->callTemplateFunction ('tree', $_smarty_tpl, array('data'=>$_smarty_tpl->tpl_vars['children']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), false);?>

    </div>
    <?php }?>
</div>
<?php
$_smarty_tpl->tpl_vars['children'] = $foreach_children_Sav;
}
?>
<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_tree_1871759f97500dc38c1_47991866 */

?>
