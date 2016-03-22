<?php

/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 2:12
 */


namespace Common\Model;

use Think\Model;

class AdminModel extends Model
{
    protected $_validate = [
        ['user_name', 'require', '账号不能为空！', 1, "regex", Model::MODEL_BOTH], //验证账号
        ['user_pass', 'require', '密码不能为空！', 1, "regex", Model::MODEL_BOTH], //验证密码
    ];
}