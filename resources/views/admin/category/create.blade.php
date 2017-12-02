@extends('admin.public.father')
@section('content')

    <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist">
            <li style="cursor: pointer"><a href="/admin/category">全部</a></li>
            <li class="active"><a href="/admin/category/create">添加服务分类</a></li>
        </ul>
        <div class="panel-body">
            <form action="/admin/category" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">父级栏目:</label>
                    <div class="col-sm-10">
                        <select name="pid" class="form-control">
                        	<option value="0">顶级分类</option>
                            @foreach($data as $v)
                            <option value="{{$v['id']}}" >{{$v['cname']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">服务名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="cname" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">服务描述:</label>
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