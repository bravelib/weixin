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
        ['user_name', '/[a-zA-Z0-9]{5,32}/', '账号可以包含数字字母长度为5-32位！', 1, "regex", Model::MODEL_BOTH], //验证账号

        ['user_name', '', '账号已存在！', 1, "unique", Model::MODEL_INSERT], //验证账号

        ['user_pass', 'require', '密码不能为空！', 1, "regex", Model::MODEL_INSERT], //验证密码
        ['com_user_pass', 'require', '确认密码不能为空！', 0, "regex", Model::MODEL_INSERT], //验证密码
        ['com_user_pass', 'user_pass', '两次密码不相等！', 0, "confirm", Model::MODEL_INSERT], //验证密码

        ['user_pass', 'com_user_pass', '两次密码不相等！', 2, "confirm", Model::MODEL_UPDATE], //验证密码
        ['com_user_pass', 'user_pass', '两次密码不相等！', 2, "confirm", Model::MODEL_UPDATE], //验证密码

        ['role_id', 'require', '所属组不能为空！', 1, "regex", Model::MODEL_BOTH], //验证组
    ];

    public function get_user_info($where)
    {
        return $this->where($where)->find();
    }

    public function get_user_all($where)
    {
        return $this->where($where)->select();
    }
}