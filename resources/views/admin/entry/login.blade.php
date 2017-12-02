<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>元度后台登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/node_modules/hdjs/dist/hdjs.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/node_modules/hdjs/dist/static/requirejs/require.js?version=v2.0.91"></script>
    <script src="/node_modules/hdjs/dist/static/requirejs/config.js?version=v2.0.91"></script>
    <link href="/css/hdcms.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body class="hdcms-login">
<div class="container logo">
    <div style="background: url('/images/logo.png') no-repeat; background-size: contain;height: 60px;"></div>
</div>
<div class="container well">
    <div class="row ">
        <div class="col-md-6">
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group ">
                    <label>帐号</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-w fa-user"></i></div>
                        <input type="text" name="username" class="form-control input-lg" placeholder="请输入帐号" value="">
                    </div>
                </div>
                <div class="form-group ">
                    <label>密码</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-w fa-key"></i></div>
                        <input type="password" name="password" class="form-control input-lg" placeholder="请输入密码"
                               value="">
                    </div>
                </div>
                <button class="btn btn-primary btn-lg">登录</button>
                @include('flash::message')

            </form>
        </div>
        <div class="col-md-6">
            <div style="background: url('/images/case01.jpg');background-size:cover ;height:250px;"></div>
        </div>
    </div>
    <div class="copyright">

    </div>
</div>


</body>
</html>