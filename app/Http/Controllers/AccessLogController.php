<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class AccessLogController extends Controller
{
    public function index() {
    	//今月
    	$month_current = date('n');
    	//月はじめ
    	$bom = date('Y-m-01 00:00:00');
    	//月末
    	$eom = date('Y-m-t 23:59:59');

    	//今月の検索ワードの集計を取得
    	$access_crrent = DB::table('accesslog')
    					->join('books', 'accesslog.ISBN', '=', 'books.ISBN')
    					->select(DB::raw('accesslog.ISBN as ISBN, books.name as name, count(accesslog.ISBN) as count'))
    					->whereBetween('created_at', [$bom, $eom])
    					->groupBy('books.ISBN')
    					->orderBy(DB::raw('count(books.ISBN)'), 'desc')
    					->get();

 	   	$access_current_array = array();
    	foreach ($access_crrent as $chunk) {
    		array_push($access_current_array, array('label'=>$chunk->name, 'y'=>$chunk->count));
    	}

    	return view('accesslog', ['month_current' => $month_current, 'access_current_array' => $access_current_array]);
    }
}
