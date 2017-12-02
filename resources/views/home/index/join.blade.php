<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/home/css/joinus.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
		<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>加入我们</title>
	</head>
	<body>
	<!--头部导航栏开始-->
	@include('home.public.head')
	<script type="text/javascript">
        $('header>.nav>ul>li').eq(5).addClass('cur').siblings('li').removeClass('cur');
	</script>
	<!--头部导航栏结束-->
	<!--中部轮播图区域-->
	@include('home.public.lunbotu')
	<!--中部轮播图区域结束-->
		<div id="joinus">
			<div class="left">
				<p class="title">员工风采</p>
				<ul>
					<li style="background: url(/home/images/joinus_01_260.284.jpg) no-repeat center 0; ">
						<p class="content">广州白云山之旅</p>
					</li>
					<li style="background: url(/home/images/joinus_02.jpg) no-repeat center 0; ">
						<p class="content">员工座右铭：快乐工作，快乐生活</p>
					</li>
					<li style="background: url(/home/images/joinus_03.jpg) no-repeat center 0; ">
						<p class="content">广州白云山之旅</p>
					</li>
					<li style="background: url(/home/images/joinus_03.jpg) no-repeat center 0; ">
						<p class="content">广州白云山之旅</p>
					</li>
				</ul>
			</div>
			<div class="right">
				<p class="title">人才招聘</p>
				<ul>
					<li>
						<img src="/home/images/zptou.jpg"/>
						<a href="">
							<p>客服专员</p>
							<span>[2017-11-17]</span>
						</a>
					</li>
					<li>
						<img src="/home/images/zptou.jpg"/>
						<a href="">
							<p>客服专员</p>
							<span>[2017-11-17]</span>
						</a>
					</li>
					<li>
						<img src="/home/images/zptou.jpg"/>
						<a href="">
							<p>客服专员</p>
							<span>[2017-11-17]</span>
						</a>
					</li>
					<li>
						<img src="/home/images/zptou.jpg"/>
						<a href="">
							<p>客服专员</p>
							<span>[2017-11-17]</span>
						</a>
					</li>

					<a href="" class="more">了解更多</a>
				</ul>
			</div>
		</div>
	{{--公共底部开始--}}
	@include('home.public.foot')
	<!--公共底部结束-->
	</body>
</html>
