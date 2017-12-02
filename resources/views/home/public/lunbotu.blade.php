<div id="flash">
    <!-- Swiper -->
    <div class="swiper-container" style="width: 100%;height: 500px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(/home/images/index_banner_01.jpg) no-repeat center center; "></div>
            <div class="swiper-slide" style="background: url(/home/images/index_banner_02.jpg) no-repeat center center; "></div>
            <div class="swiper-slide" style="background: url(/home/images/flash.jpg) no-repeat center center; "></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- Swiper JS -->
    <script src="/home/js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            loop:true,
            autoplay: 2000,
            effect: 'slide',
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
    <style type="text/css">
        #flash{
            height: 500px;
            width: 100%;
            margin: 0 auto;
            max-width: 1920px;
            min-width: 1100px;
        }
        .swiper-pagination-bullet.swiper-pagination-bullet-active{
            background: #FF7F02;
            width: 50px;
        }
        .swiper-pagination-bullet{
            width: 15px;
            height: 15px;
            border-radius: 15px;
            background: white;
            opacity:1;
        }
        .swiper-button-next,.swiper-button-prev{
            width: 62px;
            height: 62px;
            display: none;
        }
        .swiper-button-prev{
            background: url(/home/images/left.png) no-repeat center center;
            margin-top: -31px;
        }
        .swiper-button-next{
            background: url(/home/images/right.png) no-repeat center center;
            margin-top: -31px;
        }
        .swiper-container:hover .swiper-button-prev{
            display: block;
        }
        .swiper-container:hover .swiper-button-next{
            display: block;
        }
    </style>
</div>