<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;


class SearchController extends Controller
{
    public function index(){
    	return view('searchtop');
    }

    public function search(Request $request) {
    	$this->validate($request, ['searchword' => 'required']);
    	$searchword = $request->input('searchword');
    	//全角空白があったら半角空白にそろえる
		$words = str_replace("　", " ", $searchword);
		
		$request->session()->put('searchword', $words);

		//空白文字で検索ワードを分割	
		$word_array = preg_split("/[ ]+/",$words);

		$query = Book::query();

		foreach ($word_array as $word) {
			$query->where('name', 'like', '%'.$word.'%');
		}

		// ペジネーションによるinsertの重複を防止
		if ($request->input('page') == 0) {
			// 検索ヒット数が0の場合hitsカラムに0，ヒットした場合1を入れる
			$hit_count = $query->count() != 0;
			//検索ワードをログテーブルに追加
			DB::table('searchlog')->insert(['searchwords' => $words, 'hits' => $hit_count]);
		}

		if($query->count() == 0) {
			foreach ($word_array as $word) {
				$query->orwhere('name', 'like', '%'.$word.'%');
			}
		}
		$books = $query->paginate(16);
		
    	return view('searchresult', compact('books', 'searchword'));
    }
}
