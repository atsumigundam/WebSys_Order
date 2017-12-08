<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderForm;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{
    public function formResult(OrderForm $request, $shop_id)
    {
    	$first_name = $request->input('first_name');
    	$last_name = $request->input('last_name');
    	$tel = $request->input('tel');
    	$email = $request->input('email');

    	session(['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email]);

    	$shop = $request->session()->get('shop');

        $book = $request->session()->get('book');

    	return view('confirm', ['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email,
    		'shop_id' => $shop->id, 'shop_name' => $shop->name, 'shop_address' => $shop->address, 'shop_phone' => $shop->phone,
            'book_name' => $book->name, 'book_author' => $book->author, 'book_publisher' => $book->publisher, 'book_date' => $book->date, 'book_price' => $book->price]);
    }

    public function orderedResult(Request $request, $shop_id)
    {
        $shop = $request->session()->get('shop');
        $book = $request->session()->get('book');

    	if ($request->get('button') === 'back') {
    		return redirect("order/$book->ISBN/$shop->id")->withInput();
    	}

    	$first_name = $request->session()->get('first_name');
    	$last_name = $request->session()->get('last_name');

    	// ブラウザリロード等での二重送信防止
        $request->session()->regenerateToken();

    	return view('ordered', ['first_name' => $first_name, 'last_name' => $last_name,
                                'book_name' => $book->name, 'book_price' => $book->price,
                                'shop_name' => $shop->name, 'shop_address' => $shop->address]);
    }
}
