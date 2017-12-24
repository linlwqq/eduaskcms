-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?11 �?01 �?17:14
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `eduask`
--

-- --------------------------------------------------------

--
-- 表的结构 `eduask_ad`
--

DROP TABLE IF EXISTS `eduask_ad`;
CREATE TABLE IF NOT EXISTS `eduask_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_position_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `mobile_image` varchar(128) NOT NULL,
  `mobile_thumb` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `is_verify` (`is_verify`),
  KEY `ad_position_id` (`ad_position_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `eduask_ad`
--

INSERT INTO `eduask_ad` (`id`, `ad_position_id`, `title`, `ex_title`, `image`, `thumb`, `mobile_image`, `mobile_thumb`, `link`, `content`, `is_verify`, `created`, `modified`, `list_order`) VALUES
(1, 1, '', '', 'upload/Ad/201711/143981058859f98b9286272.jpg', 'upload/thumbs/201711/143981058859f98b9286272_1920_600_3.jpg', '', '', '', '', 1, '2017-11-01 16:53:38', '2017-11-01 16:53:38', 0),
(2, 2, '', '', 'upload/Ad/201711/195580731259f98b9b3b52b.jpg', 'upload/thumbs/201711/195580731259f98b9b3b52b_1920_400_3.jpg', '', '', '', '', 1, '2017-11-01 16:53:47', '2017-11-01 16:53:47', 0);

-- --------------------------------------------------------

--
-- 表的结构 `eduask_admin_menu`
--

DROP TABLE IF EXISTS `eduask_admin_menu`;
CREATE TABLE IF NOT EXISTS `eduask_admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(32) NOT NULL,
  `is_nav` tinyint(1) unsigned NOT NULL,
  `is_debug` tinyint(1) unsigned NOT NULL,
  `list_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `eduask_admin_menu`
--

INSERT INTO `eduask_admin_menu` (`id`, `parent_id`, `title`, `url`, `icon`, `is_nav`, `is_debug`, `list_order`) VALUES
(1, 0, '后台导航', '', '', 0, 0, 0),
(2, 1, 'CMS', '', '', 1, 0, 0),
(3, 1, '微信', '', '', 1, 0, 0),
(4, 1, '商城', '', '', 0, 0, 0),
(5, 2, '栏目管理', '', 'fa-qrcode', 1, 0, 0),
(6, 5, '栏目结构', '/run/menu/lists', '', 1, 0, 0),
(7, 5, '后台栏目', '/run/admin_menu/lists', '', 1, 1, 0),
(8, 2, '内容管理', '', 'fa-file-text', 1, 0, 1),
(9, 8, '内容结构', '/run/menu/content', '', 1, 0, 0),
(10, 8, '回收站', 'run/dustbin/lists', '', 1, 0, 0),
(11, 2, '用户管理', '', 'fa-user', 1, 0, 2),
(12, 11, '用户列表', '/run/user/lists', '', 1, 0, 0),
(13, 11, '添加用户', '/run/user/create', '', 1, 0, 0),
(14, 11, '用户组列表', '/run/user_group/lists', '', 1, 0, 0),
(15, 2, '广告管理', '', 'fa-file-image-o', 1, 0, 4),
(16, 15, '广告位列表', '/run/ad_position/lists', '', 1, 0, 0),
(17, 15, '添加广告位', '/run/ad_position/create', '', 1, 0, 0),
(18, 2, '字典管理', '', 'fa-th-large', 1, 0, 5),
(19, 18, '字典列表', '/run/dictionary/lists', '', 1, 0, 0),
(20, 18, '添加字典', '/run/dictionary/create', '', 1, 0, 0),
(21, 2, '系统设置', '', 'fa-gears', 1, 0, 6),
(22, 21, '设置列表', '/run/setting/lists', '', 1, 0, 0),
(23, 21, '设置组列表', '/run/setting_group/lists', '', 1, 0, 0),
(24, 2, '开发工具', '', 'fa-search-plus', 1, 1, 7),
(25, 24, '模型管理', '/run/model/lists', 'fa-file-text', 1, 1, 0),
(26, 24, '提取数据', '/run/query_data/lists', 'fa-line-chart', 1, 1, 0),
(27, 24, '模型生成', '/run/tool/addm', 'fa-book', 1, 1, 0),
(28, 24, '模板创建', '/run/tool/addv', 'fa-camera', 1, 1, 0),
(29, 24, '控制器生成', '/run/tool/addc', 'fa-paper-plane', 1, 1, 0),
(30, 2, '权限管理', '', 'fa-key', 1, 0, 3),
(31, 30, '用户授权', '/run/power/content', '', 1, 0, 0),
(32, 30, '权限节点', '/run/power_tree/lists', 'fa-tree', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `eduask_ad_position`
--

DROP TABLE IF EXISTS `eduask_ad_position`;
CREATE TABLE IF NOT EXISTS `eduask_ad_position` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `vari` varchar(64) NOT NULL,
  `width` smallint(6) NOT NULL,
  `height` smallint(6) NOT NULL,
  `mobile_width` smallint(6) NOT NULL,
  `mobile_height` smallint(6) NOT NULL,
  `limit` tinyint(3) unsigned NOT NULL,
  `is_thumb` tinyint(1) unsigned NOT NULL,
  `is_text` tinyint(1) unsigned NOT NULL,
  `ad_count` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `eduask_ad_position`
--

INSERT INTO `eduask_ad_position` (`id`, `title`, `ex_title`, `vari`, `width`, `height`, `mobile_width`, `mobile_height`, `limit`, `is_thumb`, `is_text`, `ad_count`, `created`, `modified`) VALUES
(1, '首页Banner广告位', '', 'index_banner', 1920, 600, 600, 450, 0, 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(2, '内页Banner广告位', '', 'insider_banner', 1920, 400, 600, 450, 0, 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_album`
--

DROP TABLE IF EXISTS `eduask_album`;
CREATE TABLE IF NOT EXISTS `eduask_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `view_style` char(32) NOT NULL,
  `is_title` tinyint(1) unsigned NOT NULL,
  `is_content` tinyint(1) unsigned NOT NULL,
  `content` mediumtext NOT NULL,
  `visit_count` int(10) unsigned NOT NULL,
  `summary` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  `picture_count` smallint(5) unsigned NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `eduask_album`
--

INSERT INTO `eduask_album` (`id`, `menu_id`, `user_id`, `title`, `ex_title`, `date`, `is_verify`, `image`, `thumb`, `view_style`, `is_title`, `is_content`, `content`, `visit_count`, `summary`, `link`, `is_index`, `is_recommend`, `created`, `modified`, `list_order`, `picture_count`, `keywords`, `description`) VALUES
(1, 4, 1, 'aa', '', '2017-11-01', 1, '', '', '', 0, 0, '', 8, '', '', 0, 0, '2017-11-01 16:47:25', '2017-11-01 16:47:25', 0, 6, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_article`
--

DROP TABLE IF EXISTS `eduask_article`;
CREATE TABLE IF NOT EXISTS `eduask_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(64) NOT NULL,
  `from` varchar(64) NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `visit_count` int(10) unsigned NOT NULL,
  `summary` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  `picture_count` smallint(5) unsigned NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `eduask_article`
--

INSERT INTO `eduask_article` (`id`, `menu_id`, `user_id`, `title`, `ex_title`, `date`, `author`, `from`, `is_verify`, `image`, `thumb`, `content`, `visit_count`, `summary`, `link`, `is_index`, `is_recommend`, `created`, `modified`, `list_order`, `picture_count`, `keywords`, `description`) VALUES
(1, 6, 1, '列表一标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/168637376859f9881a77cc8.jpg', 'upload/thumbs/201711/168637376859f9881a77cc8_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:13:32', '2017-11-01 16:38:50', 0, 0, '', ''),
(2, 6, 1, '列表一标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/42270307659f98808c0cb4.jpg', 'upload/thumbs/201711/42270307659f98808c0cb4_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:13:33', '2017-11-01 16:38:32', 0, 0, '', ''),
(3, 6, 1, '列表一标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/206457139059f98801b2c78.jpg', 'upload/thumbs/201711/206457139059f98801b2c78_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:13:34', '2017-11-01 16:38:25', 0, 0, '', ''),
(4, 6, 1, '列表一标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/8290905959f987f927416.jpg', 'upload/thumbs/201711/8290905959f987f927416_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:13:34', '2017-11-01 16:38:17', 0, 0, '', ''),
(5, 6, 1, '列表一标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/6130783259f987f2d82b7.jpg', 'upload/thumbs/201711/6130783259f987f2d82b7_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n', 1, '', '', 0, 0, '2017-11-01 16:13:35', '2017-11-01 16:38:10', 0, 0, '', ''),
(6, 6, 1, '列表一标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/120855312959f987ec0a437.jpg', 'upload/thumbs/201711/120855312959f987ec0a437_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n', 3, '', '', 0, 0, '2017-11-01 16:13:35', '2017-11-01 16:38:04', 0, 0, '', ''),
(7, 7, 1, '列表二标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/102987385359f9879dbba32.jpg', 'upload/thumbs/201711/102987385359f9879dbba32_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:35:20', '2017-11-01 16:36:45', 0, 0, '', ''),
(8, 7, 1, '列表二标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/143219391859f987a632cad.jpg', 'upload/thumbs/201711/143219391859f987a632cad_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:35:21', '2017-11-01 16:36:54', 0, 0, '', ''),
(9, 7, 1, '列表二标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/68207112659f987af43854.jpg', 'upload/thumbs/201711/68207112659f987af43854_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:35:22', '2017-11-01 16:37:03', 0, 0, '', ''),
(10, 7, 1, '列表二标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/187598847259f987cedc0fd.jpg', 'upload/thumbs/201711/187598847259f987cedc0fd_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:35:22', '2017-11-01 16:37:34', 0, 0, '', ''),
(11, 7, 1, '列表二标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/112762992759f987d68d114.jpg', 'upload/thumbs/201711/112762992759f987d68d114_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:35:23', '2017-11-01 16:37:42', 0, 0, '', ''),
(12, 7, 1, '列表二标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/109491227159f987dee7842.jpg', 'upload/thumbs/201711/109491227159f987dee7842_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:35:23', '2017-11-01 16:37:51', 0, 0, '', ''),
(15, 8, 1, '列表三标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/19829953859f9883fe6eae.jpg', 'upload/thumbs/201711/19829953859f9883fe6eae_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:39:14', '2017-11-01 16:39:27', 0, 0, '', ''),
(16, 8, 1, '列表三标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/207463530659f98845e0e5c.jpg', 'upload/thumbs/201711/207463530659f98845e0e5c_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:39:15', '2017-11-01 16:39:33', 0, 0, '', ''),
(17, 8, 1, '列表三标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/12996606859f9884b93189.jpg', 'upload/thumbs/201711/12996606859f9884b93189_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:39:16', '2017-11-01 16:39:39', 0, 0, '', ''),
(18, 8, 1, '列表三标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/7847445959f988512493e.jpg', 'upload/thumbs/201711/7847445959f988512493e_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:39:17', '2017-11-01 16:39:45', 0, 0, '', ''),
(19, 8, 1, '列表三标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/193779176059f98856e9312.jpg', 'upload/thumbs/201711/193779176059f98856e9312_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:39:17', '2017-11-01 16:39:51', 0, 0, '', ''),
(20, 8, 1, '列表三标题', '', '2017-11-01', '', '', 1, 'upload/Article/201711/70233157659f988601661d.jpg', 'upload/thumbs/201711/70233157659f988601661d_400_300_3.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:39:18', '2017-11-01 16:40:00', 0, 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_dictionary`
--

DROP TABLE IF EXISTS `eduask_dictionary`;
CREATE TABLE IF NOT EXISTS `eduask_dictionary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(32) NOT NULL,
  `field` varchar(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `dictionary_item_count` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eduask_dictionary_item`
--

DROP TABLE IF EXISTS `eduask_dictionary_item`;
CREATE TABLE IF NOT EXISTS `eduask_dictionary_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dictionary_id` int(10) unsigned NOT NULL,
  `key` varchar(128) NOT NULL,
  `value` varchar(128) NOT NULL,
  `list_order` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dictionary_id` (`dictionary_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eduask_download`
--

DROP TABLE IF EXISTS `eduask_download`;
CREATE TABLE IF NOT EXISTS `eduask_download` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `file_name` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `visit_count` int(10) unsigned NOT NULL,
  `summary` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eduask_dustbin`
--

DROP TABLE IF EXISTS `eduask_dustbin`;
CREATE TABLE IF NOT EXISTS `eduask_dustbin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(64) NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `data` mediumblob NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `eduask_dustbin`
--

INSERT INTO `eduask_dustbin` (`id`, `model`, `model_id`, `title`, `data`, `status`, `created`, `modified`) VALUES
(1, 'Article', 13, '列表二标题', 0x789cb5555d53db46147dcf4cfe83470f7983221b4222282f9dcef4a5339969df19d71241836d51494e433b9db1011b9bf82b2d1f01bbd84e02315064533e6c4b36fe31d95d494ffe0bb9ab25aec9a4d397f6058ba3b37bcf3df7ec2a28f803c22f9ae0173859e46664810fcc68c2b4c045a4686c9e41d30c8969927a8bf0804c099c2eeb618983671efec1e95da7564766965437dcd7af28fc48e0a4e7f343d684c0d19f498113833a5b07907f829f1ee3f9b1099e220f052e18d31715f5ee820555898c208f41ad36ff4c52e58595113d7224f874b41295b8188bfc3002411f2125aa4b51ddab1f988482b3cb73b3da7230ead3f495b0f425b70084314dfe5912f8715e8acc70775f87e5a834b628c94f1775c1e71f9f84f75f8bb1a0b6f4d5b7dff9c8ab06ae98c8cc7fbf2847979e7cf3646a7c629ce7492d450eae71378e0b2fedfd75d48ea3f6094ee69ccb0e80c42c028853496c746ca3661753f685655b9541373b5c0220ee5fa1760e2733e4a2ee6ee470318f0b4dca2982e7ad51106f569cb51eac2299637cbe3de89648e9126f561987e22033930326addb3f75e31528e4834af8b72cbae9935ceb7d7c9589c0ed2c2997b07160e729db2e19306058ff202cfe1853661ce318f5aab427eb8d5d4d801c5ab99cc0e93df8fb40f548b0199070a181ac43d4ebdb5bf5a16376e992e40f9d7ec9a96581e36c9ce0d639556599f6e9defb78029f1da14e953e784d3143a0cc9d998494b0a20a3e5512611aa897a23e79d570b97edb46c5b46be0fa263841769ab4d5f61a3e2bda99342380c6d92fe89e739ffe2ccfddbf77ffdea729198d014bc13f84c8f73145ac01b2d371ff780d0db010a06e02b5f7a1556ad0461575f2a01d0cc2a93d6459a8b70d1962d682403ae9dd6bdcfacbb60ad8c89274119929bb7286fa3530c85d356ce31c1e90693aeb6da791c2e9536a5ce9c6ce6c0087241a4ebe850b3b949cb974ad75fb2c03eee3c29b4137cd435203cc97413743ab1dad9283328d0a131e7fe7d63a307f2f725ecc0a276e39ee1c25dc64ceee19f8b047ea357cf0029fed12e3ea6f1a1b5cf3fc5678b2eeaed5997ce0801f903808210b1d2c21e50a6ea6d8a0696edfeed3f48125de3e9f99d37f3520a67e3820dce820f305b2aec12eb2dd2439c33dc93a8d04b53479e124b6181f3c74c19d72c6b959c36fdfd1d3e51d36768ee8c9e81b64ab4327ee459fa6b298a7e36e9edb954337f13b0cf17fec8a8df1f614404bbd2a682599386e1b78f3981ed8468be48ace5595a45f22eb4f8a18c7ec9932a199ae8937c1fe926fd04d7c4ea67797f202f74cd6647d3ea4c4e8f52a0b13ecc2d5629148505db97ba3431f4b23c823ef4697a3a2f4fce34adeef61aa145222f0351247760ca9127c4144afece3d14f888f7f2804a604ffe4ed9e11459417e47f65d2ef5058d6f4794515257528202070cb72488fa9d2dd9e60e32569e527206b232d500344490ba9f2b22e2bd1e19b5f3f00e777b5eb, 0, '2017-11-01 16:35:45', '2017-11-01 16:35:45'),
(2, 'Article', 14, '列表二标题', 0x789cb5555d53db46147dcf4cfe83470f79832203211194974e67fad299ccb4ef8c6b8958836d51494e433b9db1011b9bf82b2d1f01bbd84e02315064533e6c4b36fe31d95d494ffc85dcd53aaec9a4d397f6058ba3b37bcf3df7ec2a20f827855f34c12f70b2c8cdca023f35ab0933021791a2b10506cd3024a649ea00e1019916385dd6c31207cf3cfc83d3bb4ead8ecc2ca96eb8af5f51f891c049cf1786ac0981a33f5302270674b60e20ff043f33c6f363133c451e0a5c20a68714f5ee824555898c208f41adb6f04c52e5c595113d7224f074b41295188a457e1881a08fa012d5a5a8eed59f9c828273cbf373da7220ead3f495b0f425b70884314dfe5912f8715e8acc72775f87e5a8341692e4a7215df0f9c7a7e0fdd7622ca02d7df5ed773ef2aa812b2632f3df87e4e8d2936f9e4c8f4f8cf33ca9a5c8c135eec671e1a5bdbf8eda71d43ec1c99c73d90190984500712a898d8e6dd4ec62cabeb06cab72dbcd0e970088fb57a89dc3c90cb9a8bb1b395ccce34293728ae0796b14c49b1567ad07ab48e6189f6fdf764ba4748937ab8c43719099c90193d6ed9fbaf10a14f24125fc5b16ddf449aef53ebeca44e07696944bd838b0f3946d970c1830ac7f10167f8c29b38e718c7a55da93f5c6ae26400ead5c4ee0f41efc7da07a24d80c48b8d040d621eaf5edadfad031bb7449f2874ebfe4d4b2c071364e70eb9caab24cfb74ef7d3c81cf8e50a74a1fbca6982150e6ce4c824a5851059f2a89300dd44b519fbc6ab85c1fb45131ed1ab8be094e909d266db5bd86cf8a7626cd08a071ee0bbae7fca73fcbf3f7efddbff7694a4663c052f00f21f27d4c116b80ec74dc3f5e43032c04a89b40ed7d68951ab451459d3c680783706a0f5916ea6d438698b520904e7af71ab7feb2ad0236b2245d4466caae9ca17e0d0c72570ddb388707649ace7adb69a470fa941a57bab1331bc0218986936fe1c20e25672e5d6bdd3ecb80fbb8f0e6b69be621a993cc97db6e86563b5a2507651a15263cfecead7560fe5ee4bc98154edc72dc394ab8c99cdd33f0618fd46bf8e0053edb25c6d5df3436b8e6f94078b2eeaed5997ce0801f903808210b1d2c21e50a6ea6d8a0696edfeed3f48125de3e9f99d37f3520a67e3820dce820f305b2aec12eb2dd2439c33dc93a8d04b53479e124b6181f3c74c19d72c6b959c36fdfd1d3e51d36768ee8c9e81b64ab4327ee459fa6b298a7e36e9edb954337f13b0cf17fec8a8d71700aa0a55e15b4924c1cb70dbc794c0f6ca3457245e7aa4ad22f91f527458c63f64c99d04cd7c49b607fc977db4d7c4ea67797f202f74cd6647d21a8c4e8f52a0b13ecc2d5629148405db97ba3431f4b23c823ef4697a3a2f4fce34adeef61aa145422f0351247760caa127c4144afece3d14f888f7f284c4e0bfea9c19e11459417e57f65d2ef5058d6f40545152575286052e096e5a01e53a5bb3dc1c64bd2ca4f40d6465aa00688921654e5655d56a2c337bf7e00eec9b5ec, 0, '2017-11-01 16:35:45', '2017-11-01 16:35:45');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_feedback`
--

DROP TABLE IF EXISTS `eduask_feedback`;
CREATE TABLE IF NOT EXISTS `eduask_feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `truename` char(32) NOT NULL,
  `mobile` char(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `qq` char(16) NOT NULL,
  `wechat` char(16) NOT NULL,
  `address` varchar(128) NOT NULL,
  `ip` char(32) NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `is_finish` tinyint(1) unsigned NOT NULL,
  `content` mediumtext NOT NULL,
  `reply_user_id` int(10) unsigned NOT NULL,
  `reply_content` text NOT NULL,
  `visit_count` int(10) unsigned NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eduask_link`
--

DROP TABLE IF EXISTS `eduask_link`;
CREATE TABLE IF NOT EXISTS `eduask_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `summary` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `eduask_link`
--

INSERT INTO `eduask_link` (`id`, `menu_id`, `user_id`, `title`, `is_verify`, `image`, `thumb`, `content`, `summary`, `link`, `is_index`, `is_recommend`, `created`, `modified`, `list_order`) VALUES
(1, 10, 1, '下载', 1, '', '', '', '', 'https://www.eduaskcms.xin/download/show/5.html', 0, 0, '2017-11-01 17:04:46', '2017-11-01 17:04:46', 0),
(2, 10, 1, '培训手册', 1, '', '', '', '', 'https://www.kancloud.cn/laowu199/e_manual/', 0, 0, '2017-11-01 17:05:02', '2017-11-01 17:05:32', 0),
(3, 10, 1, '建站手册', 1, '', '', '', '', 'https://www.kancloud.cn/laowu199/e_use/', 0, 0, '2017-11-01 17:05:04', '2017-11-01 17:05:57', 0),
(4, 10, 1, '开发手册', 1, '', '', '', '', 'https://www.kancloud.cn/laowu199/e_dev', 0, 0, '2017-11-01 17:05:04', '2017-11-01 17:06:16', 0),
(5, 10, 1, '码云点赞', 1, '', '', '', '', 'https://gitee.com/eduaskcms/eduaskcms', 0, 0, '2017-11-01 17:05:05', '2017-11-01 17:06:43', 0);

-- --------------------------------------------------------

--
-- 表的结构 `eduask_member`
--

DROP TABLE IF EXISTS `eduask_member`;
CREATE TABLE IF NOT EXISTS `eduask_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `nickname` varchar(64) NOT NULL,
  `truename` varchar(64) NOT NULL,
  `headimg` varchar(128) NOT NULL,
  `sex` char(4) NOT NULL,
  `mobile` char(16) NOT NULL,
  `address` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `eduask_member`
--

INSERT INTO `eduask_member` (`id`, `user_id`, `nickname`, `truename`, `headimg`, `sex`, `mobile`, `address`) VALUES
(1, 1, '', '', '', '', '', ''),
(2, 2, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_menu`
--

DROP TABLE IF EXISTS `eduask_menu`;
CREATE TABLE IF NOT EXISTS `eduask_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `family` varchar(256) NOT NULL,
  `level` smallint(6) NOT NULL,
  `child_count` smallint(6) NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `alias` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `ex_link` varchar(128) NOT NULL,
  `is_nav` tinyint(1) unsigned NOT NULL,
  `list_count` smallint(5) unsigned NOT NULL,
  `is_redirect` tinyint(1) unsigned NOT NULL,
  `is_map` tinyint(1) unsigned NOT NULL,
  `list_order` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb_width` smallint(6) NOT NULL,
  `thumb_height` smallint(6) NOT NULL,
  `thumb_method` tinyint(4) NOT NULL,
  `template` text NOT NULL,
  `list_style` varchar(64) NOT NULL,
  `page_style` char(16) NOT NULL,
  `summary` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `is_nav` (`is_nav`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `eduask_menu`
--

INSERT INTO `eduask_menu` (`id`, `parent_id`, `family`, `level`, `child_count`, `title`, `ex_title`, `alias`, `type`, `ex_link`, `is_nav`, `list_count`, `is_redirect`, `is_map`, `list_order`, `image`, `thumb_width`, `thumb_height`, `thumb_method`, `template`, `list_style`, `page_style`, `summary`, `keywords`, `description`) VALUES
(1, 0, ',1,', 0, 6, '网站导航', '', '', 'Menu', '', 0, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '', ''),
(2, 1, ',1,2,', 1, 0, '关于', '', '', 'Page', '', 1, 0, 0, 1, 0, '', 0, 0, 0, '', '', '', '', '', ''),
(3, 1, ',1,3,', 1, 3, '新闻', '', '', 'Article', '', 1, 0, 1, 1, 1, '', 0, 0, 0, '', '', '', '', '', ''),
(4, 1, ',1,4,', 1, 0, '团队', '', '', 'Album', '', 1, 0, 0, 1, 3, '', 0, 0, 0, '', '', '', '', '', ''),
(5, 1, ',1,5,', 1, 0, '外链', '', '', 'Exlink', 'https://www.eduaskcms.xin/', 1, 0, 0, 1, 4, '', 0, 0, 0, '', '', '', '', '', ''),
(6, 3, ',1,3,6,', 2, 0, '列表一', '', '', 'Article', '', 1, 3, 0, 1, 0, '', 0, 0, 0, '', 'show_case_5', '2', '', '', ''),
(7, 3, ',1,3,7,', 2, 0, '列表二', '', '', 'Article', '', 1, 3, 0, 1, 0, '', 0, 0, 0, '', 'show_case_10', '3', '', '', ''),
(8, 3, ',1,3,8,', 2, 0, '列表三', '', '', 'Article', '', 1, 3, 0, 1, 0, '', 0, 0, 0, '', 'show_case_15', '1', '', '', ''),
(9, 1, ',1,9,', 1, 0, '案例', '', '', 'Product', '', 1, 4, 0, 1, 2, '', 0, -1, 1, '', 'show_case_8', '2', '', '', ''),
(10, 1, ',1,10,', 1, 0, '友情连接', '', '', 'Link', '', 0, 0, 0, 1, 5, '', 0, 0, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_model`
--

DROP TABLE IF EXISTS `eduask_model`;
CREATE TABLE IF NOT EXISTS `eduask_model` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(64) NOT NULL,
  `cname` varchar(64) NOT NULL,
  `is_menu` tinyint(1) NOT NULL,
  `is_power` tinyint(1) NOT NULL,
  `is_dustbin` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `eduask_model`
--

INSERT INTO `eduask_model` (`id`, `model`, `cname`, `is_menu`, `is_power`, `is_dustbin`, `created`, `modified`) VALUES
(1, 'Menu', '栏目', 1, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(2, 'Article', '文章', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(3, 'Page', '单页', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(4, 'Product', '产品', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(5, 'Link', '链接', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(6, 'Download', '下载', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(7, 'Feedback', '留言', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(8, 'Album', '图集', 1, 0, 1, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(9, 'Picture', '图片', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(10, 'AlbumPicture', '相册图片', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(11, 'ProductPicture', '产品图片', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(12, 'ArticlePicture', '文章图片', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(13, 'SettingGroup', '系统设置组', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(14, 'Setting', '系统设置项', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(15, 'Dustbin', '回收站项', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(16, 'UserGroup', '用户组', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(17, 'User', '用户', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(18, 'Member', '用户信息', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(19, 'UserLogin', '用户登录', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(20, 'Dictionary', '字典', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(21, 'DictionaryItem', '字典项', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(22, 'AdPosition', '广告位', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(23, 'Ad', '广告', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(24, 'Model', '模型', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(25, 'AdminMenu', '后台栏目', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(26, 'QueryData', '数据查询', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(27, 'Exlink', '栏目外链', 1, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(28, 'PowerTree', '权限节点', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06'),
(29, 'Power', '权限', 0, 0, 0, '2017-11-01 15:49:06', '2017-11-01 15:49:06');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_page`
--

DROP TABLE IF EXISTS `eduask_page`;
CREATE TABLE IF NOT EXISTS `eduask_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `visit_count` int(10) unsigned NOT NULL,
  `summary` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `eduask_page`
--

INSERT INTO `eduask_page` (`id`, `menu_id`, `user_id`, `title`, `ex_title`, `is_verify`, `image`, `thumb`, `content`, `visit_count`, `summary`, `link`, `is_index`, `is_recommend`, `created`, `modified`, `list_order`, `keywords`, `description`) VALUES
(1, 2, 1, '关于', '', 1, '', '', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 24, '', '', 0, 0, '2017-11-01 15:49:25', '2017-11-01 16:40:26', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_picture`
--

DROP TABLE IF EXISTS `eduask_picture`;
CREATE TABLE IF NOT EXISTS `eduask_picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `foreign_id` int(10) unsigned NOT NULL,
  `module` char(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`foreign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `eduask_picture`
--

INSERT INTO `eduask_picture` (`id`, `user_id`, `foreign_id`, `module`, `title`, `image`, `thumb`, `is_verify`, `content`, `created`, `modified`, `list_order`) VALUES
(1, 1, 1, 'AlbumPicture', 'a', 'upload/AlbumPicture/201711/177192405459f98a2c3d475.jpg', 'upload/thumbs/201711/177192405459f98a2c3d475_400_300_3.jpg', 1, '', '2017-11-01 16:47:40', '2017-11-01 16:47:40', 0),
(2, 1, 1, 'AlbumPicture', 'b', 'upload/AlbumPicture/201711/151290964159f98a322530e.jpg', 'upload/thumbs/201711/151290964159f98a322530e_400_300_3.jpg', 1, '', '2017-11-01 16:47:46', '2017-11-01 16:47:46', 0),
(3, 1, 1, 'AlbumPicture', 'c', 'upload/AlbumPicture/201711/37729513659f98a37a37d2.jpg', 'upload/thumbs/201711/37729513659f98a37a37d2_400_300_3.jpg', 1, '', '2017-11-01 16:47:51', '2017-11-01 16:47:51', 0),
(4, 1, 1, 'AlbumPicture', 'd', 'upload/AlbumPicture/201711/77870792859f98a3e5ff4a.jpg', 'upload/thumbs/201711/77870792859f98a3e5ff4a_400_300_3.jpg', 1, '', '2017-11-01 16:47:58', '2017-11-01 16:47:58', 0),
(5, 1, 1, 'AlbumPicture', 'e', 'upload/AlbumPicture/201711/191868760159f98a450c8d7.jpg', 'upload/thumbs/201711/191868760159f98a450c8d7_400_300_3.jpg', 1, '', '2017-11-01 16:48:05', '2017-11-01 16:48:05', 0),
(6, 1, 1, 'AlbumPicture', 'f', 'upload/AlbumPicture/201711/182285337159f98a4b058e5.jpg', 'upload/thumbs/201711/182285337159f98a4b058e5_400_300_3.jpg', 1, '', '2017-11-01 16:48:11', '2017-11-01 16:48:11', 0);

-- --------------------------------------------------------

--
-- 表的结构 `eduask_power`
--

DROP TABLE IF EXISTS `eduask_power`;
CREATE TABLE IF NOT EXISTS `eduask_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(64) NOT NULL,
  `foreign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` blob NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eduask_power_tree`
--

DROP TABLE IF EXISTS `eduask_power_tree`;
CREATE TABLE IF NOT EXISTS `eduask_power_tree` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `controller` varchar(32) NOT NULL,
  `action` varchar(32) NOT NULL,
  `together` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eduask_product`
--

DROP TABLE IF EXISTS `eduask_product`;
CREATE TABLE IF NOT EXISTS `eduask_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(128) NOT NULL,
  `ex_title` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `original_price` decimal(10,2) NOT NULL,
  `property` text NOT NULL,
  `is_verify` tinyint(1) unsigned NOT NULL,
  `image` varchar(128) NOT NULL,
  `thumb` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `visit_count` int(10) unsigned NOT NULL,
  `summary` text NOT NULL,
  `link` varchar(128) NOT NULL,
  `is_index` tinyint(1) unsigned NOT NULL,
  `is_recommend` tinyint(1) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `list_order` int(11) NOT NULL,
  `picture_count` smallint(5) unsigned NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `user_id` (`user_id`),
  KEY `is_verify` (`is_verify`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `eduask_product`
--

INSERT INTO `eduask_product` (`id`, `menu_id`, `user_id`, `title`, `ex_title`, `date`, `price`, `original_price`, `property`, `is_verify`, `image`, `thumb`, `content`, `visit_count`, `summary`, `link`, `is_index`, `is_recommend`, `created`, `modified`, `list_order`, `picture_count`, `keywords`, `description`) VALUES
(1, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/21551600059f98b24eaeae_800_800_3.jpg', 'upload/thumbs/201711/21551600059f98b24eaeae_400_706_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:46', '2017-11-01 16:51:49', 0, 0, '', ''),
(2, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/189041210859f98b1bd3d76_800_800_3.jpg', 'upload/thumbs/201711/189041210859f98b1bd3d76_400_900_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:47', '2017-11-01 16:51:40', 0, 0, '', ''),
(3, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/78538604459f98b15e517b_800_800_3.jpg', 'upload/thumbs/201711/78538604459f98b15e517b_400_401_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:47', '2017-11-01 16:51:34', 0, 0, '', ''),
(4, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/194397447259f98af76e423_800_800_3.jpg', 'upload/thumbs/201711/194397447259f98af76e423_400_540_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 1, '', '', 0, 0, '2017-11-01 16:49:48', '2017-11-01 16:51:03', 0, 0, '', ''),
(5, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/126534342059f98b0a57544_800_800_3.jpg', 'upload/thumbs/201711/126534342059f98b0a57544_400_960_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:48', '2017-11-01 16:51:22', 0, 0, '', ''),
(6, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/115668411859f98af14278a_800_800_3.jpg', 'upload/thumbs/201711/115668411859f98af14278a_400_640_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:49', '2017-11-01 16:50:57', 0, 0, '', ''),
(7, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/67089025459f98aea9dee7_800_800_3.jpg', 'upload/thumbs/201711/67089025459f98aea9dee7_400_706_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:49', '2017-11-01 16:50:50', 0, 0, '', ''),
(8, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/187481628559f98ae40484b_800_800_3.jpg', 'upload/thumbs/201711/187481628559f98ae40484b_400_960_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:50', '2017-11-01 16:50:44', 0, 0, '', ''),
(9, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/120891451059f98adb45d38_800_800_3.jpg', 'upload/thumbs/201711/120891451059f98adb45d38_400_540_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:50', '2017-11-01 16:50:35', 0, 0, '', ''),
(10, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/61819298659f98ad46a1b8_800_800_3.jpg', 'upload/thumbs/201711/61819298659f98ad46a1b8_400_783_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:50', '2017-11-01 16:50:28', 0, 0, '', ''),
(11, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/44369328259f98accdb489_800_800_3.jpg', 'upload/thumbs/201711/44369328259f98accdb489_400_680_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:50', '2017-11-01 16:50:21', 0, 0, '', ''),
(12, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/108448955759f98ac62cdf9_800_800_3.jpg', 'upload/thumbs/201711/108448955759f98ac62cdf9_400_706_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:51', '2017-11-01 16:50:14', 0, 0, '', ''),
(13, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/68874786559f98abecfdb6_800_800_3.jpg', 'upload/thumbs/201711/68874786559f98abecfdb6_400_900_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:51', '2017-11-01 16:50:07', 0, 0, '', ''),
(14, 9, 1, 'EduaskCMS ', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/82131763759f98ab788f45_800_800_3.jpg', 'upload/thumbs/201711/82131763759f98ab788f45_400_650_1.jpg', '<p><span style="font-size:1.1em;"><span style="line-height: 2.4;">EduaskCMS 是基于ThinkPHP5.0.11框架开发的一个免费开源的内容管理系统，开发的理念不光注重后台，同样注重后台功能的扩展；更加注重的是前台的快速开 发和便捷。系统希望实现的目标是&ldquo;让你的代码，能省则省&rdquo;。你可以使用EduaskCMS直接进行你自己的建站、学习、功能开发，<span style="color: red;">但不可以在系统基础上更新发布子版系统。</span></span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">功能方面，一个企业站你几乎不用写任何PHP代码。同时已经完成了短信、邮箱、人脸识别、图片信息获取、鉴黄等接口（1.0.3发布）。如果是功能性项目，后台只需要配置好模型字段，后台功能就已经全部完成，方便快捷。后期将开发更多实用功能。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">模型方面，对事件、数据验证、关联模型等都有较大的更加便捷的修改，使用以后你就知道了。</span></span></p>\r\n\r\n<p><span style="line-height:2.4;"><span style="font-size: 1.1em;">如果系统对你有所帮助，请捐赠我们，让我们有更强动力 ！</span></span></p>\r\n', 0, '', '', 0, 0, '2017-11-01 16:49:52', '2017-11-01 16:49:59', 0, 0, '', ''),
(15, 9, 1, 'EduaskCMS', '', '2017-11-01', '0.00', '0.00', '', 1, 'upload/Product/201711/29532367159f98b4d0ec64_800_800_3.jpg', 'upload/thumbs/201711/29532367159f98b4d0ec64_400_826_1.jpg', '', 0, '', '', 0, 0, '2017-11-01 16:52:29', '2017-11-01 16:52:29', 0, 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_query_data`
--

DROP TABLE IF EXISTS `eduask_query_data`;
CREATE TABLE IF NOT EXISTS `eduask_query_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `query` char(32) NOT NULL,
  `controller` char(32) NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  `list_count` tinyint(3) unsigned NOT NULL,
  `is_family` tinyint(1) unsigned NOT NULL,
  `is_verify` tinyint(3) unsigned NOT NULL,
  `type` char(16) NOT NULL,
  `contain` text NOT NULL,
  `where` text NOT NULL,
  `field` text NOT NULL,
  `order` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `eduask_query_data`
--

INSERT INTO `eduask_query_data` (`id`, `title`, `query`, `controller`, `menu_id`, `list_count`, `is_family`, `is_verify`, `type`, `contain`, `where`, `field`, `order`) VALUES
(1, '示范数据', 'index', '', 2, 4, 1, 0, 'select', '[''Menu'']', '[''is_index''=>1]', '[''id'',''title'',''date'',''image'']', '[''is_index''=>''DESC'']'),
(2, '关于数据', 'index', '', 2, 1, 0, 1, 'find', '', '', '[''id'',''title'',''content'']', ''),
(3, '新闻数据', 'index', '', 3, 5, 1, 1, 'select', '', '', '[''id'',''title'',''date'']', '[''list_order''=>''DESC'',''id''=>''DESC'']'),
(4, '友情连接', 'all', '', 10, 10, 0, 1, 'select', '', '', '[''id'',''title'',''link'']', '[''list_order''=>''DESC'',''id''=>''ASC'']');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_setting`
--

DROP TABLE IF EXISTS `eduask_setting`;
CREATE TABLE IF NOT EXISTS `eduask_setting` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `setting_group_id` int(10) unsigned NOT NULL,
  `vari` varchar(32) NOT NULL,
  `value` text NOT NULL,
  `type` enum('text','textarea','file','checkbox','radio','select','checker','array','keyvalue','password','color') NOT NULL,
  `options` text NOT NULL,
  `info` text NOT NULL,
  `list_order` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vari` (`vari`),
  KEY `setting_group_id` (`setting_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `eduask_setting`
--

INSERT INTO `eduask_setting` (`id`, `title`, `setting_group_id`, `vari`, `value`, `type`, `options`, `info`, `list_order`) VALUES
(1, '网站名称', 1, 'site_title', 'EduaskCMS测试站', 'text', '', '', 0),
(2, '网站关键字', 1, 'site_keywords', '', 'text', '', '', 0),
(3, '网站描述', 1, 'site_description', '', 'textarea', '', '', 0),
(4, '版权描述', 1, 'site_copyright', '&copy;xxxx 版权所有', 'text', '', '', 0),
(5, '统计代码', 1, 'site_code', '', 'textarea', '', '', 0),
(6, '公司名称', 1, 'corp_title', '公司名称', 'text', '', '', 0),
(7, '公司电话', 1, 'tel', '公司电话', 'text', '', '', 0),
(8, '公司邮箱', 1, 'email', '公司邮箱', 'text', '', '', 0),
(9, '公司地址', 1, 'address', '公司地址', 'text', '', '', 0),
(10, 'ICP备案', 1, 'icp', '蜀ICP备xxxxxx号', 'text', '', '', 0),
(11, '公众号二维码', 1, 'public_qrcode', '', 'file', '', '', 0),
(12, '开启审核', 2, 'is_verify', '1', 'checker', '', '如果开启，前台数据必须审核通过以后才能显示', 0),
(13, '审核默认值', 2, 'default_verify', '1', 'radio', '{"1":"默认审核","0":"默认不审核"}', '', 0),
(14, '全局分页条数', 2, 'list_count', '15', 'text', '', '', 0),
(15, '后台分页条数', 2, 'admin_list_count', '15', 'text', '', '', 0),
(16, '后台列表缓存', 2, 'is_admin_cache', '0', 'checker', '', '', 0),
(17, '留言是否显示列表', 2, 'is_feedback_list', '1', 'checker', '', '', 0),
(18, '开启栏目广告位', 2, 'is_menu_position', '0', 'checker', '', '开启以后不同栏目可以单独创建对应栏目广告位', 0),
(19, '是否开启Trace', 2, 'is_trace', '1', 'checker', '', '建议程序员操作', 0),
(20, '是否开启Debug', 2, 'is_debug', '1', 'checker', '', '网站上线后不建议开启；建议程序员操作', 0),
(21, '图片关联模型', 3, 'use_picture_model', '["Album"]', 'checkbox', '{"Album":"图集","Product":"产品","Article":"文章"}', '', 0),
(22, '全局缩略图类型', 3, 'thumb_method', '3', 'radio', '{"-1":"系统默认","1":"等比例缩放","2":"缩放后填充","3":"居中裁剪","4":"左上角裁剪","5":"右下角裁剪","6":"固定尺寸缩放"}', '', 0),
(23, '全局缩略图宽度', 3, 'thumb_width', '400', 'text', '', '请填写整数，单位：像素', 0),
(24, '全局缩略图高度', 3, 'thumb_height', '300', 'text', '', '请填写整数，单位：像素', 0),
(25, '全局默认图片', 3, 'default_image', '', 'file', '', '适用于列表页必须图片时，而又没有上传图片的数据', 0),
(26, '开启图片水印', 3, 'is_water', '0', 'checker', '', '', 0),
(27, '水印模型', 3, 'water_model', '', 'checkbox', '{"Article":"文章","Product":"产品","Album":"图集","AlbumPicture":"图集图片","Ad":"广告","Download":"下载","Page":"单页"}', '', 0),
(28, '水印类型', 3, 'water_type', 'text', 'radio', '{"text":"文字水印","image":"图片水印"}', '', 0),
(29, '水印位置', 3, 'water_location', '9', 'radio', '{"1":"左上","2":"上居中","3":"右上","4":"左中","5":"居中","6":"右中","7":"左下","8":"下居中","9":"右下"}', '', 0),
(30, '水印图片', 3, 'water_image', '', 'file', '', '', 0),
(31, '水印图片透明度', 3, 'water_image_opacity', '100', 'text', '', '填写数值，范围1~100，100表示不透明', 0),
(32, '水印文字', 3, 'water_text', '', 'text', '', '', 0),
(33, '水印文字大小', 3, 'water_text_size', '20', 'text', '', '', 0),
(34, '水印文字颜色', 3, 'water_text_color', '#ffffff', 'color', '', '', 0),
(35, '服务器地址', 4, 'email_host', 'smtp.163.com', 'text', '', '', 0),
(36, '发件邮箱账号', 4, 'email_from', '', 'text', '', '应该和服务器地址对用类型', 0),
(37, '发件账号密码', 4, 'email_password', '', 'password', '', '', 0),
(38, '发件人名称', 4, 'email_fromname', 'EduaskCMS', 'text', '', '', 0),
(39, 'accessKeyId', 5, 'sms_keyid', '', 'text', '', '填写阿里大于短信接口accessKeyId', 0),
(40, 'accessKeySecret', 5, 'sms_keysecret', '', 'text', '', '填写阿里大于短信接口accessKeySecret', 0),
(41, 'appid', 6, 'yt_appid', '', 'text', '', 'http://open.youtu.qq.com/申请', 0),
(42, 'secretId', 6, 'yt_secretid', '', 'text', '', '', 0),
(43, 'secretKey', 6, 'yt_secretkey', '', 'text', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `eduask_setting_group`
--

DROP TABLE IF EXISTS `eduask_setting_group`;
CREATE TABLE IF NOT EXISTS `eduask_setting_group` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `list_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `list_order` (`list_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `eduask_setting_group`
--

INSERT INTO `eduask_setting_group` (`id`, `title`, `list_order`) VALUES
(1, '站点信息', 0),
(2, '全局设置', 0),
(3, '图片设置', 0),
(4, '邮件配置', 0),
(5, '短信配置', 0),
(6, '优图配置', 0);

-- --------------------------------------------------------

--
-- 表的结构 `eduask_user`
--

DROP TABLE IF EXISTS `eduask_user`;
CREATE TABLE IF NOT EXISTS `eduask_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `status` enum('verified','unverified','banned') NOT NULL,
  `email` varchar(32) NOT NULL,
  `logined_ip` varchar(32) NOT NULL,
  `logined` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `eduask_user`
--

INSERT INTO `eduask_user` (`id`, `username`, `password`, `user_group_id`, `status`, `email`, `logined_ip`, `logined`, `created`) VALUES
(1, 'eduask', 'fa2112ee0dae88999a28f19b6a501aa8', 1, 'verified', '', '', '0000-00-00 00:00:00', '2017-11-01 15:49:06'),
(2, 'test123', '50c85a3feab412dd91dda4531f2de534', 1, 'verified', '', '', '0000-00-00 00:00:00', '2017-11-01 17:14:20');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_user_group`
--

DROP TABLE IF EXISTS `eduask_user_group`;
CREATE TABLE IF NOT EXISTS `eduask_user_group` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `is_admin` tinyint(1) NOT NULL,
  `title` varchar(64) NOT NULL,
  `alias` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `eduask_user_group`
--

INSERT INTO `eduask_user_group` (`id`, `is_admin`, `title`, `alias`) VALUES
(1, 1, '后台管理员', 'Admin'),
(2, 0, '注册会员', 'Member');

-- --------------------------------------------------------

--
-- 表的结构 `eduask_user_login`
--

DROP TABLE IF EXISTS `eduask_user_login`;
CREATE TABLE IF NOT EXISTS `eduask_user_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip` varchar(64) NOT NULL,
  `success` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
