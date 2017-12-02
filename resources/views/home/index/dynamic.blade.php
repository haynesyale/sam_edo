<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="/home/css/dynamic.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
		<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>元度动态</title>
	</head>
	<body>
	<!--头部导航栏开始-->
	@include('home.public.head')
	<script type="text/javascript">
        $('header>.nav>ul>li').eq(4).addClass('cur').siblings('li').removeClass('cur');
	</script>
	<!--头部导航栏结束-->
	<!--中部轮播图区域-->
	@include('home.public.lunbotu')
	<!--中部轮播图区域结束-->
		<!--公司动态开始-->
		<div id="dynamic">
			<h1>公司动态</h1>
			<span></span>
			<div class="title">
				<a href="javascript:void(0)" class="cur">公司活动</a>
				<a href="javascript:void(0)">新闻动态</a>
				<a href="javascript:void(0)">案例新闻</a>
				<script>
					$('#dynamic>.title>a').click(function(){
					    $(this).addClass('cur').siblings('a').removeClass('cur');
					})
				</script>
			</div>
			<ul>
				<li>
					<a href="">
						<img src="/home/images/dynamic_01.jpg"/>
						<p>清凉一夏、热力开唱</p>
						<span></span>
					</a>
					<div>
						<img src="/home/images/clock.png"/>
						<span>2017-08-14</span>
						<img src="/home/images/liulan.png"/>
						<span>1213</span>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/home/images/dynamic_01.jpg"/>
						<p>清凉一夏、热力开唱</p>
						<span></span>
					</a>
					<div>
						<img src="/home/images/clock.png"/>
						<span>2017-08-14</span>
						<img src="/home/images/liulan.png"/>
						<span>1213</span>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/home/images/dynamic_01.jpg"/>
						<p>清凉一夏、热力开唱</p>
						<span></span>
					</a>
					<div>
						<img src="/home/images/clock.png"/>
						<span>2017-08-14</span>
						<img src="/home/images/liulan.png"/>
						<span>1213</span>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/home/images/dynamic_01.jpg"/>
						<p>清凉一夏、热力开唱</p>
						<span></span>
					</a>
					<div>
						<img src="/home/images/clock.png"/>
						<span>2017-08-14</span>
						<img src="/home/images/liulan.png"/>
						<span>1213</span>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/home/images/dynamic_01.jpg"/>
						<p>清凉一夏、热力开唱</p>
						<span></span>
					</a>
					<div>
						<img src="/home/images/clock.png"/>
						<span>2017-08-14</span>
						<img src="/home/images/liulan.png"/>
						<span>1213</span>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/home/images/dynamic_01.jpg"/>
						<p>清凉一夏、热力开唱</p>
						<span></span>
					</a>
					<div>
						<img src="/home/images/clock.png"/>
						<span>2017-08-14</span>
						<img src="/home/images/liulan.png"/>
						<span>1213</span>
					</div>
				</li>
			</ul>
			<a href="" class="more">MORE</a>
		</div>
		<!--公司动态结束-->

	{{--公共底部开始--}}
	@include('home.public.foot')
	<!--公共底部结束-->
	</body>
</html>
