<?php /* Smarty version 3.1.27, created on 2017-11-01 17:11:18
         compiled from "E:\phpStudy\WWW\eduaskcms\app\run\view\Setting\set.html" */ ?>
<?php
/*%%SmartyHeaderCode:3186059f98fb6982137_60083358%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a10491766d67fe610c36aa838e4c79356bbae05' => 
    array (
      0 => 'E:\\phpStudy\\WWW\\eduaskcms\\app\\run\\view\\Setting\\set.html',
      1 => 1505983813,
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
    '13187da6fac83b6900c9c12f0b0ee2b4becc59c0' => 
    array (
      0 => '13187da6fac83b6900c9c12f0b0ee2b4becc59c0',
      1 => 0,
      2 => 'string',
    ),
    '0bbc5f321b64c6e26de131315cf85cd0982199a6' => 
    array (
      0 => '0bbc5f321b64c6e26de131315cf85cd0982199a6',
      1 => 0,
      2 => 'string',
    ),
    '4c275e652359b1b5e3fded58b0f08a2ea576e30e' => 
    array (
      0 => '4c275e652359b1b5e3fded58b0f08a2ea576e30e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3186059f98fb6982137_60083358',
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
  'unifunc' => 'content_59f98fb6a5cd65_62177775',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\4a10491766d67fe610c36aa838e4c79356bbae05_1.file.set.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_url_3259559f98fb69c8647_08366098',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'E:\\phpStudy\\WWW\\eduaskcms\\runtime\\temp\\4a10491766d67fe610c36aa838e4c79356bbae05_1.file.set.html.php',
      'uid' => '53d494e8e3dc4b687da22f0f361353840244ad41',
      'call_name' => 'smarty_template_function_furl_3259559f98fb69c8647_08366098',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f98fb6a5cd65_62177775')) {
function content_59f98fb6a5cd65_62177775 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_parse_json')) require_once 'E:\\phpStudy\\WWW\\libs\\smarty\\smarty-3.1.27\\libs\\plugins\\modifier.parse_json.php';

$_smarty_tpl->properties['nocache_hash'] = '3186059f98fb6982137_60083358';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '3259559f98fb69c8647_08366098', 'content_59f98fb69c8643_74364844');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '3186059f98fb6982137_60083358';
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
$_smarty_tpl->properties['nocache_hash'] = '3186059f98fb6982137_60083358';
?>

<form id="prompt_form" method="post" enctype="multipart/form-data" class="layui-form layui-form-pane box_form">
<div class="layui-form-item form-item-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'];?>
" >
<label class="layui-form-label"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['title'];?>
：</label>
<div class="layui-input-inline">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'text') {?>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->Form->text(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input medium-input'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'password') {?>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->Form->password(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input medium-input'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'textarea') {?>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->Form->textarea(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-textarea text-input textarea'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'color') {?>
	<?php $_smarty_tpl->createLocalArrayVariable('local', null, 0);
$_smarty_tpl->tpl_vars['local']->value['val'] = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['value'];?>
    <div class="colorBox">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'color'));?>

        <div class="color color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['local']->value['val']) {?>background-color:<?php echo $_smarty_tpl->tpl_vars['local']->value['val'];?>
;<?php }?>"></div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').ColorPicker({
        onShow : function(colpkr){
            $(colpkr).stop(true,true).fadeIn(500);
            var color  = $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').parent().find('input').val();
            if(color)  $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').ColorPickerSetColor(color);
            return false;
        },
        onHide: function (colpkr) {
    		$(colpkr).stop(true,true).fadeOut(500);
    		return false;
    	},
        onChange : function(hsb, hex, rgb){
            $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').css('background-color', '#' + hex).parent().find('input').val('#' + hex) ;
        }
    });
    <?php echo '</script'; ?>
> 
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'file') {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->text(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input medium-input readonly','readonly'=>true));?>

    <div class="clearfix" style="margin-top: 10px;">
        <a href="javascript:void(0);" class="upload_elem_box">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->file("Setting.upload.value",array('class'=>'form_upload'));?>

            <i class="fa fa-cloud-upload fa-lg"></i>文件上传
        </a><span class="upload_elem_info"></span>
    </div> 
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'checkbox') {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->checkbox(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",smarty_modifier_parse_json($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['options']),array('div'=>false,'lay-skin'=>'primary'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'radio') {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->radio(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",smarty_modifier_parse_json($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['options']),array('class'=>'form_item','label'=>false,'title'=>true,'notext'=>true));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'select') {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->select(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",smarty_modifier_parse_json($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['options']),array('class'=>'form_item','multiple'=>$_smarty_tpl->tpl_vars['col']->value['multiple'],'lay-search'=>'','empty'=>"≡请选择≡"));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'checker') {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->checkbox(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array(),array('class'=>"form_item",'lay-skin'=>'switch'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'array') {?>
<?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'form_item'));?>

<div class="array">
   
</div>
<a class="javascript edit_array layui-btn" rel="edit_array" >编辑</a>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'keyvalue') {?>
<?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'form_item'));?>

<div class="array">
    
</div>
<a class="javascript edit_array  layui-btn  keyvalue" rel="edit_array" >编辑</a>
<?php }?>
</div>

</div>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['info']) {?>
<div class="setting_info" style="color: #666;margin-bottom: 15px;"><em><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['info'];?>
</em></div>
<?php }?>
<div class="layui-form-item form-item-btns">
<div class="layui-input-inline">
  <button class="layui-btn layui-btn-normal" lay-submit >确定</button>
</div>
</div>
</form>
<?php echo '<script'; ?>
>
layui.use(['form','element','layer'], function(){
    var form = layui.form;
});
$('.form_upload').change(function(){
    $(this).closest('div').find('.upload_elem_info').html('新文件：'+$(this).val()).css('display','block') ;
})

if(typeof(TPL) != 'undefined'){

//
	TPL.show_array=function(){/*
<table cellspacing="1" cellpadding="0" border="0" style="width:auto">
	{each $value as $p_val $p_index}
	<tr><td align="right" style=" border:0; padding:3px;">{$p_index}.</td><td style="border:0; padding:3px;">=></td><td style="border:0; padding:3px;{if $p_val===''}background:#039; color:#fff;{else}background:#f3f3f3;{/if}" align="left">{if $p_val===''}空{else}{$p_val}{/if}</td></tr>
	{/each}
</table>
*/}
	TPL.show_keyvalue=function(){/*
<table cellspacing="1" cellpadding="0" border="0" style="width:auto">
	{each $value as $p_val $p_key}
	<tr><td align="right" style="border:0; padding:3px;{if $p_key===''}background:#039; color:#fff;{else}background:#f3f3f3;{/if}">{if $p_key===''}空{else}{$p_key}{/if}</td><td  style="border:0; padding:3px;">=></td><td style="border:0; padding:3px;{if $p_val===''}background:#039; color:#fff;{else}background:#f3f3f3;{/if}" align="left">{if $p_val===''}空{else}{$p_val}{/if}</td></tr>
	{/each}
</table>
*/}
	
	TPL.edit_array=function(){/*
<div class="edit_array">
	<div class="copy_template" style="display:none;">
		<div class="array_item">
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="" class="layui-input text-input form_item" name="array_value[]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a> <a class="javascript" rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		</div>
	</div>
	<div class="array_items">
		{each $value as $p_val}
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="{$p_val}" class="layui-input text-input form_item" name="array_value[]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a> <a class="javascript" rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		{/each}
	</div>
	<a class="javascript add-item" rel="array_item_create" title="添加新项"><i class="fa fa-plus"></i> 添加新项</a>
</div>
*/}
	TPL.edit_keyvalue=function(){/*
<div class="edit_array">
	<div class="copy_template" style="display:none;">
		<div class="array_item">
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="" class="layui-input text-input form_item form_key" name="array_value[key][]"></td>
        <td>
		<input type="text" value="" class="layui-input text-input form_item form_value" name="array_value[value][]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a><a class="javascript  " rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		</div>
	</div>
	<div class="array_items">
		{each $value as $p_val $p_key}
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="{$p_key}" class="layui-input text-input form_item form_key" name="array_value[key][]"></td>
        <td>
		<input type="text" value="{$p_val}" class="layui-input text-input form_item form_value" name="array_value[value][]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a><a class="javascript " rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		{/each}
	</div>
	<a class="javascript add-item" rel="array_item_create" title="添加新项"><i class="fa fa-plus"></i> 添加新项</a>
</div>
*/}

//
	
}

function show_array(){
	var is_keyvalue=$(this).is('.keyvalue'); 
	var value=get_array_value.call(this);
	
	$(this).removeClass('editing').html('编辑').siblings('.array').html((is_keyvalue?TPL.show_keyvalue:TPL.show_array).render({
		$value:value
	}));
}
function edit_array(){
	var $this=$(this);
    
	var is_keyvalue=$this.is('.keyvalue');
	
	if($this.is('.editing')){
		var value=HKUC.parse_serial_array($this.siblings('.array').find('.array_items input[type=text]').serializeArray());
		
		(is_keyvalue?set_keyvalue_value:set_array_value).call(this,value.array_value);
		show_array.call(this);
	}
	else{
		var value=get_array_value.call(this);
		
		$this.addClass('editing').html('保存').siblings('.array').html((is_keyvalue?TPL.edit_keyvalue:TPL.edit_array).render({
			$value:value
		}));
	}
}
function get_array_value(){
	var raw_value=$(this).siblings('.form_item').val();
	
	if(HKUC.isJsonValidate(raw_value)){
		return eval('('+raw_value+')');
	}
	else{
		return [];
	}
}
function set_array_value(value){
	$(this).siblings('.form_item').val(JSON.stringify(value));
}
function set_keyvalue_value(value){
	var ret={};
	if(value && value.key)
	for(key in value.key){
		ret[value.key[key]]=value.value[key];
	}
	
	$(this).siblings('.form_item').val(JSON.stringify(ret));
}
function array_item_create($obj){
	var $this=$(this);
	var new_item_str=$this.closest('.array').find('.copy_template').html();

	if($obj){
		$(new_item_str).find(':disabled').attr('disabled',false).end().insertBefore($obj);
	}
	else{
		$(new_item_str).find(':disabled').attr('disabled',false).end().appendTo($this.siblings('.array_items'));
	}
}
function array_item_insert(){
	array_item_create.call(this,$(this).closest('.array_item'));
}
function array_item_remove(){
	var $this=$(this);
	var $item=$this.closest('.array_item');

	$item.remove();
}
$('.edit_array').each(function(){
	show_array.call(this)
});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['defer_js']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3186059f98fb6982137_60083358';
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
/*%%SmartyHeaderCode:3259559f98fb69c8647_08366098%%*/
if ($_valid && !is_callable('content_59f98fb69c8643_74364844')) {
function content_59f98fb69c8643_74364844 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3259559f98fb69c8647_08366098';
?>

<?php
/*/%%SmartyNocache:3259559f98fb69c8647_08366098%%*/
}
}
?><?php
/* smarty_template_function_url_3259559f98fb69c8647_08366098 */
if (!function_exists('smarty_template_function_url_3259559f98fb69c8647_08366098')) {
function smarty_template_function_url_3259559f98fb69c8647_08366098($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_3259559f98fb69c8647_08366098 */

?>
<?php
/* smarty_template_function_furl_3259559f98fb69c8647_08366098 */
if (!function_exists('smarty_template_function_furl_3259559f98fb69c8647_08366098')) {
function smarty_template_function_furl_3259559f98fb69c8647_08366098($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_3259559f98fb69c8647_08366098 */

?>
