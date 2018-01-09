<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderForm;
use Illuminate\Support\Facades\DB;
use \Datetime;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderReceived;


class FormController extends Controller
{
    public function formResult(OrderForm $request, $shop_id)
    {
    	$first_name = $request->input('first_name');
    	$last_name = $request->input('last_name');
    	$tel = $request->input('tel');
    	$email = $request->input('email');

        $shop = $request->session()->get('shop');
        $book = $request->session()->get('book');

    	session(['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email]);

    	return view('confirm', ['first_name' => $first_name, 'last_name' => $last_name, 'tel' => $tel, 'email' => $email,
    		'shop_id' => $shop->id, 'shop_name' => $shop->name, 'shop_address' => $shop->address, 'shop_phone' => $shop->phone,
            'book_name' => $book->name, 'book_author' => $book->author, 'book_publisher' => $book->publisher, 'book_date' => $book->date, 'book_price' => $book->price]);
    }

    public function orderedResult(Request $request, $shop_id)
    {
        $shop = $request->session()->get('shop');
        $book = $request->session()->get('book');

    	if ($request->get('button') === 'back') {
    		return redirect("order/$book->ISBN/$shop->id#form")->withInput();
    	}

    	$first_name = $request->session()->get('first_name');
    	$last_name = $request->session()->get('last_name');
        $tel = $request->session()->get('tel');
        $email = $request->session()->get('email');

        $full_name = $first_name.' '.$last_name;
        
        //現在時刻の取得
        $date = new DateTime();

        DB::table('orders')->insert(
            ['ISBN' => $book->ISBN, '店舗ID' => $shop->id, '注文年月日時分' => $date->format('Y-m-d H:i:s'), '注文者名' => $full_name,
                '電話番号' => $tel, 'メールアドレス' => $email]
        );

        //注文番号の取得
        $order_id = DB::getPdo()->lastInsertId();

        //受付完了メール送信
        Mail::to($email)->send(new OrderReceived($order_id, $full_name, $book, $shop));

    	// ブラウザリロード等での二重送信防止
        $request->session()->regenerateToken();

    	return view('ordered', ['first_name' => $first_name, 'last_name' => $last_name,
                                'book_name' => $book->name, 'book_price' => $book->price,
                                'shop_name' => $shop->name, 'shop_address' => $shop->address]);
    }

    public function cancel() {
        return redirect()->back();
    }
}
