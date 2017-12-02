@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/tag">全部</a></li>
            <li class="active"><a href="/admin/tag/create">添加标签服务</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/tag" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">标签服务名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="tagname" class="form-control" value="">
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