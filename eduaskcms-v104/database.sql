-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?11 �?01 �?14:13
-- 服务器版�? 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据�? `tpcms`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
