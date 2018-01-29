<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseLogController extends Controller
{
    public function index() {
    	//今月
    	$month_current = date('n');
    	//月はじめ
    	$bom = date('Y-m-01 00:00:00');
    	//月末
    	$eom = date('Y-m-t 23:59:59');

    	//今月の購入ログから出版社の集計を取得
    	$access_crrent = DB::table('accesslog')
    					->join('books', 'accesslog.ISBN', '=', 'books.ISBN')
    					->select(DB::raw('accesslog.ISBN as ISBN, books.name as name, count(accesslog.ISBN) as count'))
    					->whereBetween('created_at', [$bom, $eom])
    					->groupBy('books.ISBN')
    					->orderBy(DB::raw('count(books.ISBN)'), 'desc')
    					->get();

    	return view('purchaselog');
    }
}
