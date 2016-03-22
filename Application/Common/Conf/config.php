<?php
return array(
	'TMPL_FILE_DEPR'=>'_',
	'SHOW_PAGE_TRACE' =>true,
	//'配置项'=>'配置值'
	'TOKEN_ON' => true, // 是否开启令牌验证 默认关闭
	'TOKEN_NAME' => '__hash__',
	'TOKEN_TYPE' => 'md5', // 令牌哈希验证规则 默认为 MD5
	'TOKEN_RESET' => true, // 令牌验证出错后是否重置令牌 默认为 true

    	/* 默认设定 */
    	'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    	'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    	'DEFAULT_ACTION'        =>  'index', // 默认操作名称

     	/* 数据库设置 */
    	'DB_TYPE'               =>  '',     // 数据库类型
    	'DB_HOST'               =>  '', // 服务器地址
    	'DB_NAME'               =>  '',          // 数据库名
    	'DB_USER'               =>  '',      // 用户名
    	'DB_PWD'                =>  '',          // 密码
    	'DB_PORT'               =>  '',        // 端口
    	'DB_PREFIX'             =>  '',    // 数据库表前缀
);
