<!--微信链接开始-->
<div id="link">
    <p class="title">- 最近发生 -</p>
    <p class="title_en">RECENT EVENTS</p>
    <p class="description">
        <a href="javascript:void(0)">新闻动态！ 网站建设中如何选取一个好域名？ 网站建设五个重要技巧的分享 网站建设之搜索引擎营销的重点有这些！ 怎样将网站建设和推广</a>
    </p>
</div>
<!--微信链接结束-->
<!--公共底部开始-->
<footer>
    <div class="main">
        <a href="javascript:void(0)"></a>
        <div class="contain">
            <a href="">关于我们</a>
            <a href="">服务条款</a>
            <a href="">隐私政策</a>
            <a href="">版权说明</a>
            <a href="">商务合作</a>
            <a href="">联系我们</a>
            <a href="">模板特辑</a>
            <a href="">网站地图</a>
        </div>
        <div class="wechat">
            <img src="/home/images/foot_wechat.png"/>
            <span>关注中资元度微信公众号<br />获取更多信息</span>
        </div>
    </div>
</footer>
{{--底部浮动--}}
<div id="float">
    <div class="main">
        <img src="/home/images/point.png" alt="">
        <div class="title">
            <span>元品牌文化</span><br>
            <span>度品质生活</span>
        </div>
        <form action="/info" method="post">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="请输入您的称呼">
            <input type="text" name="phone" placeholder="请输入您的手机号码">
            <input type="text" name="company" placeholder="请输入您的公司名称">
            <button type="submit">提交</button>
        </form>
        <div class="logo">
            <img src="/home/images/float_logo.jpg" alt="">
            <p>关注微信</p>
            <p>获取更多</p>
            <p>建站资讯</p>
        </div>
    </div>
</div>
{{--底部浮动结束--}}
@if(session('jump'))
{{--提交弹框--}}
<div id="jump">
    <div class="content">
        <p class="title">提交成功</p>
        <p class="des">感谢您的信任，稍后我们的专业客服将与您联系。</p>
        <p class="des">请注意接听来自<span>珠海0756</span>的电话或者手机，谢谢</p>
        <p class="img">
            <img src="/home/images/foot_wechat.png" alt="">
            <span>扫码关注更精彩</span>
        </p>
        <a href="javascript:void(0)" onclick="closeall(this)">确认并进入首页</a>
    </div>
</div>
<style>
    #jump{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(0,0,0,0.3);
        z-index: 1000;
    }
    #jump>.content{
        box-shadow: 0 5px 15px rgba(0,0,0,.5);
        width: 500px;
        height: 400px;
        position: absolute;
        background: white;
        left: 50%;
        margin-left: -250px;
        top:-400px;
    }
    #jump>.content>.title{
        height: 88px;
        background: #F04642;
        text-align: center;
        font-size: 36px;
        line-height: 88px;
        color: white;
        font-weight: 600;
        margin-bottom: 10px;
    }
    #jump>.content>.des{
        text-align: center;
        color: #717274;
        font-size: 14px;
    }
    #jump>.content>.des>span{
        color: #FE0007;
        font-weight: 600;
        font-size: 14px;
    }
    #jump>.content>.img{
        text-align: center;
        padding: 12px 0;
    }
    #jump>.content>.img>img{
        width: 110px;
        height: 110px;
    }
    #jump>.content>.img>span{
        display: block;
        text-align: center;
        font-size: 13px;
        color: #65625A;
    }
    #jump>.content>a{
        display: block;
        width: 170px;
        height: 50px;
        margin: 0 auto;
        background: #EB2828;
        font-size: 16px;
        line-height: 50px;
        text-align: center;
        font-weight: 600;
        color: white;
        border-radius: 3px;
    }
</style>
<script>
    // jquery页面加载完毕执行
     $("#jump").height($(window).height());
     $(window).resize(function(){
         $("#jump").height($(window).height());
     })
    $('#jump>.content').animate({'top':100+'px'},400,'linear');
    function closeall(obj){
        $(obj).parents('#jump').hide();
        location.href='/';
    }
</script>
{{--提交弹框结束--}}
@endif