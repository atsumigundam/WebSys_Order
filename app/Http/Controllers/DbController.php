<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index()
    {
    	$shop_name = DB::select('select name from test.shop where id = ?', ['0001']);

    	return view('test', ['shop_name' => $shop_name[0]->name]);
    }
    public function input($shop_id)
    {
    	$shop = DB::select('select * from test.shop where id = ?', [$shop_id]);

    	return view('input', ['shop_name' => $shop[0]->name, 'shop_address' => $shop[0]->address, 'shop_phone' => $shop[0]->phone]);
    }
}
