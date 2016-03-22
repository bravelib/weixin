<?php
return [
    'TMPL_FILE_DEPR'     => '_',
    'VIEW_PATH'          => './View/',
    'SHOW_PAGE_TRACE'    => TRUE,

    
    'TOKEN_ON'           => TRUE, // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'         => '__hash__',
    'TOKEN_TYPE'         => 'md5', // 令牌哈希验证规则 默认为 MD5
    'TOKEN_RESET'        => TRUE, // 令牌验证出错后是否重置令牌 默认为 true

    /* 默认设定 */
    'DEFAULT_MODULE'     => 'Home',  // 默认模块
    'DEFAULT_CONTROLLER' => 'Index', // 默认控制器名称
    'DEFAULT_ACTION'     => 'index', // 默认操作名称

    /* 数据库设置 */
    'DB_TYPE'            => 'mysqli',     // 数据库类型
    'DB_HOST'            => 'localhost', // 服务器地址
    'DB_NAME'            => 'library',          // 数据库名
    'DB_USER'            => 'root',      // 用户名
    'DB_PWD'             => 'root',          // 密码
    'DB_PORT'            => '3306',        // 端口
    'DB_PREFIX'          => 'wx_',    // 数据库表前缀
];
