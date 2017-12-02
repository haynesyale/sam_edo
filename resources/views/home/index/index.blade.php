<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="/home/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
    	<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>元度首页</title>
	</head>
	<body>
		<!--头部导航栏开始-->
		@include('home.public.head')
		<!--头部导航栏结束-->
		<!--中部轮播图区域-->
		@include('home.public.lunbotu')
		<!--中部轮播图区域结束-->
		<!--案例区域开始-->
		<div id="case">
			<div class="module">
				<p class="title">Cases</p>
				<p class="title_cn"><span>经典案例</span></p>
				<p class="description">将商业策划、创意艺术、互联网技术与营销数据分析完美融合，成功率99%</p>
			</div>
			<!-- Swiper -->
			<div class="swiper-container case" style="width: 1100px;height: 410px;margin: 60px auto;">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide" style="background: url(/home/images/case01.jpg) no-repeat center center; "></div>
			        <div class="swiper-slide" style="background: url(/home/images/case02.jpg) no-repeat center center; "></div>
			    	<div class="swiper-slide" style="background: url(/home/images/case03.jpg) no-repeat center center; "></div>
			    </div>
			    <!-- Add Pagination -->
			    <div class="swiper-pagination"></div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>
			</div>
		    <script>
		    	var swiper = new Swiper('.swiper-container.case', {
		        pagination: '.swiper-pagination',
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        paginationClickable: true,
		        slidesPerView: 'auto',
		        loop:true,
//		        autoplay: 2000,
		        effect: 'cube',
		        grabCursor: true,
		        centeredSlides: true,
		        autoplayDisableOnInteraction: false,
		        cube: {
		            shadow: true,
		            slideShadows: true,
		            shadowOffset: 50,
		            shadowScale: 0.94
		        }
		    });
		    </script>	
		    <!-- Swiper -->
			<div class="swiper-container case2" style="width: 1100px;height: 410px;margin: 60px auto;">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide" style="background: url(/home/images/case01.jpg) no-repeat center center; "></div>
			        <div class="swiper-slide" style="background: url(/home/images/case02.jpg) no-repeat center center; "></div>
			    	<div class="swiper-slide" style="background: url(/home/images/case03.jpg) no-repeat center center; "></div>
			    </div>
			    <!-- Add Pagination -->
			    <div class="swiper-pagination"></div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>
			</div>
		    <!-- Swiper JS -->
		    <!--<script src="js/swiper.min.js"></script>-->
			<!-- Initialize Swiper -->
		    <script>
		    	var swiper = new Swiper('.swiper-container.case2', {
		        pagination: '.swiper-pagination',
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        paginationClickable: true,
		        slidesPerView: 'auto',
		        loop:true,
//		        autoplay: 2000,
		        effect: 'cube',
		        grabCursor: true,
		        centeredSlides: true,
		        autoplayDisableOnInteraction: false,
		        cube: {
		            shadow: true,
		            slideShadows: true,
		            shadowOffset: 50,
		            shadowScale: 0.94
		        }
		    });
		    </script>	
		    <!-- Swiper -->
			<div class="swiper-container case3" style="width: 1100px;height: 410px;margin: 60px auto;">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide" style="background: url(/home/images/case01.jpg) no-repeat center center; "></div>
			        <div class="swiper-slide" style="background: url(/home/images/case02.jpg) no-repeat center center; "></div>
			    	<div class="swiper-slide" style="background: url(/home/images/case03.jpg) no-repeat center center; "></div>
			    </div>
			    <!-- Add Pagination -->
			    <div class="swiper-pagination"></div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>
			</div>
		    <script>
		    	var swiper = new Swiper('.swiper-container.case3', {
		        pagination: '.swiper-pagination',
		        nextButton: '.swiper-button-next',
		        prevButton: '.swiper-button-prev',
		        paginationClickable: true,
		        slidesPerView: 'auto',
		        loop:true,
//		        autoplay: 2000,
		        effect: 'coverflow',
		        grabCursor: true,
		        centeredSlides: true,
		        autoplayDisableOnInteraction: false,
		        cube: {
		            shadow: true,
		            slideShadows: true,
		            shadowOffset: 50,
		            shadowScale: 0.94
		        }
		    });
		    </script>	
		</div>
		<!--案例区域结束-->
		<!--服务区域开始-->
		<div id="service">
			<div class="module">
				<p class="title">Service</p>
				<p class="title_cn"><span>服务领域</span></p>
				<p class="description">将商业策划、创意艺术、互联网技术与营销数据分析完美融合，成功率99%</p>
			</div>
			<div class="list">
				<ul class="cur">
					<div class="img">
						<img src="/home/images/ion1_1.png" bk="/home/images/ion1.png" alt="">
					</div>
					<p class="title">高端网站建设</p>
					<p class="title_en">BRAND WEBSITE DESIGN</p>
					<li>全网营销平台策划</li>
					<li>品牌企业网站建设</li>
					<li>电商精品网站设计</li>
					<li>营销型网站</li>
					<li>企业/集团网站建设</li>
					<li>平台网站开发</li>
					<li>多媒体Flash佛年规划</li>
				</ul>
				<ul>
					<div class="img">
						<img src="/home/images/ion2.png" bk="/home/images/ion2_1.png" alt="">
					</div>
					<p class="title">高端网站建设</p>
					<p class="title_en">BRAND WEBSITE DESIGN</p>
					<li>全网营销平台策划</li>
					<li>品牌企业网站建设</li>
					<li>电商精品网站设计</li>
					<li>营销型网站</li>
					<li>企业/集团网站建设</li>
					<li>平台网站开发</li>
					<li>多媒体Flash佛年规划</li>
				</ul>
				<ul>
					<div class="img">
						<img src="/home/images/ion3.png" bk="/home/images/ion3_1.png" alt="">
					</div>
					<p class="title">高端网站建设</p>
					<p class="title_en">BRAND WEBSITE DESIGN</p>
					<li>全网营销平台策划</li>
					<li>品牌企业网站建设</li>
					<li>电商精品网站设计</li>
					<li>营销型网站</li>
					<li>企业/集团网站建设</li>
					<li>平台网站开发</li>
					<li>多媒体Flash佛年规划</li>
				</ul>
				<ul>
					<div class="img">
						<img src="/home/images/ion4.png" bk="/home/images/ion4_1.png" alt="">
					</div>
					<p class="title">高端网站建设</p>
					<p class="title_en">BRAND WEBSITE DESIGN</p>
					<li>全网营销平台策划</li>
					<li>品牌企业网站建设</li>
					<li>电商精品网站设计</li>
					<li>营销型网站</li>
					<li>企业/集团网站建设</li>
					<li>平台网站开发</li>
					<li>多媒体Flash佛年规划</li>
				</ul>
				<script>
					$('#service .list ul').mouseenter(function(){
					    if(!($(this).attr('class')=='cur')){
					        var src2 = $(this).find('img').attr('src');
					        var bk2 = $(this).find('img').attr('bk');
                            $(this).find('img').attr('src',bk2);
                            $(this).find('img').attr('bk',src2);
                            var src = $('#service .list .cur').find('img').attr('src');
                            var bk = $('#service .list .cur').find('img').attr('bk');
                            $('#service .list .cur').find('img').attr('src',bk);
                            $('#service .list .cur').find('img').attr('bk',src);
						}
					    $(this).addClass('cur').siblings('ul').removeClass('cur');
					})

				</script>
			</div>
		</div>
		<!--服务区域结束-->
		{{--公共底部开始--}}
		@include('home.public.foot')
		<!--公共底部结束-->
	</body>
</html>
