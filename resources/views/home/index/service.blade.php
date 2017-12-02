<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="/home/css/service.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
    	<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>元度服务</title>
	</head>
	<body>
	<!--头部导航栏开始-->
	@include('home.public.head')
	<script type="text/javascript">
        $('header>.nav>ul>li').eq(2).addClass('cur').siblings('li').removeClass('cur');
	</script>
	<!--头部导航栏结束-->
	<!--中部轮播图区域-->
	@include('home.public.lunbotu')
	<!--中部轮播图区域结束-->
		<!--服务 module 1 开始-->
		<div id="module_1">
			<img src="/home/images/service_01.1920.969.jpg"/>
		</div>
		<!--服务 module 1 结束-->
		
		<!--服务 module 2 开始-->
		<div id="module_2">
			<img src="/home/images/service_02.1920.800.jpg"/>
		</div>
		<!--服务 module 2 结束-->
		
		<!--服务 module 3 开始-->
		<div id="module_3">
			<img src="/home/images/service_03.1920.990.jpg"/>
		</div>
		<!--服务 module 3 结束-->
	{{--公共底部开始--}}
	@include('home.public.foot')
	<!--公共底部结束-->
	</body>
</html>
