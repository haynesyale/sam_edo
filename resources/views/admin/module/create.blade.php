@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/module">全部</a></li>
            <li class="active"><a href="/admin/module/create">添加模块</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/module" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">模块名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="mname" class="form-control" value="">
                    </div>
                </div>
                {{--banner图--}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">图片地址:</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="preview" readonly="" value="">
                    </div>
                    <div class="col-sm-2">
                        <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8" style="margin-left: 182px">
                        <div class="input-group" style="margin-top:5px;">
                            <img src="/node_modules/hdjs/dist/static/image/nopic.jpg" class="img-responsive img-thumbnail" width="150">
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
                                $("[name='preview']").val(images[0]);
                                $(".img-thumbnail").attr('src', images[0]);
                            }, options)
                        });
                    }
                    //移除图片
                    function removeImg(obj) {
                        $(obj).prev('img').attr('src','/node_modules/hdjs/dist/static/image/nopic.jpg');
                        $(obj).parent().prev().find('input').val('');
                    }
                </script>
                {{--banner图结束--}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">模块描述:</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">排序:</label>
                    <div class="col-sm-10">
                        <input type="number"  name="orderby" placeholder="必须是整数" class="form-control"  value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">保存数据</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection