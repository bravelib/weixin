<?php
return [
    'TMPL_FILE_DEPR'      => '_',
    'VIEW_PATH'           => './View/',

    'SHOW_ERROR_MSG'      => TRUE,
    'SHOW_PAGE_TRACE'     => TRUE,

    /* 默认设定 */
    'DEFAULT_MODULE'      => 'Home',  // 默认模块
    'DEFAULT_CONTROLLER'  => 'Index', // 默认控制器名称
    'DEFAULT_ACTION'      => 'index', // 默认操作名称

    /* 数据库设置 */
    'DB_TYPE'             => 'mysqli',     // 数据库类型
    'DB_HOST'             => 'localhost', // 服务器地址
    'DB_NAME'             => 'library',          // 数据库名
    'DB_USER'             => 'root',      // 用户名
    'DB_PWD'              => 'root',          // 密码
    'DB_PORT'             => '3306',        // 端口
    'DB_PREFIX'           => 'wx_',    // 数据库表前缀

    'TMPL_ACTION_ERROR'   => './View/Public/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => './View/Public/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
    'TMPL_EXCEPTION_FILE' => './View/Public/think_exception.tpl',// 异常页面的模板文件
];
