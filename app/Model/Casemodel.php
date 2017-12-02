<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Casemodel extends Model
{
    protected $guarded=[];

    //一对多 关联casecate表
    public function cates(){
        return $this->hasMany(Casecate::class);
    }
    //保存修改模型数据的方法
    public static function savemodel($model,$arr){
        $model->casename = $arr['casename'];
        $model->bname = $arr['bname'];
        $model->tid = $arr['tid'];
        $model->time = $arr['time'];
        $model->orderby = $arr['orderby'];
        $model->content = $arr['content'];
        $model->click = $arr['click'];
        $model->zan = $arr['zan'];
        $model->preview = $arr['preview'];
        $model->save();
        return $model;
    }
}
