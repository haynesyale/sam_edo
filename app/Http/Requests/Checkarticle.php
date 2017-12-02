<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checkarticle extends FormRequest
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
            'aname'=>'required',
            'did'=>'required|integer',
            'time'=>'required',
            'orderby'=>'required|integer',
            'click'=>'required|integer',
            'content'=>'required',
        ];
    }
    public function messages(){
        return [
            'aname.required'=>'文章名不能为空！',
            'did.required'=>'归类不能为空！',
            'did.integer'=>'归类必须是整数！',
            'time.required'=>'时间不能为空！',
            'orderby.required'=>'排序不能为空！',
            'orderby.integer'=>'排序必须是整数！',
            'click.required'=>'点击数不能为空！',
            'click.integer'=>'点击数必须是整数！',
            'content.required'=>'内容不能为空！',
        ];
    }
}
