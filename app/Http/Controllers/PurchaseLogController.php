<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PurchaseLogController extends Controller
{
    public function index() {
    	//今月
    	$month_current = date('n');
    	//月はじめ
    	$bom = date('Y-m-01 00:00:00');
    	//月末
    	$eom = date('Y-m-t 23:59:59');

    	//今月の購入ログから上位5社の出版社の集計を取得
    	$purchase_publisher = DB::table('orders')
    					->join('books', 'orders.ISBN', '=', 'books.ISBN')
    					->select(DB::raw('publisher, count(publisher) as count'))
    					->whereBetween('注文年月日時分', [$bom, $eom])
    					->groupBy('publisher')
    					->orderBy('count', 'desc')
    					->limit(5)
    					->get();

    	// 上位5社の集計
    	$count_top5 = 0;
    	foreach($purchase_publisher as $chunk) {
    		$count_top5 += $chunk->count;
    	}
    	// 期間中の全出版社の集計を取得
    	$count_all = DB::table('orders')
    					->join('books', 'orders.ISBN', '=', 'books.ISBN')
    					->select(DB::raw('count(publisher) as count'))
    					->whereBetween('注文年月日時分', [$bom, $eom])
    					->get()
    					->first()
    					->count;
    	$count_other = $count_all - $count_top5;

    	$purchase_publisher_array = array();
    	foreach ($purchase_publisher as $chunk) {
    		array_push($purchase_publisher_array, array('label'=>$chunk->publisher, 'y'=>$chunk->count));
    	}

    	// その他を追加
    	array_push($purchase_publisher_array, array('label'=>'その他', 'y'=>$count_other));

    	return view('purchaselog', ['month_current'=>$month_current, 'purchase_publisher'=>$purchase_publisher_array]);
    }
}
