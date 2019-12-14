<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        //php artisan make:migration create_category  创建表
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cate_name');
            $table->integer('cate_id');
            $table->integer('pid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
