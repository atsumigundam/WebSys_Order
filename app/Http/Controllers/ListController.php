<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index() {
    	$books = DB::table('books')->take(10)->get();

    	return view('list', ['books' => $books]);
    }
}
