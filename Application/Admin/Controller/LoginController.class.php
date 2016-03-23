<?php
namespace Admin\Controller;

use Common\Controller;

use Common\Model;

class LoginController extends Controller\AdminBaseController
{

    public $admin_mod = "";

    public function __construct()
    {
        parent::__construct();

        $this->admin_mod = D("Admin");
    }

    public function _initialize()
    {
    }

    public function login()
    {
        if (isset($_SESSION[SESSION_KEY]['id'])) {//已经登录
            $this->success("已登录！", U("Index/index"));
        } else {
            $this->display();
        }
    }


    public function login_post()
    {
        if (IS_POST) {
            $where["user_name"] = I("user_name");
            $where["user_pass"] = creat_pwd_string(I("user_pass"));
            $uinfo              = $this->admin_mod->get_user_info($where);
            if ($uinfo) {
                /**
                 * 将开始文件index中定义的作为session的key值避免一个域名多个站点session污染
                 */
                $_SESSION[SESSION_KEY] = $uinfo;

                $this->success("登录成功!", U("Admin/Index/index"));
            } else {
                $this->error("账号密码错误!");
            }

        }

    }

    public function loginout()
    {
//        session_unset();
//        session_destroy();
        unset($_SESSION[SESSION_KEY]);
        redirect(U("Admin/Login/login"));
    }
}
