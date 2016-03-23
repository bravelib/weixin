# Host: localhost  (Version: 5.5.47)
# Date: 2016-03-23 22:32:29
# Generator: MySQL-Front 5.3  (Build 4.214)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "wx_access"
#

CREATE TABLE `wx_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) NOT NULL DEFAULT '0' COMMENT '菜单id',
  `group` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `module` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "wx_access"
#

INSERT INTO `wx_access` VALUES (2,1,2,'',''),(6,2,4,'',''),(7,2,1,'',''),(8,2,2,'','');

#
# Structure for table "wx_admin"
#

CREATE TABLE `wx_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '账号',
  `user_pass` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '密码密文',
  `user_nickname` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '用户昵称',
  `ctime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1可用 0不可用',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员';

#
# Data for table "wx_admin"
#

INSERT INTO `wx_admin` VALUES (1,'admin','6b1d7c28b025b2cbe535ccd1d2b0979f','超级管理员','2016-03-23 05:24:23',1),(2,'adminadmin','6b1d7c28b025b2cbe535ccd1d2b0979f','test','0000-00-00 00:00:00',1),(3,'rootroot','root','root','0000-00-00 00:00:00',1),(4,'root1','cced71c267b129f37d87929c0430bb1e','root1','0000-00-00 00:00:00',1);

#
# Structure for table "wx_menu"
#

CREATE TABLE `wx_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(16) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '菜单名称',
  `group` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '菜单管理的组',
  `module` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '模块',
  `action` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '方法',
  `icon` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ordernum` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='菜单栏';

#
# Data for table "wx_menu"
#

INSERT INTO `wx_menu` VALUES (1,0,'菜单管理','Admin','Menu','index','table',0),(2,0,'管理员管理','Admin','Admin','','user',0),(3,2,'管理员列表','Admin','Admin','index','th-list',0),(4,0,'角色管理','Admin','Role','','group',0),(5,4,'角色列表','Admin','Role','index','th-list',0),(6,4,'角色添加','Admin','Role','add','plus',0),(7,2,'管理员添加','Admin','Admin','add','plus',0),(8,0,'微信粉丝管理','Admin','Wxfuns','','paste',0);

#
# Structure for table "wx_role"
#

CREATE TABLE `wx_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(16) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '角色名称',
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '描述',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1正常 0禁止',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "wx_role"
#

INSERT INTO `wx_role` VALUES (1,'超级管理员组','超级管理员组',1),(2,'管理员','管理员',0);

#
# Structure for table "wx_role_user"
#

CREATE TABLE `wx_role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色id',
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_id` (`role_id`,`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "wx_role_user"
#

INSERT INTO `wx_role_user` VALUES (1,1,1),(3,2,2),(4,2,3),(5,2,4);
