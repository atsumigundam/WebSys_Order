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

    	// 価格帯別購入数を集計
    	$price_range = DB::table('orders')
    				->join('books', 'orders.ISBN', 'books.ISBN')
    				->select(DB::raw('truncate(price, -3) as price_floor, count(*) as count'))
    				->whereBetween('注文年月日時分', [$bom, $eom])
    				->groupBy('price_floor')
    				->get();

    	$purchase_price_array = array();
    	foreach ($price_range as $chunk) {
    		$max = $chunk->price_floor + 1000;
    		$label = $chunk->price_floor.'~'.$max;
    		array_push($purchase_price_array, array('label'=>$label, 'y'=>$chunk->count));
    	}

    	$purchase_book = DB::table('orders')
    					->join('books', 'orders.ISBN', '=', 'books.ISBN')
    					->select(DB::raw('name, count(orders.ISBN) as count'))
    					->whereBetween('注文年月日時分', [$bom, $eom])
    					->groupBy('orders.ISBN')
    					->orderBy('count', 'desc')
    					->limit(5)
    					->get();

    	// 上位5冊の集計
    	$count_top5_book = 0;
    	foreach($purchase_book as $chunk) {
    		$count_top5_book += $chunk->count;
    	}

    	// 期間中の全出版社の集計を取得
    	$count_all_book = DB::table('orders')
					->join('books', 'orders.ISBN', '=', 'books.ISBN')
					->select(DB::raw('count(orders.ISBN) as count'))
					->whereBetween('注文年月日時分', [$bom, $eom])
					->get()
					->first()
					->count;
    	$count_other_book = $count_all_book - $count_top5_book;

    	$purchase_book_array = array();
    	foreach ($purchase_book as $chunk) {
    		array_push($purchase_book_array, array('label'=>$chunk->name, 'y'=>$chunk->count));
    	}

    	// その他を追加
    	array_push($purchase_book_array, array('label'=>'その他', 'y'=>$count_other_book));

    	$purchase_recent = DB::table('orders')
                        ->join('books', 'orders.ISBN', '=', 'books.ISBN')
                        ->join('shop', 'orders.店舗ID', '=', 'shop.id')
                        ->select(DB::raw('books.name, date_format(注文年月日時分, "%Y-%m-%d") as date, date_format(注文年月日時分, "%k:%i") as time, 注文番号 as id, shop.name as shop'))
                        ->whereIn(DB::raw('date_format(注文年月日時分, "%Y%m%d")'), function($query) {
                            $query->select(DB::raw('max(date_format(注文年月日時分, "%Y%m%d")) from orders'));
                        })
                        ->orderBy('time', 'desc')
                        ->get();

        $date = $purchase_recent->first()->date;

        $purchase_recent_array = array();
        foreach ($purchase_recent as $chunk) {
            array_push($purchase_recent_array, array('id' => $chunk->id, 'name' => $chunk->name, 'shop' => $chunk->shop, 'time' => $chunk->time));
        }
        if (count($purchase_recent_array) > 6) {
            array_splice($purchase_recent_array, 6, count($purchase_recent_array) - 6);
        } else {
            while (count($purchase_recent_array) < 6) {
                array_push($purchase_recent_array, array('id' => 0, 'name' => '--', 'time' => '--:--'));
            }
        }


    	return view('purchaselog', ['month_current'=>$month_current, 'purchase_publisher'=>$purchase_publisher_array, 'price_range'=>$purchase_price_array, 'purchase_book'=>$purchase_book_array, 'books'=>$purchase_recent_array, 'date'=>$date]);
    }
}
