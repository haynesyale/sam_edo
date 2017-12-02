@extends('admin.public.father')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        @if(!is_array($data))
            <li class="active" style="cursor: pointer"><a href="/admin/category">全部</a></li>
            @else
            <li  style="cursor: pointer"><a href="/admin/category">全部</a></li>
        @endif
        <li><a href="/admin/category/create">添加服务分类</a></li>
        <form action="/admin/category/search" method="post">
            {{csrf_field()}}
            <div class="col-sm-4" style="float: left;">
                <input class="form-control"  name="cname" type="text" placeholder="输入服务名称可快速查找">
            </div>
            <div class="col-sm-4" style="float: left;">
                <button type="submit" class="btn btn-primary">搜索</button>
            </div>
        </form>
    </ul>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>服务名称</th>
            <th>排序号</th>
            {{--<th>说明</th>--}}
            <th>父级分类</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        	<!--循环数据展示-->
        @foreach($data as $v)
        <tr>
            <td>{{$v['id']}}</td>
            <td>{{$v['cname']}}</td>
            <td>{{$v['orderby']}}</td>
            @if($v['pid']==0)
            <td>顶级分类</td>
            @else
                <td>{{\App\Model\Cate::find($v['pid'])['cname']}}</td>
                @endif
            <td>
                <div class="btn-group">
                    <a href="/admin/category/{{$v['id']}}/edit" class="btn btn-primary">编辑</a>
                    <a href="javascript:;" onclick="del({{$v['id']}})" class="btn alert-danger">删除</a>
                </div>
            </td>
        </tr>
        @endforeach
        <!--展示结束-->
        </tbody>
        <script type="text/javascript">
            function del(id) {
                require(['hdjs'], function (hdjs) {
                    hdjs.confirm('确定删除吗?', function () {
                        $.ajax({
                            url:'/admin/category/'+id,
                            method:'DELETE',
                            success:function (res) {
                                if(res.valid == 0){
                                    hdjs.message(res.message,'/admin/category','error');
                                }else {
                                    hdjs.message(res.message,'/admin/category','success');
                                }
                            }
                        })
                    })
                })
            }
        </script>

    </table>
    @if(!is_array($data))
    {{$data->links()}}
    @endif
@endsection