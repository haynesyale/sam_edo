@extends('admin.public.father')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">修改公司信息</h3>
        </div>
        <div class="panel-body">
            <form action="" method="post" name="com" class="form-horizontal" role="form" onsubmit="post(event)">
                <script>
                    function post(event) {
                        event.preventDefault();
                        require(['hdjs'], function (hdjs) {
                            hdjs.confirm('确定修改吗?', function () {
                                document.com.submit();
                            })
                        })
                    }
                </script>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">公司地址:</label>
                    <div class="col-sm-10">
                        <input type="address" name="address" id="inputID" class="form-control" value="{{$data['address']}}" title="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">tel:</label>
                    <div class="col-sm-10">
                        <input type="text" name="tel" id="inputID" class="form-control" value="{{$data['tel']}}" title="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">微信链接:</label>
                    <div class="col-sm-10">
                        <input type="text" name="link" id="inputID" class="form-control" value="{{$data['link']}}" title="">
                    </div>
                </div>
                {{--微信二维码图--}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">微信二维码图:</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="wechat" readonly="" value="{{$data['wechat']}}">
                    </div>
                    <div class="col-sm-2">
                        <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8" style="margin-left: 182px">
                        <div class="input-group" style="margin-top:5px;">
                            <img src="{{$data['wechat']}}" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片"
                                onclick="removeImg(this)">×</em>
                        </div>
                    </div>
                </div>
                <script>
                    require(['hdjs']);
                    //上传图片
                    function upImage() {
                        require(['hdjs'], function (hdjs) {
                            options = {
                                multiple: false,//是否允许多图上传
                                //data是向后台服务器提交的POST数据
                                data: {name: '后盾人', year: 2099},
                            };
                            hdjs.image(function (images) {
                                //上传成功的图片，数组类型
                                $("[name='wechat']").val(images[0]);
                                $(".img-thumbnail").eq(0).attr('src', images[0]);
                            }, options)
                        });
                    }
                    //移除图片
                    function removeImg(obj) {
                        $(obj).prev('img').attr('src','/node_modules/hdjs/dist/static/image/nopic.jpg');
                        $("[name='wechat']").val('');
                    }
                </script>
                {{--微信二维码图结束--}}
                {{--公司logo图--}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">公司logo图:</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="logo" readonly="" value="{{$data['logo']}}">
                    </div>
                    <div class="col-sm-2">
                        <button onclick="upImage2(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8" style="margin-left: 182px">
                        <div class="input-group" style="margin-top:5px;">
                            <img src="{{$data['logo']}}" class="img-responsive img-thumbnail" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片"
                                onclick="removeImg2(this)">×</em>
                        </div>
                    </div>
                </div>
                <script>
                    require(['hdjs']);
                    //上传图片
                    function upImage2() {
                        require(['hdjs'], function (hdjs) {
                            options = {
                                multiple: false,//是否允许多图上传
                                //data是向后台服务器提交的POST数据
                                data: {name: '后盾人', year: 2099},
                            };
                            hdjs.image(function (images) {
                                //上传成功的图片，数组类型
                                $("[name='logo']").val(images[0]);
                                $(".img-thumbnail").eq(1).attr('src', images[0]);
                            }, options)
                        });
                    }
                    //移除图片
                    function removeImg2(obj) {
                        $(obj).prev('img').attr('src','/node_modules/hdjs/dist/static/image/nopic.jpg');
                        $("[name='logo']").val('');
                    }
                </script>
                {{--公司logo图结束--}}
                {{--企业文化内容--}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">企业文化内容:</label>
                    <div class="col-sm-10">
                        <textarea id="container" name="content" style="height:1000px;width:100%;">{{$data['content']}}</textarea>
                    </div>
                </div>
                <script>
                    require(['hdjs'], function (hdjs) {
                        var ueditor =  hdjs.ueditor('container', {hash: 2, data: 'hd'}, function (editor) {
                            console.log(3)
                        });
                    })
                    // jquery页面加载完毕执行
                    $(document).ready(function () {
                        $(window).scroll(function(){
                            $("#edui1_iframeholder").height($(window).width()/2);
                        })
                    });
                </script>
                {{--企业文化内容结束--}}
                {{--企业文化图上传--}}
                <style>
                    #box1 img {
                        width: 100px;
                        float: left;
                        margin-right: 10px;
                        border: solid 1px #999;
                        padding: 10px;
                        height: 100px;
                    }
                </style>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="" class="col-sm-2 control-label">企业文化图</br>(双击图片可删除):</label>
                        <div class="col-sm-8" style="margin-left: 20px">
                            <input type="text" name="culture" id="mpic" class="form-control" value="{{$data['culture']}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button onclick="upImage1(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="form-group col-sm-10">
                    <div id="box1">
                        @foreach(explode('|',$data['culture']) as $v)
                            @if($v!='')
                                <img src="{{$v}}" alt="">
                            @endif
                        @endforeach
                    </div>
                </div>
                <script>
                    //上传图片
                    var str1 =$('#mpic').val();
                    function upImage1(obj) {
                        require(['hdjs'], function (hdjs) {
                            hdjs.image(function (images) {
                                $(images).each(function (k, v) {
                                    str1+=v+'|';
                                    $("<img src='" + v + "'/>").appendTo('#box1');
                                })
                                $('#mpic').val(str1);
                            }, {
                                //上传多图
                                multiple: true,
                            })
                        });
                    }
                    $('#box1').on('dblclick','img',function(){
                        $(this).remove();
                        str1 = str1.replace($(this).attr('src')+'|','');
                        $('#mpic').val(str1);
                    })
                </script>
                {{--中图上传结束--}}

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">提交修改</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
