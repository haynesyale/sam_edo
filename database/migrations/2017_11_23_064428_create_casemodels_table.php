<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casemodels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('casename',100);//案例名
            $table->string('bname',100);//品牌
            $table->smallInteger('tid');//行业
            $table->integer('time');//时间
            $table->tinyInteger('orderby');//排序
            $table->text('content');//内容
            $table->text('preview');//图片
            $table->smallInteger('click');//点击数
            $table->smallInteger('zan');//点赞
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casemodels');
    }
}
