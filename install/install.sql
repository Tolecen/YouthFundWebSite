USE `{dataname}`;
Set character_set_connection=utf8, character_set_results=utf8, character_set_client=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}app_client_info` ( `client_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '客户端ID', `client_no` char(20) DEFAULT NULL COMMENT '客户端编号', `serial_code` varbinary(255) DEFAULT NULL COMMENT '客户端识别吗', `type` int(11) DEFAULT NULL COMMENT '客户端类型1手机，2为pad,0其他', `brand` varchar(50) DEFAULT NULL COMMENT '品牌', `model` varchar(100) DEFAULT NULL COMMENT '型号', `screen_width` int(11) DEFAULT NULL COMMENT '屏幕宽度', `screen_height` int(11) DEFAULT NULL COMMENT '屏幕长度', `firstsetup` datetime DEFAULT NULL COMMENT '首次安装日期', `user_id` bigint(20) DEFAULT '0' COMMENT '当前用户ID', `certkey` char(24) DEFAULT NULL COMMENT '证书', `lastrefkey` datetime DEFAULT NULL COMMENT '最后一次获取密钥日期', `os_name` varchar(100) DEFAULT NULL, `os_version` varchar(100) DEFAULT NULL, `is_online` int(11) DEFAULT '0', `lastlogin` datetime DEFAULT NULL, `session_id` varchar(255) DEFAULT NULL, `group` int(11) DEFAULT '0', `version` varchar(100) DEFAULT NULL, PRIMARY KEY (`client_id`)) ENGINE=MyISAM AUTO_INCREMENT=1445 DEFAULT CHARSET=utf8 COMMENT='客户端信息表';
CREATE TABLE IF NOT EXISTS `{tableprefix}admin` (  `uid` bigint(20) NOT NULL AUTO_INCREMENT,   `username` varchar(100) NOT NULL,  `usertype` char(10) NOT NULL,  `email` varchar(32) NOT NULL,  `passwd` varchar(32) NOT NULL,  PRIMARY KEY (`uid`)) ENGINE=MyISAM AUTO_INCREMENT=1445 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `{tableprefix}topic` (  `topic_id` bigint(20) NOT NULL AUTO_INCREMENT,  `topic_name` varchar(100) NOT NULL COMMENT '文章名称', `file_id` bigint(20) NOT NULL DEFAULT '0',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `topic_intro` LONGTEXT NOT NULL COMMENT '文章简介',  `topic_desc` LONGTEXT NOT NULL COMMENT '文章内容',  `topic_tag` varchar(20) NOT NULL COMMENT '话题标语',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`topic_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}project` (  `project_id` bigint(20) NOT NULL AUTO_INCREMENT,  `project_name` varchar(100) NOT NULL COMMENT '项目名称',  `project_type` varchar(10) NOT NULL COMMENT '项目类型',  `project_type_id` tinyint(2) NOT NULL COMMENT '项目类型ID',  `project_user` varchar(20) NOT NULL COMMENT '联系人',  `project_user_phone` varchar(20) NOT NULL COMMENT '联系人电话',  `project_user_email` varchar(50) NOT NULL COMMENT '联系人邮箱',  `project_user_weixin` varchar(20) NOT NULL COMMENT '联系人微信',  `project_company` varchar(50) NOT NULL COMMENT '公司名称',  `project_company_type` varchar(50) NOT NULL COMMENT '行业分类',  `project_company_financ_p` varchar(50) NOT NULL COMMENT '融资进度',  `project_company_financ` varchar(50) NOT NULL COMMENT '融资金额',  `project_company_team` varchar(50) NOT NULL COMMENT '团队规模',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`project_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}project_bl` (  `bl_id` bigint(20) NOT NULL AUTO_INCREMENT,  `project_id` bigint(20) NOT NULL DEFAULT '0', `file_id` bigint(20) NOT NULL DEFAULT '0',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`bl_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}project_product` (  `product_id` bigint(20) NOT NULL AUTO_INCREMENT,  `project_id` bigint(20) NOT NULL DEFAULT '0', `file_id` bigint(20) NOT NULL DEFAULT '0',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`product_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}project_qr` (  `qr_id` bigint(20) NOT NULL AUTO_INCREMENT,  `project_id` bigint(20) NOT NULL DEFAULT '0', `file_id` bigint(20) NOT NULL DEFAULT '0',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`qr_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}project_plan` (  `plan_id` bigint(20) NOT NULL AUTO_INCREMENT,  `project_id` bigint(20) NOT NULL DEFAULT '0', `file_id` bigint(20) NOT NULL DEFAULT '0',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`plan_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}project_gg` (  `gg_id` bigint(20) NOT NULL AUTO_INCREMENT,  `project_id` bigint(20) NOT NULL DEFAULT '0', `gg_mc` varchar(50) NOT NULL DEFAULT '', `gg_zw` varchar(50) NOT NULL DEFAULT '',  `isused` tinyint(1) NOT NULL COMMENT '是否关闭',  `created_time` int(11) NOT NULL,  PRIMARY KEY (`gg_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}file` (  `file_id` bigint(20) NOT NULL AUTO_INCREMENT,  `file_key` varchar(60) NOT NULL,  `file_path` varchar(30) NOT NULL,  `file_original` varchar(100) NOT NULL,  `file_type` varchar(20) NOT NULL,  `width` int(4) NOT NULL DEFAULT '0',  `height` int(4) NOT NULL DEFAULT '0',  `isused` tinyint(1) NOT NULL,  PRIMARY KEY (`file_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1445 ;
CREATE TABLE IF NOT EXISTS `{tableprefix}setting` (  `variable` varchar(32) NOT NULL,  `content` text NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统设置表';
INSERT INTO `{tableprefix}setting` (`variable`, `content`) VALUES('site_logo', 'data/logo/logo.gif'),('site_cache_dir', 'data/cache'),('site_upload_dir', 'data/upload'),('site_email', '2758049352@qq.com'),('site_address', '山东省济南市'),('site_worktime', '09:00-23:00'),('site_qq', '2758049352'),('site_benai', '鲁ICP备09060250号'),('site_tel', '186xxxxxx12'),('site_copyright', '版权归青春在线创投基金所有'),('seo_rewrite', '0'),('seo_title', '青春在线创投基金'),('seo_keyword', '青春在线创投基金'),('seo_description', '青春在线创投基金');