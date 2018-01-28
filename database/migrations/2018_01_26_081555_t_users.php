<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_id');
            $table->integer('sex');
            $table->string('name');
            $table->integer('age');
            $table->date('birth');
        });
        //
       DB::table('t_users')->insert(['t_id' => '70612002','sex' => '1','name' => '渥美和大','age' => '20','birth' => '1000-01-01']);
    DB::table('t_users')->insert(['t_id' => '70612032','sex' => '1','name' => '中谷瞭','age' => '30','birth' => '1000-01-02']);
    DB::table('t_users')->insert(['t_id' => '70612043','sex' => '2','name' => '大海静華','age' => '40','birth' => '1000-01-03']);
    DB::table('t_users')->insert(['t_id' => '70612053','sex' => '1','name' => '小島カズヤ','age' => '50','birth' => '1000-01-02']);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_users');
        //
    }
}
