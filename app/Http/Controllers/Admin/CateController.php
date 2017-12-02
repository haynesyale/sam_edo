<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Checkcate;
use App\Model\Casecate;
use App\Model\Cate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CateController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //展示服务分类列表页
        $data = Cate::paginate(8);
        return view('admin.category.lists',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //增加
        $data = Cate::where('pid',0)->get();
        return view('admin.category.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Checkcate $request)
    {
        //判断名字是否存在
        if(Cate::where('cname',$request['cname'])->first()){
            flash()->overlay('此名字已存在！','错误提示');
            return redirect()->back();
        }
        $re = Cate::create($request->toArray());
        if($re){
            flash()->overlay('添加成功！','系统提示');
            return redirect('/admin/category');
        }else{
            flash()->overlay('存储错误！','错误提示');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //进入编辑页面
        $data = Cate::find($id);
        $parent = $data['pid']==0?['id'=>0,'cname'=>'顶级分类']:Cate::find($data['pid']);
        return view('admin.category.edit',compact('data','parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //判断名字是否存在
        if(Cate::where('cname',$request['cname'])->where('id','!=',$id)->first()){
            flash()->overlay('此名字已存在！','错误提示');
            return redirect()->back();
        }
        $re = Cate::find($id)->update($request->toArray());
        if($re){
            flash()->overlay('修改成功！','系统提示');
            return redirect('/admin/category');
        }else{
            flash()->overlay('存储错误！','错误提示');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //判断此数据是否有子集，有则不可以删除
        $re = Cate::where('pid',$id)->first();
        if($re){
            return response()->json(['valid'=>0,'message'=>'此服务分类下有子分类，不可以删除！']);
        }elseif(Casecate::where('cid',$id)->first()){
            return response()->json(['valid'=>0,'message'=>'此服务分类下有案例，不可以删除！']);
        }else{
            $res = Cate::destroy($id);
            if($res){
                return response()->json(['valid'=>1,'message'=>'删除成功！']);
            }else{
                return response()->json(['valid'=>0,'message'=>'系统错误！']);
            }
        }
    }

    //搜索的方法
    public function search(Request $request){
        if(!$request['cname']){
            flash()->overlay('请输入关键字','系统提示');
            $data=[];
            return view('admin.category.lists',compact('data'));
        }
        $data_id = [];
        //关键字搜索结果$re
        $re = Cate::where('cname','like','%'.$request['cname'].'%')->get()->toArray();
        if($re){//如果有数据，则把子集也循环出来
            foreach ($re as $v){
                $data_id[]=$v['id'];//插到data里面
                //查找子集
                $res = Cate::where('pid',$v['id'])->get()->toArray();
                if($res){
                    foreach($res as $vv){
                        $data_id[]=$vv['id'];
                    }
                }
            }
        }
        $data_id=array_unique($data_id);
        $data=Cate::whereIn('id',$data_id)->get()->toArray();
        return view('admin.category.lists',compact('data'));
    }
}
