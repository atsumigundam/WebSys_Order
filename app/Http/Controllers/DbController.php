<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function input($shop_id)
    {
    	$shop = DB::select('select name,address,phone from test.shop where id = ?', [$shop_id]);
        $shop_name = $shop[0]->name;
        $shop_address = $shop[0]->address;
        $shop_phone = $shop[0]->phone;

        session(['shop_name' => $shop_name, 'shop_address' => $shop_address, 'shop_phone' => $shop_phone]);

    	return view('input', ['shop_id' => $shop_id, 'shop_name' => $shop_name, 'shop_address' => $shop_address, 'shop_phone' => $shop_phone]);
    }
}
