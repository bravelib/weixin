<?php

/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 2:12
 */


namespace Common\Model;

use Think\Model;

class RoleModel extends Model
{
    protected $_validate = [
        ['role_name', 'require', '角色名称不能为空！', 1, "regex", Model::MODEL_BOTH], //验证账号
        ['status', 'require', '状态不能为空！', 1, "regex", Model::MODEL_BOTH], //验证密码
    ];

    public function get_role_info($where)
    {
        return $this->where($where)->find();
    }

    public function get_role_all($where = [])
    {
        return $this->where($where)->select();
    }
}