<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Checkaboutus;
use App\Model\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends CommonController
{
    public function index(){
        $data = Aboutus::find(1);
        return view('admin.aboutus.aboutus',compact('data'));
    }

    public function saveinfo(Checkaboutus $request){
        $model=Aboutus::find(1);
        if($model){
            $re = $model->update($request->toArray());
            $re && flash()->overlay('修改成功！','系统提示');
            return redirect('/admin/aboutus');
        }else{
            $re = Aboutus::create($request->toArray());
            $re && flash()->overlay('添加成功！','系统提示');
            return redirect('/admin/aboutus');
        }
    }
}
