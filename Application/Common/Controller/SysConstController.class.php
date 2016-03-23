<?php

/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 18:48
 */

namespace Common\Controller;


class SysConstController
{

    /**
     * 基本的状态信息 0表示禁用 1表示启用
     */

    const SYS_STATUS_0 = 0;
    const SYS_STATUS_1 = 1;

    static public $sys_status_arr = [
        self::SYS_STATUS_0 => "禁用",
        self::SYS_STATUS_1 => "启用",
    ];

}