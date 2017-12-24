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
  'unifunc' => 'content_59f97c4e962399_07552586',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f97c4e962399_07552586')) {
function content_59f97c4e962399_07552586 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title> - 后台管理系统</title>

<link rel="stylesheet" type="text/css" href="http://127.0.0.1/eduaskcms/public/files/artDialog/css/simple.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/eduaskcms/public/files/layui-2.1.6/css/layui.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/eduaskcms/public/css/admin/global.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/eduaskcms/public/css/admin/animate.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/eduaskcms/public/files/awesome-4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/eduaskcms/public/css/admin/index.css" />

<script type="text/javascript">var wwwroot='/eduaskcms/public/';var absroot='http://127.0.0.1/eduaskcms/public/';</script>

<script type="text/javascript" src="http://127.0.0.1/eduaskcms/public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/eduaskcms/public/files/layui-2.1.6/layui.js"></script>
<script type="text/javascript" src="http://127.0.0.1/eduaskcms/public/js/admin/global.js"></script>
<script type="text/javascript" src="http://127.0.0.1/eduaskcms/public/js/admin/jquery.nicescroll.min.js"></script>




<script type="text/javascript">
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

</script>


</head>

<body>

<script type="text/javascript">
var winWidth = $(window).width();
var heiHeght = $(window).height();
</script>
<div id="gloBox" class="default">
    <div id="gloTop" class="clearfix">
        <div class="gtLeft clearfix">
            <div class="logo "><img src="http://127.0.0.1/eduaskcms/public/images/admin/logo.png" alt="EduaskCMS"/></div>
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
                <li class="layui-nav-item circle gohome first"><a class="tooltip" data-tip-text="访问前台" data-tip-type="3" href="/eduaskcms/public/Home/index/index.html" target="_blank"><i class="fa fa-home"></i></a></li>
                <li class="layui-nav-item circle"><a class="tooltip javascript" rel="full_screen" data-tip-text="F11全屏" data-tip-type="3" href="javascript:void(0);"><i class="fa fa-arrows "></i></a></li>
                <li class="layui-nav-item circle"><a class="tooltip javascript" rel="simple_clear" data-tip-text="清除缓存" data-tip-type="3" href="/eduaskcms/public/run/tool/clearcache.html"><i class="fa fa-remove" style="margin: -7px 0 0 -5px;"></i></a></li>
                <li class="layui-nav-item circle"><a target="_blank" class="tooltip" data-tip-text="培训手册" data-tip-type="3" href="https://www.kancloud.cn/laowu199/e_manual"><i class="fa fa-book" style="margin: -7px 0 0 -7px;"></i></a></li>
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
                        <span class="admin-user-headpic"><img  src="/eduaskcms/public/images/admin/default_headimg.png" alt=""/></span><span class="admin-user-name en-font">eduask</span>
                     </a>
                    <dl class="layui-nav-child">
                        <i class="i"></i>
                        <dd><a href="/eduaskcms/public/run/user/modify/id/1.html" class="new_tab" data-icon="fa-user"><i class="fa fa-pencil" aria-hidden="true"></i>修改密码</a></dd>
                        <dd><a href="" class="javascript" rel="lockScreen"><i class="fa fa-lock" aria-hidden="true" style="padding-right: 2px;padding-left: 2px;"></i>锁屏(Alt+L)</a></dd>
                        <dd class="bt"><a href="/eduaskcms/public/run/user/logout.html"><i class="fa fa-sign-out" aria-hidden="true"></i>注销登录</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
        
    </div>
    <div id="gloLeft" class="sizing">
        <div class="leftbg"></div>
        <div id="leftBar">
            <ul class="list" id="gloMenu">
                				                                                                                <li class="current">
                    <div class="navT">                    
                        <a href="/eduaskcms/public/run/index/index.html"><i data-icon="" class="fa    animated" ></i><cite></cite></a>
                    </div>
                                    </li>
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
                                        <a href="/eduaskcms/public/run/member/modify/parent_id/1.html" data-icon="fa-user" data-title="修改信息" class="new_tab"><img  src="/eduaskcms/public/images/admin/default_headimg.png" alt=""/></a>
                                    </div>
                                    <div class="welcome en-font">
                                        您好！<span>eduask</span>                                        
                                        <a href="/eduaskcms/public/run/user/logout.html" ><i style="color: red;" class="fa fa-sign-out" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="time bline en-font">
                                        <b></b>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i><span class="showtime">2017-11-01 15:48:30</span>
                                    </div>
                                    <div class="info bline en-font">
                                        真实姓名：<span class="c">未设置</span>
                                    </div>
                                    <div class="info bline en-font">
                                        登录时间：<span class="c">0000-00-00 00:00:00</span>
                                    </div>
                                    <div class="info bline en-font">
                                        登录地址：<span class="c"></span>
                                    </div>
                                    
                                    <div class="notice">                                        
                                        <div class="con">
                                            <div class="layui-btn-group skin">
                                                <a href="/eduaskcms/public/run/feedback/lists.html" class="layui-btn new_tab" data-title="留言列表" data-icon="fa-pencil-square-o">留言<span class="layui-badge layui-bg-gray">0</span></a>
                                                <a class="layui-btn" onclick="layer.msg('敬请期待')">订单<span class="layui-badge layui-bg-gray">0</span></a>
                                                <a class="layui-btn" onclick="layer.msg('敬请期待')">消息<span class="layui-badge layui-bg-gray">0</span></a>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    <div class="quick">                                        
                                        <div class="con">
                                            <div class="layui-btn-group">
                                                <a href="/eduaskcms/public/run/tool/getlog.html" class="layui-btn layui-btn-primary">下载日志</a>
                                                <a href="/eduaskcms/public/run/tool/removelog.html" class="layui-btn layui-btn-primary javascript" rel="simple_clear">清除日志</a>
                                                <a href="/eduaskcms/public/run/tool/switchtrace.html" class="layui-btn layui-btn-primary javascript" rel="switch_trace">启用Trace</a>
                                            </div>
                                            <div class="layui-btn-group">
                                                <a href="/eduaskcms/public/run/tool/clearcache.html" class="layui-btn layui-btn-primary javascript" rel="simple_clear">清除缓存</a>
                                                <a href="/eduaskcms/public/run/tool/removetemp.html" class="layui-btn layui-btn-primary javascript" rel="simple_clear" >清临时文件</a>
                                                <a href="https://www.kancloud.cn/laowu199/e_manual" target="_blank" class="layui-btn layui-btn-primary">培训手册</a>
                                            </div>
                                        </div>
                                    </div>  
                                                                      
                                </div>
                            
                            
                                <div class="homeLeft">
                                    <div class="cms_count">
                                        <ul class="grid">
                                            <li class="li-1">                                                
                                                <div class="info">
                                                    <a href="/eduaskcms/public/run/article/lists.html" class="new_tab" data-title="文章列表" data-icon="fa-file-text">
                                                    <i class="icon"><img  src="/eduaskcms/public/images/admin/article.png" alt=""/></i>
                                                    <span class="number en-font">0</span>
                                                    <span class="name">文章</span>
                                                    </a>
                                                </div>
                                                
                                            </li>
                                            <li class="li-2">
                                                <div class="info">
                                                    <a href="/eduaskcms/public/run/product/lists.html" class="new_tab" data-title="产品列表" data-icon="fa-camera">
                                                    <i class="icon"><img  src="/eduaskcms/public/images/admin/product.png" alt=""/></i>
                                                    <span class="number en-font">0</span>
                                                    <span class="name">产品</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="li-3">
                                                <div class="info">
                                                    <a href="/eduaskcms/public/run/album/lists.html" class="new_tab" data-title="图集列表" data-icon="fa-image">
                                                    <i class="icon"><img  src="/eduaskcms/public/images/admin/album.png" alt=""/></i>
                                                    <span class="number en-font">0</span>
                                                    <span class="name">图集</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="li-4">
                                                <div class="info">
                                                    <a href="/eduaskcms/public/run/user/lists.html" class="new_tab" data-title="会员列表" data-icon="fa-users">
                                                    <i class="icon"><img  src="/eduaskcms/public/images/admin/user.png" alt=""/></i>
                                                    <span class="number en-font">1</span>
                                                    <span class="name">会员</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="cms_info clearfix">
                                        <div class="you">
                                            <div class="info">
                                                <div class="title en-font">使用者：<a href="/eduaskcms/public/run/setting/lists.html"  class="new_tab" data-title="设置列表" data-icon=" fa-gears"><i class="fa fa-pencil-square-o"></i></a></div>
                                                <div class="con">
                                                    <ul class="list">
                                                        <li><i class="fa fa-thumbs-up"></i>名称：<span></span></li>
                                                        <li><i class="fa fa-wifi"></i>网址：<span class="en-font"><a href="http://127.0.0.1/eduaskcms/public/" target="_blank">http://127.0.0.1/eduaskcms/public/</a></span></li>
                                                        <li><i class="fa fa-phone"></i>电话：<span class="en-font"></span></li>
                                                        <li><i class="fa fa-envelope"></i>邮箱：<span class="en-font"></span></li>
                                                        <li><i class="fa fa-map-marker"></i> 地址：<span></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dev">
                                            <div class="info">
                                                <div class="title en-font">开发者：</div>
                                                <div class="con">
                                                    <ul class="list">                                                        
                                                        <li><i class="fa fa-thumbs-up"></i>名称：<span>开发企业名称</span></li>
                                                        <li><i class="fa fa-wifi"></i>网址：<span class="en-font"><a href="开发企业网址" target="_blank">开发企业网址</a></span></li>
                                                        <li><i class="fa fa-phone"></i>电话：<span class="en-font">开发企业电话</span></li>
                                                        <li><i class="fa fa-envelope"></i>邮箱：<span class="en-font">开发企业邮箱</span></li>
                                                        <li><i class="fa fa-map-marker"></i> 地址：<span>开发企业地址</span></li>
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
                                                            <td>1GB</td>
                                                            <td  class="skin">
                                                                <a href="/eduaskcms/public/run/tool/getsitesize.html" class="javascript link" rel="get_site_size">『计算』 <span id="showSiteSize" class="layui-badge layui-bg-orange">0KB</span></a>
                                                             </td>
                                                            <td>不关心</td>
                                                            <td>不关心</td>
                                                        </tr>
                                                        <tr>
                                                            <th>操作系统</th>
                                                            <th>服务器环境</th>
                                                            <th>服务器IP</th>
                                                            <th>上传最大限制</th>                                                         
                                                        </tr>
                                                        <tr>
                                                            <td>WINNT</td>
                                                            <td>Apache</td>
                                                            <td>127.0.0.1</td>
                                                            <td>20M</td>
                                                        </tr>
                                                        <tr>
                                                            <th>PHP版本</th>
                                                            <th>MYSQL版本</th>
                                                            <th>脚本超时时间</th>
                                                            <th>CURL支持</th>                                                         
                                                        </tr>
                                                        <tr>
                                                            <td>5.6.27</td>
                                                            <td>5.5.53</td>
                                                            <td>30S</td>
                                                            <td>YES</td>
                                                        </tr>
                                                        <tr>
                                                            <th>系统官网</th>
                                                            <th>建站手册</th>  
                                                            <th>检查更新</th> 
                                                            <th>系统版本</th>                                                        
                                                        </tr>
                                                        <tr>
                                                            <td class="skin"><a href="http://www.eduaskcms.xin" class="link" target="_blank">『访问』</a></td>
                                                            <td class="skin"><a href="https://www.kancloud.cn/laowu199/e_use"  class="link" target="_blank">『查阅』</a></td>
                                                            <td class="skin"><a href="https://gitee.com/eduaskcms/eduaskcms" class="link" target="_blank">『求点赞』</a></td>
                                                            <td>EduaskCMS V1.0.4</td>
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
<div id="lockScreen" >
    <div class="init">
        <div class="relative">
            <div class="lockTime en-font"></div>
            <div class="pic"><img  src="/eduaskcms/public/images/admin/default_headimg.png" alt=""/><p class="en-font">eduask</p></div>
        </div>
        <div class="wrbox">
            <input  type="password" id="screenPwd" class="wrin" value="" autocomplete="off" placeholder="请输入密码解锁.."/><br /><button id="closeLock" class="layui-btn">立即解锁</button>
        </div>
    </div>
</div>

<script type="text/javascript">
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
    var url = "/eduaskcms/public/run/tool/set_skin.html";
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
    var url = "/eduaskcms/public/run/tool/lock_screen.html";
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
    var url = "/eduaskcms/public/run/tool/relieve_screen.html";
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

</script>


<script>
</script>


</body>
</html><?php }
}
?><?php /* smarty_template_function_url_3211359f97c4e860658_69497627 */
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
/*/ smarty_template_function_url_3211359f97c4e860658_69497627 */?>
<?php /* smarty_template_function_furl_3211359f97c4e860658_69497627 */
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
/*/ smarty_template_function_furl_3211359f97c4e860658_69497627 */?>
