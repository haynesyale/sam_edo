<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checkdynamic extends FormRequest
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
            'dname'=>'required',
            'orderby'=>'required|integer',
        ];
    }
    public function messages(){
        return [
            'dname.required'=>'名字不能为空！',
            'orderby.required'=>'排序不能为空！',
            'orderby.integer'=>'排序必须为整数！',
        ];
    }
}
