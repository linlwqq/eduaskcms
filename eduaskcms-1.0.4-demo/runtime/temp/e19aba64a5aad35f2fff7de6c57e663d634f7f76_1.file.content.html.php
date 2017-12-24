<?php /* Smarty version 3.1.27, created on 2017-11-01 15:09:59
         compiled from "E:\phpStudy\WWW\eduaskcms\app\run\view\Power\content.html" */ ?>
<?php
/*%%SmartyHeaderCode:2563859f97347ad0b99_49736403%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19aba64a5aad35f2fff7de6c57e663d634f7f76' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\Power\\content.html',
      1 => 1509440555,
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
    '3ae02d216bcdddf1c3202e4208eb8288eba0f730' => 
    array (
      0 => '3ae02d216bcdddf1c3202e4208eb8288eba0f730',
      1 => 0,
      2 => 'string',
    ),
    '9384bf5b869468a934f90bf568e6a14f5f3e8d74' => 
    array (
      0 => '9384bf5b869468a934f90bf568e6a14f5f3e8d74',
      1 => 0,
      2 => 'string',
    ),
    'd28a1e286df93a4d5a8753902668bbb51be742d7' => 
    array (
      0 => 'd28a1e286df93a4d5a8753902668bbb51be742d7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2563859f97347ad0b99_49736403',
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
  'unifunc' => 'content_59f97347bc6d43_70883012',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\e19aba64a5aad35f2fff7de6c57e663d634f7f76_1.file.content.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_url_2060259f97347b1eda1_76577526',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\e19aba64a5aad35f2fff7de6c57e663d634f7f76_1.file.content.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_furl_2060259f97347b1eda1_76577526',
    ),
    'tree' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\e19aba64a5aad35f2fff7de6c57e663d634f7f76_1.file.content.html.php',
      'uid' => 'e19aba64a5aad35f2fff7de6c57e663d634f7f76',
      'call_name' => 'smarty_template_function_tree_2563859f97347ad0b99_49736403',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f97347bc6d43_70883012')) {
function content_59f97347bc6d43_70883012 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2563859f97347ad0b99_49736403';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2060259f97347b1eda1_76577526', 'content_59f97347b1eda1_42789596');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '2563859f97347ad0b99_49736403';
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
$_smarty_tpl->properties['nocache_hash'] = '2563859f97347ad0b99_49736403';
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
    
<?php echo $_smarty_tpl->tpl_vars['form']->value->create(array('type'=>'file','class'=>'layui-form','novalidate'=>true));?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".type");?>

<?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".foreign_id");?>

<div id="Power">
    <div class="userList">
        <ul class="list">
            <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ug'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ug']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ug']->value) {
$_smarty_tpl->tpl_vars['ug']->_loop = true;
$foreach_ug_Sav = $_smarty_tpl->tpl_vars['ug'];
?>
            <li>
                <div class="ug">
                    <i class="fa fa-minus-circle  fa-lg icon"></i>
                    <a href="<?php echo url('content',array('type'=>'usergroup','foreign'=>$_smarty_tpl->tpl_vars['ug']->value['id']));?>
" <?php if ($_smarty_tpl->tpl_vars['args']->value['type'] == 'usergroup' && $_smarty_tpl->tpl_vars['args']->value['foreign'] == $_smarty_tpl->tpl_vars['ug']->value['id']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ug']->value['title'];?>
</a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['ug']->value['User']) {?>
                <dl class="en-font">
                    <?php
$_from = $_smarty_tpl->tpl_vars['ug']->value['User'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['u'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['u']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
$foreach_u_Sav = $_smarty_tpl->tpl_vars['u'];
?>
                    <dd>
                        <a href="<?php echo url('remove',array('foreign'=>$_smarty_tpl->tpl_vars['u']->value['id']));?>
" class="remove javascript" rel="remove_user_power"><i class="fa fa-remove"></i></a>
                        <a href="<?php echo url('content',array('type'=>'user','foreign'=>$_smarty_tpl->tpl_vars['u']->value['id']));?>
" <?php if ($_smarty_tpl->tpl_vars['args']->value['type'] == 'user' && $_smarty_tpl->tpl_vars['args']->value['foreign'] == $_smarty_tpl->tpl_vars['u']->value['id']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
</a></dd>
                    <?php
$_smarty_tpl->tpl_vars['u'] = $foreach_u_Sav;
}
?>
                </dl>
                <?php }?>
            </li>
            <?php
$_smarty_tpl->tpl_vars['ug'] = $foreach_ug_Sav;
}
?>
        </ul>
        <div class="layui-btn-group">
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="power">提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            <a class="layui-btn  power-all  layui-btn-normal" href="javascript:void(0);">全选</a>
        </div>
        
        <div class="layui-btn-group">
            <a class="layui-btn  layui-btn-normal power-all-reverse" href="javascript:void(0);">反选</a>
            <a class="layui-btn concise layui-btn-primary" href="javascript:void(0);">简洁</a>
            <a class="layui-btn fullopen layui-btn-primary" href="javascript:void(0);">展/收</a>            
        </div>
        
    </div>

    <?php if (powertree()) {?>
    
    
    <div id="menu_tree">        
        <?php $_smarty_tpl->callTemplateFunction ('tree', $_smarty_tpl, array('data'=>reset(powertree('threaded')),'level'=>1), true);?>
        
    </div>
    
    <?php } else { ?>
    <div >
        <a href="<?php echo url('PowerTree/lists');?>
" rel="start" class="layui-btn new_tab" data-icon="fa-tree">权限节点</a>        
    </div>
    <?php }?>  
</div>
<?php echo $_smarty_tpl->tpl_vars['form']->value->end();?>


    </div>
    <div class="admin_bottom">
    
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2563859f97347ad0b99_49736403';
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
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
layer.msg("<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
");
<?php }?>

function remove_user_power(){
    var url = $(this).attr('href');
    layer.confirm('请确认是否删除用户授权？',{ icon: 3, title:'提示'}, function(){
        HKUC.ajax_request.call(this,url,null,
        	{
        		'success':function(msg,data){
      		        layer.closeAll();
                    layer.msg(msg);
        		},
        		'error':function(msg,data){
                      layer.closeAll();
                      layer.msg(msg);
        		}
        	}
        );
    });
}

layui.use(['form','element'], function(){
    var layForm = layui.form;
    
    layForm.on('submit(power)', function(data){
        if (!$('#PowerType').val() || !$('#PowerForeignId')) {
            layer.msg('请选择一个用户组或用户进行授权');
            return false;
        }
        var who = $('.userList').find('a.current').text();
        layer.confirm('请确认对[' + who + ']授权完毕？',{ icon: 3, title:'提示'}, function(){
            $('#PowerForm').submit();
        });
        return false ;
    });
    
    $('.concise').click(function(){
        $('#Power').toggleClass('concise');
    })
    
    $('.fullopen').click(function(){
        $(this).toggleClass('isOpen');
        if ($(this).hasClass('isOpen')) {
             $('#menu_tree').find('.self').each(function(){
                var parent = $(this).parent('.menu_level') ;
                if(!parent.hasClass('isOpen'))
                    parent.addClass('isOpen').children('.menu_children').show().end().children('.self').find('.fa-icon').removeClass('fa-plus-circle').addClass('fa-minus-circle')
            })
        } else {
            $('#menu_tree').find('.self').each(function(){
                var parent = $(this).parent('.menu_level') ;
                if(parent.hasClass('isOpen'))
                    parent.removeClass('isOpen').children('.menu_children').hide().end().children('.self').find('.fa-icon').removeClass('fa-minus-circle').addClass('fa-plus-circle')
            })
        }
    })
    
    
    
    $('.layui-select-all').click(function(){
        if (!$(this).closest('.menu_level').hasClass('isOpen')) {
            $(this).parent().trigger('click');
        }
        
        var child = $(this).closest('.menu_level').find('.menu_children').find('.switch');
        child.each(function(index, item){
            item.checked = 1;
        });
        layForm.render('checkbox');
    })
    
    $('.layui-select-reverse').click(function(){
        if (!$(this).closest('.menu_level').hasClass('isOpen')) {
            $(this).parent().trigger('click');
        }
        var child = $(this).closest('.menu_level').find('.menu_children').find('.switch');
        child.each(function(index, item){
            if (item.checked) {
                item.checked = 0
            } else {
                item.checked = 1;
            }
        });
        layForm.render('checkbox');
    })
    
    $('.power-all-reverse').click(function(){
        var child = $('#menu_tree').find('.menu_children').find('.switch');
        child.each(function(index, item){
            if (item.checked) {
                item.checked = 0
            } else {
                item.checked = 1;
            }
        });
        layForm.render('checkbox');
    })
    
    $('.power-all').click(function(){
        var child = $('#menu_tree').find('.menu_children').find('.switch');
        child.each(function(index, item){
            item.checked = 1;
        });
        layForm.render('checkbox');
    })
    
})

$('.userList').find('i.icon').click(function(){
    if ($(this).hasClass('fa-minus-circle')) {
        $(this).removeClass('fa-minus-circle').addClass('fa-plus-circle').closest('li').find('dl').stop(true, true).slideUp(300);
    } else {
        $(this).removeClass('fa-plus-circle').addClass('fa-minus-circle').closest('li').find('dl').stop(true, true).slideDown(300);
    }
})


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
})

<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:2060259f97347b1eda1_76577526%%*/
if ($_valid && !is_callable('content_59f97347b1eda1_42789596')) {
function content_59f97347b1eda1_42789596 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2060259f97347b1eda1_76577526';
?>

<?php
/*/%%SmartyNocache:2060259f97347b1eda1_76577526%%*/
}
}
?><?php
/* smarty_template_function_url_2060259f97347b1eda1_76577526 */
if (!function_exists('smarty_template_function_url_2060259f97347b1eda1_76577526')) {
function smarty_template_function_url_2060259f97347b1eda1_76577526($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_2060259f97347b1eda1_76577526 */

?>
<?php
/* smarty_template_function_furl_2060259f97347b1eda1_76577526 */
if (!function_exists('smarty_template_function_furl_2060259f97347b1eda1_76577526')) {
function smarty_template_function_furl_2060259f97347b1eda1_76577526($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_2060259f97347b1eda1_76577526 */

?>
<?php
/* smarty_template_function_tree_2563859f97347ad0b99_49736403 */
if (!function_exists('smarty_template_function_tree_2563859f97347ad0b99_49736403')) {
function smarty_template_function_tree_2563859f97347ad0b99_49736403($_smarty_tpl,$params) {
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
            
            <span class="power clearfix">
                <?php if ($_smarty_tpl->tpl_vars['child_count']->value > 0) {?>
                <div class="layui-btn-group">
                    <a href="javascript:void(0);" class="layui-select-all layui-btn layui-btn-small">全选</a>
                    <a href="javascript:void(0);" class="layui-select-reverse layui-btn layui-btn-small layui-btn-primary">反选</a>
                </div>
                <?php } else { ?>
                <input  type="checkbox" class="switch" lay-skin="switch" lay-text="开|关" lay-filter="switchTest" name="data[<?php echo $_smarty_tpl->tpl_vars['mdl']->value;?>
][content][]" value="<?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'together');?>
" <?php if (in_array(powertree($_smarty_tpl->tpl_vars['self_id']->value,'together'),(array)$_smarty_tpl->tpl_vars['powers']->value)) {?>checked<?php }?>/>
                <?php }?>
            </span>
            
            <span class="menu_info clearfix">            
                <i class="fa  <?php if ($_smarty_tpl->tpl_vars['children']->value) {
if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>fa-plus-circle<?php } else { ?>fa-minus-circle<?php }
} else { ?>fa-minus-circle<?php }?>  fa-lg left fa-icon"></i>
                <span class="menu_title left">
                    <?php if (powertree($_smarty_tpl->tpl_vars['self_id']->value,'icon')) {?><i class="fa <?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'icon');?>
"></i><?php }?> 
                    <a href="javascript:void(0);"><?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'title');?>
</a>
                </span>
                <span class="menu_id left nc">〖ID：<?php echo $_smarty_tpl->tpl_vars['self_id']->value;?>
〗</span>  
                <span class="left en-font nc">〖控制器：<?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'controller');?>
〗</span>
                <?php if (powertree($_smarty_tpl->tpl_vars['self_id']->value,'action')) {?><span class="left en-font nc">〖方法：<?php echo powertree($_smarty_tpl->tpl_vars['self_id']->value,'action');?>
〗</span> <?php }?>                 
                <?php if ($_smarty_tpl->tpl_vars['child_count']->value > 0) {?><span class="menu_child_count left nc">〖子节点数：<?php echo $_smarty_tpl->tpl_vars['child_count']->value;?>
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
/*/ smarty_template_function_tree_2563859f97347ad0b99_49736403 */

?>
