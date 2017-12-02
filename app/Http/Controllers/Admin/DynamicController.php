<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Checkdynamic;
use App\Model\Article;
use App\Model\Dynamic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DynamicController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dynamic::paginate(8);
        return view('admin.dynamic.lists',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dynamic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Checkdynamic $request)
    {
        if(Dynamic::where('dname',$request['dname'])->first()){
            flash()->overlay('此名字已存在！','错误提示');
            return redirect()->back();
        }
        $re = Dynamic::create($request->toArray());
        if($re){
            flash()->overlay('添加成功！','系统提示');
            return redirect('/admin/dynamic');
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
        $data = Dynamic::find($id);
        return view('admin.dynamic.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Checkdynamic $request, $id)
    {
        //修改的名字不能与其他重名
        $re = Dynamic::where('id','!=',$id)->where('dname',$request['dname'])->first();
        if($re){
            flash()->overlay('此名字已存在！','系统提示');
            return redirect()->back();
        }else{//没有重名，则修改
            $res = Dynamic::find($id)->update($request->toArray());
            if($res){
                flash()->overlay('修改成功！','系统提示');
                return redirect('/admin/dynamic');
            }else{
                flash()->overlay('存储错误！','错误提示');
                return redirect()->back();
            }
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
        if(Article::where('did',$id)->first()){//有文章不可删除
            return response()->json(['valid'=>0,'message'=>'此分类下有文章，不可删除！']);
        }
        $res = Dynamic::destroy($id);
        if($res){
            return response()->json(['valid'=>1,'message'=>'删除成功！']);
        }else{
            return response()->json(['valid'=>0,'message'=>'系统错误！']);
        }
    }

    //搜索的方法
    public function search(Request $request){
        if(!$request['dname']){
            flash()->overlay('请输入关键字','系统提示');
            $data=[];
            return view('admin.dynamic.lists',compact('data'));
        }
        $data_id = [];
        //关键字搜索结果$re
        $re = Dynamic::where('dname','like','%'.$request['dname'].'%')->get()->toArray();
        if($re){//如果有数据
            foreach ($re as $v){
                $data_id[]=$v['id'];//插到data里面
            }
        }
        $data_id=array_unique($data_id);//去重复
        $data=Dynamic::whereIn('id',$data_id)->get()->toArray();
        return view('admin.dynamic.lists',compact('data'));
    }
}
