<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/weixin/Public/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/weixin/Public/metismenu-1.1.3/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/weixin/Public/css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/weixin/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/weixin/Public/js/artDialog/skins/default.css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>




<body>

<div id="wrapper">

    <!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-tasks">
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Task 1</strong>
                                <span class="pull-right text-muted">40% Complete</span>
                            </p>

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Task 2</strong>
                                <span class="pull-right text-muted">20% Complete</span>
                            </p>

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Task 3</strong>
                                <span class="pull-right text-muted">60% Complete</span>
                            </p>

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <p>
                                <strong>Task 4</strong>
                                <span class="pull-right text-muted">80% Complete</span>
                            </p>

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Tasks</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <!-- menu-->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <?php if(is_array($lists1)): foreach($lists1 as $key=>$menu): ?><li <?php if($menu['active'] == 1): ?>class='active'<?php endif; ?>>
                    <a href="<?php echo U($menu['url']);?>">
                        <i class="fa fa-<?php echo ($menu['icon']); ?> fa-fw"></i> <?php echo ($menu['name']); ?>

                        <?php $lists2_tpl = $lists2[$menu['id']]; ?>

                        <?php if(!empty($lists2_tpl)): ?><span class="fa arrow"></span><?php endif; ?>
                    </a>

                    <?php if($menu['active'] == 1): ?><ul class="nav nav-second-level collapse in" aria-expanded="true">
                            <?php else: ?>
                            <ul class="nav nav-second-level"><?php endif; ?>

                    <?php if(is_array($lists2_tpl)): foreach($lists2_tpl as $key=>$menu2): ?><li>
                            <a href="<?php echo U($menu2['url']);?>" <?php if($menu2['active'] == 1): ?>class='active'<?php endif; ?>><i class="fa fa-<?php echo ($menu2['icon']); ?> fa-fw"></i> <?php echo ($menu2['name']); ?></a>
                        </li><?php endforeach; endif; ?>
        </ul>

        </li><?php endforeach; endif; ?>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
<!-- /menu-->
</nav>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><?php echo ($page_name); ?></h4>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo ($page_name); ?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="<?php echo U('Admin/Admin/add_post');?>" method="post"
                                      class="js-ajax-form">
                                    <div class="form-group">
                                        <label>管理员账号</label>
                                        <input class="form-control" name="user_name">

                                        <p class="help-block">请输入管理员账号.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>管理员昵称</label>
                                        <input class="form-control" name="user_nickname">

                                        <p class="help-block">请输入管理员昵称.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>密码</label>
                                        <input class="form-control" name="user_pass">

                                        <p class="help-block">请输入密码.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>确认密码</label>
                                        <input class="form-control" name="com_user_pass">

                                        <p class="help-block">请输入确认密码.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>所属组</label>
                                        <select class="form-control" name="role_id">
                                            <?php if(is_array($role_list)): foreach($role_list as $key=>$vo): ?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['role_name']); ?></option><?php endforeach; endif; ?>

                                            <p class="help-block">请选择所属组.</p>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary js-ajax-submit">确认</button>
                                    <button type="reset" class="btn btn-default">重置</button>
                                    <div class="js-ajax-info" style="margin-top: 10px;"></div>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<!-- /#wrapper -->
</body>
</html>
<!-- Placed at the end of the document so the pages load faster -->

<script src="/weixin/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">//全局变量
var GV = {
    DIMAUB: "/weixin",
    JS_ROOT: "/Public/js/",
    TOKEN: ""
};
</script>


<script src="/weixin/Public/js/wind0.99.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/weixin/Public/bootstrap-3.3.6/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/weixin/Public/metismenu-1.1.3/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/weixin/Public/js/admin.js"></script>

<script src="/weixin/Public/js/common.js"></script>