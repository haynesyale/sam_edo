<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Checkcase;
use App\Model\Casemodel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Casemodel::paginate(8);
        return view('admin.case.lists',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.case.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Checkcase $request)
    {
        if(!isset($request['cid'])){
            flash()->overlay('请至少选择一项服务类型','系统提示');
            return redirect()->back();
        }
        if(Casemodel::where('casename',$request['casename'])->first()){
            flash()->overlay('此案例名字已存在','系统提示');
            return redirect()->back();
        }
        //全部字段验证OK，存到数据库case表
        $arr = $request->toArray();
        $arr['time']=strtotime($arr['time']);
        unset($arr['cid']);//删除没有的字段
        $case = Casemodel::savemodel(new Casemodel(),$arr);
        //保存服务项目关联表数据
        foreach($request['cid'] as $v){
            $case->cates()->create([
                'cid'=>$v,
            ]);
        }
        flash()->overlay('保存成功！','系统提示');
        return redirect('/admin/case');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Casemodel::find($id);
        $cates = [];
        foreach ($data->cates()->get() as $v){
            $cates[]=$v['cid'];
        }
        return view('admin.case.edit',compact('data','cates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Checkcase $request, $id)
    {
        if(!isset($request['cid'])){
            flash()->overlay('请至少选择一项服务类型','系统提示');
            return redirect()->back();
        }
        if(Casemodel::where('casename',$request['casename'])->where('id','!=',$id)->first()){
            flash()->overlay('此案例名字已存在','系统提示');
            return redirect()->back();
        }
        //全部字段验证OK，存到数据库case表
        $arr = $request->toArray();
        $arr['time']=strtotime($arr['time']);
        unset($arr['cid']);//删除没有的字段
        $case = Casemodel::savemodel(Casemodel::find($id),$arr);
        //保存服务项目关联表数据
        $model = $case->cates();
        $model->delete();//删除旧的数据
        foreach($request['cid'] as $v){
            $model->create([
                'cid'=>$v,
            ]);
        }
        flash()->overlay('修改成功！','系统提示');
        return redirect('/admin/case');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $re = Casemodel::destroy($id);
        if($re){
            return response()->json(['valid'=>1,'message'=>'删除成功！']);
        }else{
            return response()->json(['valid'=>0,'message'=>'系统错误！']);
        }
    }

    //搜索的方法
    public function search(Request $request){
        if(!$request['casename']){
            flash()->overlay('请输入关键字','系统提示');
            $data=[];
            return view('admin.case.lists',compact('data'));
        }
        $data_id = [];
        //关键字搜索结果$re
        $re = Casemodel::where('casename','like','%'.$request['casename'].'%')->get()->toArray();
        if($re){//如果有数据
            foreach ($re as $v){
                $data_id[]=$v['id'];//插到data里面
            }
        }
        $data_id=array_unique($data_id);//去重复
        $data=Casemodel::whereIn('id',$data_id)->get()->toArray();
        if(!$data){
            flash()->overlay('没有结果','系统提示');
        }
        return view('admin.case.lists',compact('data'));
    }
}
