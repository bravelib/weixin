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


    public function login_post()
    {
        if ($this->admin_mod->create()) {

        } else {
            $this->error($this->admin_mod->getError());
        }
    }
}
