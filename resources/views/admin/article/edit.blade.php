@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/article">全部</a></li>
            <li class="active"><a href="/admin/article/create">编辑文章</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/article/{{$data['id']}}" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">文章名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="aname" class="form-control" value="{{$data['aname']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">归类:</label>
                    <div class="col-sm-10">
                        <select name="did" class="form-control">
                            <option value="">请选择</option>
                            @foreach(\App\Model\Dynamic::get() as $v)
                                @if($v['id']==$data['did'])
                                    <option value="{{$v['id']}}" selected="selected">{{$v['dname']}}</option>
                                    @else
                                    <option value="{{$v['id']}}" >{{$v['dname']}}</option>
                                    @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">文章时间:</label>
                    <div class="col-sm-10">
                        <input type="date" name="time" class="form-control" value="{{date('Y-m-d',$data['time'])}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">排序:</label>
                    <div class="col-sm-10">
                        <input type="number"  name="orderby" placeholder="必须是整数" class="form-control"  value="{{$data['orderby']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">点击数:</label>
                    <div class="col-sm-10">
                        <input type="number"  name="click" placeholder="必须是整数" class="form-control"  value="{{$data['click']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">内容:</label>
                    <div class="col-sm-10">
                        <textarea id="container" name="content" style="height:1000px;width:100%;">{{$data['content']}}</textarea>
                    </div>
                </div>
                <script>
                    require(['hdjs'], function (hdjs) {
                        var ueditor =  hdjs.ueditor('container', {hash: 2, data: 'hd'}, function (editor) {
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
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">保存数据</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection