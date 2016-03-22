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
        if ($_SESSION[SESSION_KEY]["uid"]) {
            $this->redirect(U("User/Index/index"));
        } else {
            $this->redirect("Home/Index/index");
        }
    }
}