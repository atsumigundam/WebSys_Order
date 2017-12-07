<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderForm;

class FormController extends Controller
{
    //
    public function formResult(OrderForm $request)
    {
    	$first_name = $request->input('first_name');
    	$last_name = $request->input('last_name');
    	$tel = $request->input('tel');
    	$email = $request->input('email');
    	return view('confirm', ['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email]);
    }
}
