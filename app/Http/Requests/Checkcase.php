<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checkcase extends FormRequest
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
            'casename'=>'required',
            'bname'=>'required',
            'tid'=>'required',
            'time'=>'required',
            'orderby'=>'required',
            'content'=>'required',
            'click'=>'required',
            'zan'=>'required',
            'preview'=>'required',
        ];
    }
    public function messages(){
        return [
            'casename.required'=>'案例名不能为空',
            'bname.required'=>'品牌名不能为空',
            'tid.required'=>'行业不能为空',
            'time.required'=>'时间不能为空',
            'orderby.required'=>'排序不能为空',
            'content.required'=>'内容不能为空',
            'click.required'=>'点击数不能为空',
            'zan.required'=>'点赞数不能为空',
            'preview.required'=>'图片不能为空',
        ];
    }
}
