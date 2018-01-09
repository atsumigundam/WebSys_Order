<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function index(){
    	return view('searchtop');
    }

    

    public function search(Request $request) {
    	$this->validate($request, ['searchword' => 'required']);
    	$searchword = $request->input('searchword');
    	$books = DB::table('books')->where('name','like','%'.$searchword.'%')->paginate(16);
    	return view('list', compact('books', 'searchword'));
    }
}
