<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    	<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.1&key=您申请的key值&plugin=AMap.Geocoder"></script>
    	<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
		<link rel="stylesheet" type="text/css" href="/home/css/contactus.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/head.css"/>
		<link rel="stylesheet" type="text/css" href="/home/css/foot.css"/>
		<link rel="stylesheet" href="/home/css/swiper.min.css">
		<title>联系我们</title>
	</head>
	<body>
	<!--头部导航栏开始-->
	@include('home.public.head')
	<script type="text/javascript">
        $('header>.nav>ul>li').eq(6).addClass('cur').siblings('li').removeClass('cur');
	</script>
	<!--头部导航栏结束-->
	<!--中部轮播图区域-->
	@include('home.public.lunbotu')
	<!--中部轮播图区域结束-->
		<div id="contactus">
			<div class="address">
				<div class="map" id="map"></div>
				<div id="tip">
		        <span id="result"></span>
		    </div>
		    <script>
		        var map = new AMap.Map('map', {
		            resizeEnable: true,
		            zoom:11,
		            center: [113.561189,22.226436]
		        });
		        lnglatXY = [113.561189,22.226436];
		        function regeocoder() {
		            var geocoder = new AMap.Geocoder({
		                radius: 1000,
		                extensions: "all"
		            });
		            geocoder.getAddress(lnglatXY, function(status, result) {
		                if (status === 'complete' && result.info === 'OK') {
		                    geocoder_CallBack(result);
		                }
		            });
		            var marker = new AMap.Marker({
		                map: map,
		                position: lnglatXY
		            });
		            map.setFitView();
		            marker.setLabel({
		                offset: new AMap.Pixel(-50, -25),
		                content: "中资元度文化有限公司"
		            });
		        }
		        function geocoder_CallBack(data) {
		            var address = data.regeocode.formattedAddress;
		            document.getElementById("result").innerHTML = address;
		        }
		        regeocoder()
		    </script>
		    <style>
		        .amap-marker-label{
		            color: red;
		        }
		    </style>
				<div class="description">
					<p class="title">中资元度：</p>
					<p class="content">珠海市横琴新区宝华路6号105室-38035</p>
					<p class="detail">
						<span>总机：</span><br />
						<span>0756-8889137</span>
					</p>
					<p class="detail">
						<span>电话：</span><br />
						<span>0756-8889137</span>
					</p>
					<p class="detail">
						<span>邮箱：</span><br />
						<span>zzyd@zhzzjt.com </span>
					</p>
					<img src="/home/images/yuanduaddress.png"/>
					<p class="img">扫码查看电子地图</p>
				</div>
			</div>
			
			<div class="location">
				<div class="left"></div>
				<div class="right">
					<div class="detail">
						<p class="title">【附近公交站线路】</p>
						<p class="des">体育东站：</p>
						<p class="det">207路 207路 207路 207路</p>
						<p class="des">体育东站：</p>
						<p class="det">207路 207路 207路 207路</p>
					</div>
					<div class="detail">
						<p class="title">【驾车导航】</p>
						<p class="det">**大厦</p>
					</div>
				</div>
			</div>
		</div>
	{{--公共底部开始--}}
	@include('home.public.foot')
	<!--公共底部结束-->
	</body>
</html>
