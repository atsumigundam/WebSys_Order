<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function input($isbn, $shop_id)
    {
        $shop = DB::table('shop')->where('id', $shop_id)->first();
        session(['shop' => $shop]);

        $book = DB::table('books')->where('ISBN', $isbn)->first();
        session(['book' => $book]);

    	return view('input', ['shop_id' => $shop->id, 'shop_name' => $shop->name, 'shop_address' => $shop->address, 'shop_phone' => $shop->phone, 
            'book_name' => $book->name, 'book_author' => $book->author, 'book_publisher' => $book->publisher, 'book_date' => $book->date, 'book_price' => $book->price]);
    }
}
