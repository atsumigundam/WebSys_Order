<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchLogController extends Controller
{
    public function index() {
    	//今月
    	$month_current = date('n');
    	//月はじめ
    	$bom = date('Y-m-01 00:00:00');
    	//月末
    	$eom = date('Y-m-t 23:59:59');

    	$result = DB::table('searchlog')
    					->select(DB::raw('searchwords, count(searchwords) as count'))
    					->whereBetween('created_at', [$bom, $eom])
    					->groupBy('searchwords')
    					->orderBy(DB::raw('count(searchwords)'), 'desc')
    					->get();

 	   	$result_array = array();
    	foreach ($result as $chunk) {
    		array_push($result_array, array('label'=>$chunk->searchwords, 'y'=>$chunk->count));
    	}
    	return view('searchlog', [ 'word_current' => $result_array, 'month_current' =>  $month_current ]);
    }
}
