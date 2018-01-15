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
		//空白文字で検索ワードを分割	
		$word_array = preg_split("/[ ]+/",$words);

		$query = Book::query();

		foreach ($word_array as $word) {
			$query->where('name', 'like', '%'.$word.'%');
		}
		if($query->count() == 0) {
			foreach ($word_array as $word) {
				$query->orwhere('name', 'like', '%'.$word.'%');
			}
		}
		$books = $query->paginate(16);

    	return view('list', compact('books', 'searchword'));
    }
}
