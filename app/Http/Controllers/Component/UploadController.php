<?php

namespace App\Http\Controllers\Component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //上传图片方法
    public function upload(Request $request){
        //获取上传的文件
        $upload = $request->file;
        //判断上传的文件是否合法
        if($upload->isValid()){
            //组合图片路径
            $path = $upload->store(date('ymd'),'shangchuandizhi');
            //返回成功消息
            return response()->json(['valid' => 1, 'message' => asset('/uploadImg/' . $path)]);
        }
        return response()->json(['valid' => 0, 'message' => '图片上传失败']);


    }


    //获取图片列表方法
    public function fileList(){
        //获取跟目录下的文件
        $files = glob('uploadImg/*/*');
        foreach ($files as $f) {
            $data[] = ['url' => "http://edo.samwong.top/".$f, 'path' => 'http://edo.samwong.top/'.$f];
        }
//返回数据 data为文件列表 page 为分页数据，可以使用 houdunwang/page 组件生成
        $json = ['data' => $data,'page'=>[]];
        die(json_encode($json));
    }
}
