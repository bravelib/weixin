<?php

namespace Admin\Controller;

use Common\Controller;

class RoleController extends Controller\AdminBaseController
{
    public $menu_mod;

    public function __construct()
    {
        parent::__construct();
        $this->menu_mod = D("Role");
    }


    /**
     * 获取角色列表
     */
    public function index()
    {
//        dump(Controller\SysConstController::$sys_status_arr);
        $user_list = $this->menu_mod->get_role_all();
        $this->assign("lists", $user_list);
        $this->display();
    }

    /**
     * add add_post 添加角色
     */
    public function add()
    {
        $this->display();
    }

    public function add_post()
    {
        if (IS_POST) {
            $_POST["description"] = htmlspecialchars($_POST["description"]);
            if ($this->menu_mod->create()) {
                if ($this->menu_mod->add()) {
                    $this->success("添加成功!", U("Admin/Role/index"));
                } else {
                    $this->error("添加失败!");
                }
            } else {
                $this->error($this->menu_mod->getError());
            }
        }

    }

    /**
     * 编辑角色 edit edit_post
     */
    public function edit()
    {
        $id        = I("id");
        $role_info = $this->menu_mod->get_role_info(["id" => $id]);
        $this->assign($role_info);
        $this->display();
    }

    public function edit_post()
    {
        if (IS_POST) {
            $_POST["description"] = htmlspecialchars($_POST["description"]);
            if ($this->menu_mod->create()) {
                if ($this->menu_mod->save() !== FALSE) {
                    $this->success("修改成功!", U("Admin/Role/index"));
                } else {
                    $this->error("修改失败!");
                }
            } else {
                $this->error($this->menu_mod->getError());
            }
        }
    }

    /**
     * 删除角色
     */
    public function delete()
    {
        $id = I("id");
        if ($id == 1) {
            $this->error("该组不能删除!");
        } else {
            if ($this->menu_mod->where(["id" => $id])->delete()) {
                $this->success("删除成功!", U("Admin/Role/index"));
            } else {
                $this->error("删除失败!");
            }
        }
        $this->success("success");
    }

    /**
     * 查看该组成员
     */
    public function show_role_user()
    {
        $id = I("id");


        $uids = M("RoleUser")->where(["role_id" => $id])->getField("uid,id");

        $uids_arr = array_keys($uids);

        if (empty($uids_arr)) {
            $uids_arr = [0];
        }

        $users_exists     = D("Admin")->get_user_all(["id" => ["in", $uids_arr]]);
        $users_not_exists = D("Admin")->get_user_all(["id" => ["not in", $uids_arr]]);

        $this->assign("lists_exists", $users_exists);
        $this->assign("lists_not_exists", $users_not_exists);

        $role_info = $this->menu_mod->get_role_info(["id" => $id]);
        $this->assign($role_info);

        $this->display();

    }

    /**
     * 删除该组成员
     */
    public function delete_role_user()
    {
        $role_id = I("role_id");
        $uid     = I("uid");
        if ($uid == 1) {
            $this->error("不能删除该用户!");
        } else {
            $ret = M("RoleUser")->where(["role_id" => $role_id, "uid" => $uid])->delete();
            if ($ret) {
                $this->success("删除成功!");
            } else {
                $this->error("删除失败!");
            }
        }
    }

    /**
     * 转入
     */
    public function add_role_user()
    {
        $role_id = I("role_id");
        $uid     = I("uid");
        if ($uid == 1) {
            $this->error("不能转入该用户!");
        } else {
            M()->startTrans();
            $ret = M("RoleUser")->where(["uid" => $uid])->delete();
            if ($ret !== FALSE) {
                $id = M("RoleUser")->add(["role_id" => $role_id, "uid" => $uid]);
                if ($id) {
                    M()->commit();
                    $this->success("转入成功!");
                } else {
                    M()->rollback();
                    $this->error("转入失败!");
                }
            } else {
                M()->rollback();
                $this->error("转入失败!");
            }

        }
    }

    public function show_role_auth()
    {
        $id = I("id");

        $menuids = M("Access")->where(["role_id" => $id])->getField("menu_id,id");

        $menuids_arr = array_keys($menuids);

        if (empty($menuids_arr)) {
            $menuids_arr = [0];
        }

        $menu_exists = D("Menu")->get_menu_all(["id" => ["in", $menuids_arr]]);

        $menu_not_exists = D("Menu")->get_menu_all(["id" => ["not in", $menuids_arr], "pid" => ["eq", 0]]);

        $this->assign("lists_exists", $menu_exists);
        $this->assign("lists_not_exists", $menu_not_exists);

        $role_info = $this->menu_mod->get_role_info(["id" => $id]);
        $this->assign($role_info);

        $this->display();
    }

    public function add_role_auth()
    {
        $role_id = I("role_id");
        $menu_id = I("menu_id");
        if ($role_id == 1) {
            $this->error("不能转入该角色!");
        } else {
            $id = M("Access")->add(["role_id" => $role_id, "menu_id" => $menu_id]);
            if ($id) {
                $this->success("转入成功!");
            } else {
                $this->error("转入失败!");
            }
        }
    }

}
