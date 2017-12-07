<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
    	$name = DB::select('select name from test.shop where id = ?', ['0001']);
    	return view('test', ['name' => $name[0]->name]);
    }
}
