<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Checkarticle;
use App\Model\Article;
use App\Model\Dynamic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Article::paginate(8);
        return view('admin.article.lists',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Checkarticle $request)
    {
        if(Article::where('aname',$request['aname'])->first()){
            flash()->overlay('此名字已存在！','错误提示');
            return redirect()->back();
        }
        $arr = $request->toArray();
        $arr['time']=strtotime($arr['time']);
        $re = Article::create($arr);
        if($re){
            flash()->overlay('添加成功！','系统提示');
            return redirect('/admin/article');
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
        $data = Article::find($id);
        return view('admin.article.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Checkarticle $request, $id)
    {
        //修改的名字不能与其他重名
        $re = Article::where('id','!=',$id)->where('aname',$request['aname'])->first();
        if($re){
            flash()->overlay('此名字已存在！','系统提示');
            return redirect()->back();
        }else{//没有重名，则修改
            $arr = $request->toArray();
            $arr['time']=strtotime($arr['time']);
            $res = Article::find($id)->update($arr);
            if($res){
                flash()->overlay('修改成功！','系统提示');
                return redirect('/admin/article');
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
        $res = Article::destroy($id);
        if($res){
            return response()->json(['valid'=>1,'message'=>'删除成功！']);
        }else{
            return response()->json(['valid'=>0,'message'=>'系统错误！']);
        }
    }

    //搜索的方法
    public function search(Request $request){
        if(!$request['aname']){
            flash()->overlay('请输入关键字','系统提示');
            $data=[];
            return view('admin.article.lists',compact('data'));
        }
        $data_id = [];
        //关键字搜索结果$re
        $re = Article::where('aname','like','%'.$request['aname'].'%')->get()->toArray();
        if($re){//如果有数据
            foreach ($re as $v){
                $data_id[]=$v['id'];//插到data里面
            }
        }
        $data_id=array_unique($data_id);//去重复
        $data=Article::whereIn('id',$data_id)->get()->toArray();
        return view('admin.article.lists',compact('data'));
    }
}
