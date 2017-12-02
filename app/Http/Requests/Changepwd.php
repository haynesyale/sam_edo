<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Hash;
use Validator;
class Changepwd extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->checkoldpwd();
        return [
            'old_password'=>'required|check_oldpwd',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ];
    }
    //错误提示
    public function messages(){
        return [
            'old_password.required'=>'原密码不能为空',
            'old_password.check_oldpwd'=>'原密码不正确',
            'password.required'=>'新密码不能为空',
            'password_confirmation.required'=>'确认密码不能为空',
        ];
    }
    protected function checkoldpwd(){
        Validator::extend('check_oldpwd',function($attribute,$value,$parameters,$validator){
            Return Hash::check($value,Auth::guard('admin_accounts')->user()->password);
        });
    }
}
