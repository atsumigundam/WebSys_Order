<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('注文番号');
            $table->string('t_id');
            $table->string('ISBN');
            $table->string('店舗ID');
            $table->string('注文者名');
            $table->string('電話番号');
            $table->string('メールアドレス');
            $table->integer('状態コード');
            $table->datetime('注文年月日時分');

            
        });
        //
       DB::table('orders')->insert(['t_id' => '70612002','メールアドレス' => 'right.rcon.f@outlook.com','電話番号' => '00000000','注文者名' => '渥美和大','店舗ID' => '003','ISBN' => '9784577045800','注文番号' => '20','状態コード' => '0','注文年月日時分' => '2017-12-11 03:37:13']);
       DB::table('orders')->insert(['t_id' => '70612032','メールアドレス' => 'right.rcon.f@outlook.com','電話番号' => '00000000','注文者名' => '中谷瞭','店舗ID' => '003','ISBN' => '9784010090459','注文番号' => '21','状態コード' => '0','注文年月日時分' => '2017-12-11 03:37:14']);
       DB::table('orders')->insert(['t_id' => '70612043','メールアドレス' => 'right.rcon.f@outlook.com','電話番号' => '00000000','注文者名' => '大海静華','店舗ID' => '003','ISBN' => '9784876153053','注文番号' => '22','状態コード' => '0','注文年月日時分' => '2017-12-11 03:37:15']);
       DB::table('orders')->insert(['t_id' => '70612053','メールアドレス' => 'right.rcon.f@outlook.com','電話番号' => '00000000','注文者名' => '小島カズヤ','店舗ID' => '003','ISBN' => ' 9784091053725','注文番号' => '23','状態コード' => '0','注文年月日時分' => '2017-12-11 03:37:16']);
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('orders'); //
    }
}
