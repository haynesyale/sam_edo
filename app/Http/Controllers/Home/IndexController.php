<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //展示首页
    public function index(){
        return view('home.index.index');
    }
    //展示案列页
    public function casemodel(){
        return view('home.index.case');
    }
    //展示服务页
    public function service(){
        return view('home.index.service');
    }
    //展示关于我们
    public function about(){
        return view('home.index.about');
    }
    //元度动态
    public function dynamic(){
        return view('home.index.dynamic');
    }
    //加入我们
    public function join(){
        return view('home.index.join');
    }
    //联系我们
    public function contact(){
        return view('home.index.contact');
    }
    //客户提交信息
    public function info(Request $request){
        return redirect()->back()->with('jump','加入成功！');
    }
}
