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
		var_dump($sex);
		var_dump($sexnumber);

		$a = DB::table('orders')
            ->join('t_users', 'orders.t_id' ,'=', 't_users.t_id')
            ->join('books','books.ISBN','=','orders.ISBN')
            ->select('books.name','books.cover')
            ->where('sex',$sexnumber)
            ->where('age',$age)
            /*->where('orders.t_id','t_users.t_id')*/
            ->get();
            var_dump($a);


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
	
}
