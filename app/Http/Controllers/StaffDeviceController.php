<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class StaffDeviceController extends Controller
{
	public function index (){
		return view('staffdevice');
	}
	public function IDcard(){
		return view('staffdevicegetIDTcard');
	}
	public function IDregister(){
		return view('IDregister');
	}

	public function IDconfirm(Request $request){
		$age = $request->input('age');
		$sex = $request->input('sex');
		return view('IDconfirm',compact('age','sex'));
	}

	public function searchlog($age,$sex){
		$bom=date('Y-m-01 00:00:00');
		$eom=date('Y-m-t 23:59:59');
		$result = DB::table('searchlog')
		->select(DB::raw('searchwords,count(searchwords) as count'))
		->whereBetween('created_at',[$bom, $eom])
		->groupBy('searchwords')
		->orderBy(DB::raw('count(searchwords)'),'desc')
		->limit(3)
		->get();
        $sexnumber = 1;
		if (strcmp($sex, "男性") == 0) {
			$sexnumber　= 1;
		}
		else{
			$sexnumber　= 2;
		}
		$a = DB::table('orders')
            ->join('t_users', 'orders.t_id' ,'=', 't_users.t_id')
            ->join('books','books.ISBN','=','orders.ISBN')
            ->select(DB::raw('books.name,books.cover,count(orders.ISBN) as count'))
            ->where('sex',$sexnumber)
            ->where('age',$age)
            ->groupBy('orders.ISBN')
            ->orderBy(DB::raw('count'),'desc')
            ->limit(3)
            ->get();
        /* $a = DB::table('orders','t_users','books')
            ->join('t_users', 'orders.t_id' ,'=', 't_users.t_id')
            ->join('books','books.ISBN','=','orders.ISBN')
            ->select(DB::raw('books.name,cover,count(books.ISBN) as count'))
            ->where('books.ISBN','orders.ISBN')
            ->where('orders.t_id','t_users.t_id')
            ->where('sex',$sexnumber)
            ->where('age',$age)
            ->groupBy('orders.ISBN')
            ->orderBy(DB::raw('count(orders.ISBN)'),'desc')
            ->limit(3)
            ->where('orders.t_id','t_users.t_id')
            ->get();/*
            




		/*$a= DB::table('orders','t_users')
		->select('ISBN')
		->where('sex',$sexnumber)
		->where('age',$age)
		->where('t_id','t_id')
		->get();*/
		/*$result_array = array();
		foreach($result as $chunk){
	    array_push($result_array,array('label'=>$chunk->searchwords, 'y'=>$chunk->count));
		}*/
		return view('staffsearch',compact('age','sex','result','a'));
	}
	public function staffsearchbooks($age,$sex,$searchwords){
		$query = Book::query();
			$query->where('name', 'like', '%'.$searchwords.'%');
		$books = $query->paginate(16);
    	return view('staffsearchresult', compact('books', 'searchwords'));
	}

	public function staffsearchbook(Request $request){
		$searchwords = $request->input('searchwords');
		$query = Book::query();
			$query->where('name', 'like', '%'.$searchwords.'%');
		$books = $query->paginate(16);
    	return view('staffsearchresult', compact('books', 'searchwords'));

	}

	public function staffsearch(Request $request) {
    	$this->validate($request, ['searchword' => 'required']);
    	$searchwords = $request->input('searchword');
    	//全角空白があったら半角空白にそろえる
		$words = str_replace("　", " ", $searchwords);
		
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
		
    	return view('staffsearchresult', compact('books', 'searchwords'));
	
}
}
