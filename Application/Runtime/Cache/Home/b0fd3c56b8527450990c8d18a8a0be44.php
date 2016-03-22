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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>




<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">请登录</h3>
                </div>
                <div class="panel-body">
                    <form role="form" class="js-ajax-form" action="<?php echo U('Admin/Login/login_post');?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="账号" name="user_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="密码" name="user_pass" type="password"
                                       value="">
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block js-ajax-submit">登录</button>
                        </fieldset>
                    </form>


                </div>
            </div>

            <div class="js-ajax-info" style="text-align: center;margin:0;"></div>
        </div>
    </div>
</div>
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