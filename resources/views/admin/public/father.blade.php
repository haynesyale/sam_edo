<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>元度后台首页</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">--}}
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/node_modules/hdjs/dist/hdjs.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script>
        window.hdjs={};
        //组件目录必须绝对路径(在网站根目录时不用设置)
        window.hdjs.base = '/node_modules/hdjs';
        //上传文件后台地址
        window.hdjs.uploader = '/component/upload';
        //获取文件列表的后台地址,留下问号
        window.hdjs.filesLists = '/component/filelist?';
    </script>
    <script src="/node_modules/hdjs/static/requirejs/require.js"></script>
    <script src="/node_modules/hdjs/static/requirejs/config.js"></script>

    <link href="/css/hdcms.css" rel="stylesheet">
    <script>
        require(['hdjs'], function () {
            //为异步请求设置CSRF令牌
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>

<body class="site">
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="top_menu">
                        <a href="/admin/index">
                            <i class="'fa-w fa fa-comments-o"></i> 后台首页 </a>
                    </li>

                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            {{Auth::guard('admin_accounts')->user()->username}}
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="/admin/logout" class="dropdown-toggle">
                            <i class="fa fa-w fa-sign-out"></i>
                            退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            {{--<div class="search-menu">--}}
                {{--<input class="form-control input-lg" type="text" placeholder="输入菜单名称可快速查找"--}}
                       {{--onkeyup="search(this)">--}}
            {{--</div>--}}
            <!--扩展模块动作 start-->
            <div class="panel panel-default">
                <!--系统菜单-->
                <div class="panel-heading">
                    <h4 class="panel-title">个人中心</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:void(0)" onclick="show(this)" num="0" status="0">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus">
                    <li class="list-group-item" id="35">
                        <a href="/admin/password">修改密码 </a>
                    </li>
                </ul>
                <div class="panel-heading">
                    <h4 class="panel-title">内容管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="javascript:void(0)" onclick="show(this)" num="1" status="0">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus" >
                    <li class="list-group-item" id="39">
                        <a href="/admin/aboutus">公司详情</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/module">模块(Banner)</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/category">服务分类</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/trade">行业分类</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/case">案例</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/tag">服务标签</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/dynamic">元度动态分类</a>
                    </li>
                    <li class="list-group-item" id="39">
                        <a href="/admin/article">动态文章</a>
                    </li>
                </ul>
                <!----------返回模块列表 start------------>
                <!--模块列表-->
                <!--模块列表 end-->
            </div>
                <script>
                    var url = '{!! $_SERVER['REQUEST_URI'] !!}';
                    var arr = url.split('/');
                    for(var i =0;i<$('.list-group-item').find('a').length;i++){
                        var obj =$('.list-group-item').find('a').eq(i);
                        if(obj.attr('href').split('/')[2]==arr[2]){
                            $('.list-group-item').eq(i).addClass('active');
                            //隐藏起他的ul
                            $('.list-group-item').eq(i).parent('ul').siblings('ul').hide();
                            var index = $('.list-group-item').eq(i).parent('ul').index();
                            index==1 && $('.panel.panel-default').find('div a').eq(index-1).attr('status',1);
                            index==3 && $('.panel.panel-default').find('div a').eq(index-2).attr('status',1);
                        }
                    }
                    //下拉菜单
                    if(arr[2]=='index'){
                        $('.panel.panel-default').find('ul').hide();
                    }

                    function show(obj) {
                        if($(obj).attr('status')==0){
                            $(obj).parent('div').siblings('ul').eq($(obj).attr('num')).slideDown(400);
                            $(obj).attr('status',1);
                        }else{
                            $(obj).parent('div').siblings('ul').eq($(obj).attr('num')).slideUp(400);
                            $(obj).attr('status',0);
                        }
                    }
                </script>
        </div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
            {{--在这里写一个占位符,子模板继承父模板后,用相应站位符替换--}}
            {{--yield里面传递的是占位符的名字--}}
            @yield('content')
        </div>
    </div>
</div>

@include('admin.public.error')
@include('flash::message')

</body>
</html>
<style>
    .pagination {
        margin: 0px;
        float: right;
    }
</style>