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

    	session(['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email]);

    	$shop_name = $request->session()->get('shop_name');
    	$shop_address = $request->session()->get('shop_address');
    	$shop_phone = $request->session()->get('shop_phone');

    	return view('confirm', ['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email,
    		'shop_id' => $shop_id, 'shop_name' => $shop_name, 'shop_address' => $shop_address, 'shop_phone' => $shop_phone]);
    }

    public function orderedResult(Request $request, $shop_id)
    {
    	if ($request->get('button') === 'back') {
    		return redirect("order/$shop_id")->withInput();
    	}

    	$first_name = $request->session()->get('first_name');
    	$last_name = $request->session()->get('last_name');

    	// ブラウザリロード等での二重送信防止
        $request->session()->regenerateToken();

    	return view('ordered', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
