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
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><?php echo ($page_name); ?></h4>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo ($role_name); ?> 组成员
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>账号</th>
                                    <th>昵称</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($lists_exists)): foreach($lists_exists as $key=>$vo): ?><tr class="">
                                        <td><?php echo ($vo["user_name"]); ?></td>
                                        <td><?php echo ($vo["user_nickname"]); ?></td>
                                        <td class="center">
                                            <a href="<?php echo U('Admin/Role/delete_role_user',['uid'=>$vo['id'],'role_id'=>$_GET['id']]);?>"
                                               class="btn btn-outline btn-warning btn-xs js-ajax-delete">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        非<?php echo ($role_name); ?> 组成员
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>账号</th>
                                    <th>昵称</th>
                                    <th>所属组</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($lists_not_exists)): foreach($lists_not_exists as $key=>$vo): ?><tr class="">
                                        <td><?php echo ($vo["user_name"]); ?></td>
                                        <td><?php echo ($vo["user_nickname"]); ?></td>
                                        <td><?php echo ($vo["user_nickname"]); ?></td>
                                        <td class="center">
                                            <a href="<?php echo U('Admin/Role/add_role_user',['uid'=>$vo['id'],'role_id'=>$_GET['id']]);?>"
                                               class="btn btn-outline btn-success btn-xs js-ajax-dialog-btn">转入该组</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>

                                </tbody>
                            </table>
                        </div>
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

</div>
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