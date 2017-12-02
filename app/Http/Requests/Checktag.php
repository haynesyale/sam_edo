<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checktag extends FormRequest
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
            'tagname'=>'required',
            'orderby'=>'required|integer',
        ];
    }
    public function messages(){
        return [
            'tagname.required'=>'名字不能为空！',
            'orderby.required'=>'排序不能为空！',
            'orderby.integer'=>'排序必须是整数！',
        ];
    }
}
