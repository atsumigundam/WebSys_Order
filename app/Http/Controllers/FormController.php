<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderForm;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{
    //
    public function formResult(OrderForm $request, $shop_id)
    {
    	$first_name = $request->input('first_name');
    	$last_name = $request->input('last_name');
    	$tel = $request->input('tel');
    	$email = $request->input('email');

    	$shop = DB::select('select * from test.shop where id = ?', [$shop_id]);

    	return view('confirm', ['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email,
    		'shop_id' => $shop_id, 'shop_name' => $shop[0]->name, 'shop_address' => $shop[0]->address, 'shop_phone' => $shop[0]->phone]);
    }

    public function orderedResult(Request $request, $shop_id)
    {
    	//$first_name = $request->input('first_name');
    	return view('ordered', "fas");
    }
}
