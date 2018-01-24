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

	public function search($sex,$age){
		$bom=date('Y-m-01 00:00:00');
		$eom=date('Y-m-t 23:59:59');
		$result = DB::table('searchlog')
		->select(DB::raw('searchwords,count(searchwords) as count'))
		->whereBetween('created_at',[$bom, $eom])
		->groupBy('searchwords')
		->orderBy(DB::raw('count(searchwords)'),'desc')
		->limit(3)
		->get();
		/*$result_array = array();
		foreach($result as $chunk){
	    array_push($result_array,array('label'=>$chunk->searchwords, 'y'=>$chunk->count));
		}*/
		return view('staffsearch',compact('age','sex','result'));
	}

}
