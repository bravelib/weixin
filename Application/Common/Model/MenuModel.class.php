<?php

/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 2:12
 */


namespace Common\Model;

use Think\Model;

class MenuModel extends Model
{

    /**按照条件查找到所有菜单
     * @param $where
     * @return mixed
     */
    public function get_menu_all($where = [])
    {
        return $this->where($where)->select();
    }
}