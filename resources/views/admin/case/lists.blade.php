@extends('admin.public.father')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        @if(!is_array($data))
            <li class="active" style="cursor: pointer"><a href="/admin/case">全部</a></li>
            @else
            <li  style="cursor: pointer"><a href="/admin/case">全部</a></li>
        @endif
        <li><a href="/admin/case/create">添加案例</a></li>
        <form action="/admin/case/search" method="post">
            {{csrf_field()}}
            <div class="col-sm-4" style="float: left;">
                <input class="form-control"  name="casename" type="text" placeholder="输入案例名称可快速查找">
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
            <th>案例名称</th>
            <th>品牌</th>
            <th>所属行业</th>
            {{--<th>服务类型</th>--}}
            <th>时间</th>
            <th>排序号</th>
            <th>点击数</th>
            <th>点赞数</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        	<!--循环数据展示-->
        @foreach($data as $v)
        <tr>
            <td>{{$v['id']}}</td>
            <td>{{$v['casename']}}</td>
            <td>{{$v['bname']}}</td>
            <td>{{\App\Model\Trade::find($v['tid'])['tname']}}</td>
            {{--<td>{{$v->cates()->get()->toArray()}}</td>--}}
            <td>{{date('Y-m-d',$v['time'])}}</td>
            <td>{{$v['orderby']}}</td>
            <td>{{$v['click']}}</td>
            <td>{{$v['zan']}}</td>
            <td>
                <div class="btn-group">
                    <a href="/admin/case/{{$v['id']}}/edit" class="btn btn-primary">编辑</a>
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
                            url:'/admin/case/'+id,
                            method:'DELETE',
                            success:function (res) {
                                if(res.valid == 0){
                                    hdjs.message(res.message,'/admin/case','error');
                                }else {
                                    hdjs.message(res.message,'/admin/case','success');
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