<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Checktrade;
use App\Model\Casemodel;
use App\Model\Trade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TradeController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Trade::paginate(8);
        return view('admin.trade.lists',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Checktrade $request)
    {
        if(Trade::where('tname',$request['tname'])->first()){
            flash()->overlay('此名字已存在！','错误提示');
            return redirect()->back();
        }
        $re = Trade::create($request->toArray());
        if($re){
            flash()->overlay('添加成功！','系统提示');
            return redirect('/admin/trade');
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
        $data = Trade::find($id);
        return view('admin.trade.edit',compact('data'));
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
        //修改的名字不能与其他重名
        $re = Trade::where('id','!=',$id)->where('tname',$request['tname'])->first();
        if($re){
            flash()->overlay('此名字已存在！','系统提示');
            return redirect()->back();
        }else{//没有重名，则修改
            $res = Trade::find($id)->update($request->toArray());
            if($res){
                flash()->overlay('修改成功！','系统提示');
                return redirect('/admin/trade');
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
        //判断此行业下是否有案例
        if(Casemodel::where('tid',$id)->first()){
            return response()->json(['valid'=>0,'message'=>'此行业下有案例，不能删除！']);
        }
        $res = Trade::destroy($id);
        if($res){
            return response()->json(['valid'=>1,'message'=>'删除成功！']);
        }else{
            return response()->json(['valid'=>0,'message'=>'系统错误！']);
        }
    }

    //搜索的方法
    public function search(Request $request){
        if(!$request['tname']){
            flash()->overlay('请输入关键字','系统提示');
            $data=[];
            return view('admin.trade.lists',compact('data'));
        }
        $data_id = [];
        //关键字搜索结果$re
        $re = Trade::where('tname','like','%'.$request['tname'].'%')->get()->toArray();
        if($re){//如果有数据，则把子集也循环出来
            foreach ($re as $v){
                $data_id[]=$v['id'];//插到data里面
            }
        }
        $data_id=array_unique($data_id);//去重复
        $data=Trade::whereIn('id',$data_id)->get()->toArray();
        return view('admin.trade.lists',compact('data'));
    }
}
