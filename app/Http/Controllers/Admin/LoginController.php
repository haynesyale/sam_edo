<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Changepwd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    //中间件判断是否登陆
    public function __construct()
    {
        $this->middleware('checklogin')->except('login','access');
    }

    //后台管理员登陆首页
    public function login(){
        return view('admin.entry.login');
    }
    //后台登陆验证
    public function access(Request $request){
        $status = Auth::guard('admin_accounts')->attempt([
            'username'=>$request['username'],
            'password'=>$request['password']
        ]);
        if($status){
            flash()->overlay('登陆成功！','系统提示！');
            return redirect('/admin/index');
        }
        flash()->overlay('账号/密码不正确','错误提示');
        return redirect('/admin/login');
    }
    //后台首页
    public function index(){
       return view('admin.entry.index');
    }
    //退出登录
    public function logout(){
        Auth::guard('admin_accounts')->logout();
        flash()->overlay('退出成功','系统提示');
        return redirect('/admin/login');
    }
    //修改用户密码
    public function password(){
        return view('admin.entry.pwdindex');
    }
    //验证并修改密码
    public function changepwd(Changepwd $request){
        //通过验证修改密码
        $model = Auth::guard('admin_accounts')->user();
        $model->password = bcrypt($request['password']);
        $model->save();
        flash()->overlay('密码修改成功！','系统提示');
        return redirect('/admin/index');
    }
}
