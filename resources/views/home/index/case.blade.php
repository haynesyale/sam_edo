<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/case.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
    	<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>元度案例</title>
	</head>
	<body>
	<!--头部导航栏开始-->
	@include('home.public.head')
	<!--头部导航栏结束-->
	<!--中部轮播图区域-->
	@include('home.public.lunbotu')
	<!--中部轮播图区域结束-->
		<!--案列开始-->
		<div id="case">
			<ul class="title">
				<li class="cur"><a href="javascript:void(0)">全部</a></li>
				<li><a href="javascript:void(0)">企业网站建设</a></li>
				<li><a href="javascript:void(0)">平面VI设计</a></li>
				<li><a href="javascript:void(0)">移动端开发</a></li>
				<li><a href="javascript:void(0)">商城与平台开发</a></li>
			</ul>
			<script type="text/javascript">
                $('header>.nav>ul>li').eq(1).addClass('cur').siblings('li').removeClass('cur');
				$('#case .title li').click(function(){
				    $(this).addClass('cur').siblings('li').removeClass('cur');
				})
			</script>
			<ul class="content">
				<li style="background: url(/home/images/case01.jpg) no-repeat center center;background-size: 100% 100%;">
					<a href="javascript:void(0)"></a>
					<div class="bottom">
						<span>元 度 L O G O 设 计</span>
						<div>
							<a href="javascript:void(0)" style="background: url(/home/images/hongxin.png) no-repeat center center;"></a>
							<span>1285</span>
							<a href="javascript:void(0)" style="background: url(/home/images/kan.png) no-repeat center center;"></a>
							<span>3563</span>
						</div>
					</div>
				</li>
				<li style="background: url(/home/images/case01.jpg) no-repeat center center;background-size: 100% 100%;">
					<a href="javascript:void(0)"></a>
					<div class="bottom">
						<span>元 度 L O G O 设 计</span>
						<div>
							<a href="javascript:void(0)" style="background: url(/home/images/baixin.png) no-repeat center center;"></a>
							<span>1285</span>
							<a href="javascript:void(0)" style="background: url(/home/images/kan.png) no-repeat center center;"></a>
							<span>3563</span>
						</div>
					</div>
				</li>
				<li style="background: url(/home/images/case01.jpg) no-repeat center center;background-size: 100% 100%;">
					<a href="javascript:void(0)"></a>
					<div class="bottom">
						<span>元 度 L O G O 设 计</span>
						<div>
							<a href="javascript:void(0)" style="background: url(/home/images/baixin.png) no-repeat center center;"></a>
							<span>1285</span>
							<a href="javascript:void(0)" style="background: url(/home/images/kan.png) no-repeat center center;"></a>
							<span>3563</span>
						</div>
					</div>
				</li>
				<li style="background: url(/home/images/case01.jpg) no-repeat center center;background-size: 100% 100%;">
					<a href="javascript:void(0)"></a>
					<div class="bottom">
						<span>元 度 L O G O 设 计</span>
						<div>
							<a href="" style="background: url(/home/images/baixin.png) no-repeat center center;"></a>
							<span>1285</span>
							<a href="" style="background: url(/home/images/kan.png) no-repeat center center;"></a>
							<span>3563</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!--案例结束-->
	{{--公共底部开始--}}
	@include('home.public.foot')
	<!--公共底部结束-->
	</body>
</html>
