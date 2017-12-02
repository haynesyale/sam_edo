@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/trade">全部</a></li>
            <li class="active"><a href="/admin/trade/create">修改行业</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/trade/{{$data['id']}}" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">服务名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="tname" class="form-control" value="{{$data['tname']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">服务描述:</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control" rows="10">{{$data['description']}}</textarea>
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