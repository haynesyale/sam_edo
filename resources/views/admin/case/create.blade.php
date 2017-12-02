@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/case">全部</a></li>
            <li class="active"><a href="/admin/case/create">添加案例</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/case" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">案例名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="casename" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">品牌:</label>
                    <div class="col-sm-10">
                        <input type="text" name="bname" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属行业:</label>
                    <div class="col-sm-10">
                        <select name="tid" class="form-control">
                            <option value="">请选择</option>
                            @foreach(\App\Model\Trade::get() as $v)
                                <option value="{{$v['id']}}" >{{$v['tname']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group" id="category">
                    <label class="col-sm-2 control-label">所属服务:</label>
                    <div class="col-sm-10">
                        @foreach(\App\Model\Cate::where('pid',0)->get() as $v)
                            <label class="checkbox-inline col-sm-2" >
                                <input type="checkbox"   class="cate" name="cid[]" value="{{$v['id']}}"> {{$v['cname']}}
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">案例时间:</label>
                    <div class="col-sm-10">
                        <input type="date" name="time" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">排序:</label>
                    <div class="col-sm-10">
                        <input type="number"  name="orderby" placeholder="必须是整数" class="form-control"  value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">内容:</label>
                    <div class="col-sm-10">
                        <textarea id="container" name="content" style="height:1000px;width:100%;"></textarea>
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
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">点击数:</label>
                    <div class="col-sm-10">
                        <input type="number"  name="click" placeholder="必须是整数" class="form-control"  value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">点赞数:</label>
                    <div class="col-sm-10">
                        <input type="number"  name="zan" placeholder="必须是整数" class="form-control"  value="">
                    </div>
                </div>
                {{--中图上传--}}
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
                        <label for="" class="col-sm-4 control-label">图片上传(双击图片可删除):</label>
                        <div class="col-sm-8">
                            <input type="text" name="preview" id="mpic" class="form-control" value="" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button onclick="upImage1(this)" class="btn btn-default" type="button">选择图片</button>
                    </div>
                </div>
                <div class="form-group col-sm-10">
                    <div id="box1"></div>
                </div>
                <script>
                    //上传图片
                    var str1 ='';
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
                        <button type="submit" class="btn btn-primary">保存数据</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection