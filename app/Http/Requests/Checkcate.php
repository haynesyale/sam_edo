<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checkcate extends FormRequest
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
            'pid'=>'required|integer',
            'cname'=>'required',
            'description'=>'required',
            'orderby'=>'required|integer',
        ];
    }
    public function messages(){
        return [
            'pid.required'=>'父级分类不能为空',
            'pid.integer'=>'排序必须是整数',
            'cname.required'=>'名字不能为空',
            'description.required'=>'说明不能为空',
            'orderby.required'=>'排序不能为空',
            'orderby.integer'=>'排序必须是整数',
        ];
    }
}
