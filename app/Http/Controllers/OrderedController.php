<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderedController extends Controller
{
    public function ordered(Request $request, $shop_id)
    {
    	$first_name = $request->all();
    	return view('ordered', ['first_name' => $shop_id]);
    }
}
