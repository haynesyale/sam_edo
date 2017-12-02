<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checkaboutus extends FormRequest
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
        return [
            'address'=>'required',
            'tel'=>'required',
            'link'=>'required',
            'wechat'=>'required',
            'logo'=>'required',
            'content'=>'required',
            'culture'=>'required',
        ];
    }
    public function messages(){
        return [
            'address.required'=>'地址不能为空',
            'tel.required'=>'电话不能为空',
            'link.required'=>'链接不能为空',
            'wechat.required'=>'二维码图不能为空',
            'logo.required'=>'logo图不能为空',
            'content.required'=>'内容不能为空',
            'culture.required'=>'文化图不能为空',
        ];
    }
}
