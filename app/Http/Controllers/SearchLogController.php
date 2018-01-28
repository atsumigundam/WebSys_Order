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

    	//今月の検索ワードの集計を取得
    	$word_result = DB::table('searchlog')
    					->select(DB::raw('searchwords, count(searchwords) as count'))
    					->whereBetween('created_at', [$bom, $eom])
    					->groupBy('searchwords')
    					->orderBy(DB::raw('count(searchwords)'), 'desc')
    					->get();

 	   	$word_result_array = array();
    	foreach ($word_result as $chunk) {
    		array_push($word_result_array, array('label'=>$chunk->searchwords, 'y'=>$chunk->count));
    	}

        // 半角スペースを含む検索ワードの集計を取得
        $word_multi = array_filter($word_result_array, function($v) {
            return strpos($v['label'], ' ') !== false;
        });
        // indexを振り直す
        $word_multi = array_values($word_multi);

        // 今月の日別検索数を取得
    	$count_result = DB::table('searchlog')
    					->select(DB::raw('date_format(created_at, "%Y-%m-%d") as date, date_format(created_at, "%d") as day, count(searchwords) as count'))
    					->groupBy(DB::raw('date_format(created_at, "%Y%m%d")'))
    					->get();

    	$count_result_array = array();

    	$pointer = 0;
		for ($i=1; $i <= date('t'); $i++) {
			if ($pointer < count($count_result) && $count_result[$pointer]->day == $i) {
				$one_day = $count_result[$pointer];
				array_push($count_result_array, array('x'=>$one_day->date, 'y'=>$one_day->count));
				$pointer++;
			} else {
				array_push($count_result_array, array('x'=>date('Y-m-'.sprintf('%02d', $i)), 'y'=>0));
			}
		}

        //今月の検索結果が0の検索ワードの集計を取得
        $no_hit_word_result = DB::table('searchlog')
                        ->select(DB::raw('searchwords, count(searchwords) as count'))
                        ->where('hits', 0)
                        ->whereBetween('created_at', [$bom, $eom])
                        ->groupBy('searchwords')
                        ->orderBy(DB::raw('count(searchwords)'), 'desc')
                        ->get();

        $no_hit_word_array = array();
        foreach ($no_hit_word_result as $chunk) {
            array_push($no_hit_word_array, array('label'=>$chunk->searchwords, 'y'=>$chunk->count));
        }


    	return view('searchlog', [ 'word_current' => $word_result_array, 'month_current' =>  $month_current, 'count_current' => $count_result_array, 'word_multi' => $word_multi, 'no_hit_word' => $no_hit_word_array ]);
    }
}
