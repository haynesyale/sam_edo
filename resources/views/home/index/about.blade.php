<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="/home/css/aboutus.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
		<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>关于元度</title>
	</head>
	<body>
	<!--头部导航栏开始-->
	@include('home.public.head')
	<script type="text/javascript">
        $('header>.nav>ul>li').eq(3).addClass('cur').siblings('li').removeClass('cur');
	</script>
	<!--头部导航栏结束-->
	<!--中部轮播图区域-->
	@include('home.public.lunbotu')
	<!--中部轮播图区域结束-->
		<!--内容区域开始-->
		<div id="main">
			<div class="description">
				<p class="title">有品质的设计，来自专业的设计师</p>
				<p class="line"></p>
				<p class="content">珠海中资元度文化发展有限公司（简称中资元度）致力于品牌营销层面的公关活动策划及资源整合服务，秉承广告人原则，有效利用策略、创意、渠道资源、执行等多方面优势实力，为客户提供深具影响力的品牌营销活动。</p>
				<p class="content">元，从一从兀，意味首、始；度，计算长短的器具或单位，在哲学上指一定事物保持自己质的数量界限，事物所达到的境界。古人云，一元之始成，一切以元为始，可诞生万物，无穷无尽也。元度二字相辅相成，元为首，万物之始，无穷无尽；度为尺，万物皆可度量，有依有据。元度二字意味着所有事物的开端，记录着事物发展的历程，达到一个没有尽头，没有限度的境界。</p>
				<p class="content">在这创意无限的境界下，珠海中资元度文化发展有限公司成立了，我们立志成为珠海最顶尖的文化公司龙首，用最直接、最有效的方式传达品牌特有的感染力，并用最专业的服务让客户实现目标价值，驱动客户品牌快速发展。</p>
			</div>
			<div class="culture">
				<p class="title">元度文化，有品质的设计服务平台</p>
				<ul>
					<li>
						<p><img src="/home/images/about01.jpg"/></p>
						<p>高质量</p>
						<p>美思选择设计师的三好标准：设计好、人品好、态度好。有三好，质量自然好。</p>
					</li>
					<li>
						<p><img src="/home/images/about02.jpg"/></p>
						<p>高质量</p>
						<p>美思选择设计师的三好标准：设计好、人品好、态度好。有三好，质量自然好。</p>
					</li>
					<li>
						<p><img src="/home/images/about01.jpg"/></p>
						<p>高质量</p>
						<p>美思选择设计师的三好标准：设计好、人品好、态度好。有三好，质量自然好。</p>
					</li>
					<li>
						<p><img src="/home/images/about02.jpg"/></p>
						<p>高质量</p>
						<p>美思选择设计师的三好标准：设计好、人品好、态度好。有三好，质量自然好。</p>
					</li>
				</ul>
			</div>
		</div>
		<!--内容区域结束-->
	{{--公共底部开始--}}
	@include('home.public.foot')
	<!--公共底部结束-->
	</body>
</html>
