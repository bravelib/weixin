<?php

namespace Admin\Controller;

use Common\Controller;

class AdminController extends Controller\AdminBaseController
{
    public $menu_mod;

    public function __construct()
    {
        parent::__construct();
        $this->menu_mod = D("Admin");
    }


    public function index()
    {
        $user_list = $this->menu_mod->get_user_all([]);

        $role_list = D("Role")->getField("id,role_name");

        $user_relation_role     = D("RoleUser")->getField("uid,role_id");
        $user_relation_role_arr = [];

        foreach ($user_relation_role as $key => $vo) {
            //uid=>role_id;
            $user_relation_role_arr[$key] = $role_list[$vo];
        }

        $this->assign("user_relation_role_arr", $user_relation_role_arr);
        $this->assign("lists", $user_list);
        $this->display();
    }

    public function add()
    {
        $role_list = D("Role")->get_role_all([]);
        $this->assign("role_list", $role_list);
        $this->display();
    }

    public function add_post()
    {
        if (IS_POST) {
            if ($data = $this->menu_mod->create()) {
                $data["user_pass"] = creat_pwd_string($data["user_pass"]);
                $data["ctime"]     = c_time();
                if ($this->menu_mod->add($data)) {
                    $this->success("添加成功!", U("Admin/Admin/index"));
                } else {
                    $this->error("添加失败!");
                }
            } else {
                $this->error($this->menu_mod->getError());
            }
        }
    }

    public function edit()
    {
        $id                 = I("id");
        $relation_user_role = D("Role")->where(["user_id" => $id])->find();
        $role_list          = D("Role")->get_role_all([]);
        $uinfo              = $this->menu_mod->get_user_info(["id" => $id]);
        $this->assign("role_list", $role_list);
        $this->assign($uinfo);
        $this->assign("role_id", $relation_user_role["role_id"]);
        $this->display();
    }

    public function edit_post()
    {
        if (IS_POST) {
            if ($data = $this->menu_mod->create()) {
                if ($data["user_pass"]) {
                    $data["user_pass"] = creat_pwd_string($data["user_pass"]);
                } else {
                    unset($data["user_pass"]);
                }
                M()->startTrans();
                if ($this->menu_mod->save($data) !== FALSE) {

                    $ret = M("RoleUser")->where(["uid" => $data["id"]])->delete();
                    if ($ret !== FALSE) {
                        $id = M("RoleUser")->add(["role_id" => $_POST["role_id"], "uid" => $data["id"]]);
                        if ($id) {
                            M()->commit();
                            $this->success("修改成功!", U('Admin/Admin/index'));
                        } else {
                            M()->rollback();
                            $this->error("修改失败!");
                        }
                    } else {
                        M()->rollback();
                        $this->error("修改失败!");
                    }
                } else {
                    M()->rollback();
                    $this->error("修改失败!");
                }
            } else {
                $this->error($this->menu_mod->getError());
            }
        }
    }

}
