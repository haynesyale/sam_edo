@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/tag">全部</a></li>
            <li class="active"><a href="/admin/tag/create">修改标签服务</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/tag/{{$data['id']}}" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">服务名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="tagname" class="form-control" value="{{$data['tagname']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">排序:</label>
                    <div class="col-sm-10">
                        <input type="text" name="orderby" class="form-control" value="{{$data['orderby']}}">
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