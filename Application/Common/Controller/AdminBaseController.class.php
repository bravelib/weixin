<?php
/**
 * Created by PhpStorm.
 * User: shangbl
 * Date: 2016/3/23
 * Time: 2:00
 */

namespace Common\Controller;


class AdminBaseController extends AppBaseController
{

    public function _initialize()
    {
        if ($_SESSION[SESSION_KEY]["id"]) {
            $this->get_menu_all();
        } else {
            if (IS_AJAX) {
                $this->error("您还没有登录！", U("Admin/Login/login"));
            } else {
                header("Location:" . U("Admin/Login/login"));
                exit();
            }
        }
    }

    /**
     *1.将菜单分成两部分,1是顶级菜单 2是二级菜单
     * 然后判定请求的url,跟二级菜单对比(1级菜单不能访问),如果相同,则分配该菜单名称到前端页面的page_name;
     * 同时增加一些属性来适应页面的特殊性,比如默认展开背景灰色等...
     */
    public function get_menu_all()
    {
        $obj         = D("Menu");
        $lists       = $obj->get_menu_all();
        $lists1      = [];
        $lists2      = [];
        $request_url = MODULE_NAME . "/" . CONTROLLER_NAME . "/" . ACTION_NAME;
        if (ACTION_NAME == "edit") {
            $request_url = MODULE_NAME . "/" . CONTROLLER_NAME . "/index";
        }
        foreach ($lists as $key => $val) {
            $url = $val["group"] . "/" . $val["module"] . "/" . $val["action"];
            if ($val["pid"] != 0) {
                $val["url"] = $url;
                if (strcmp($url, $request_url) == 0) {
                    $this->assign("page_name", $val["name"]);
                    $lists1[$val["pid"]]["active"] = 1;
                    $val["active"]                 = 1;
                }
                $lists2[$val["pid"]][] = $val;
            } else {
                $lists1[$val["id"]] = $val;
            }
        }
        $this->assign("lists1", $lists1);
        $this->assign("lists2", $lists2);
    }
}