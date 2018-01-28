<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StockDetailController extends Controller
{   
    public function index($isbn)
    {
        $shop1 = DB::table('shop')->where('id', [0001])->first();
        $shop2 = DB::table('shop')->where('id', [0002])->first();
        $shop3 = DB::table('shop')->where('id', [0003])->first();
        $shop4 = DB::table('shop')->where('id', [0004])->first();

        $book = DB::table('books')->where('ISBN', $isbn)->first();
        $stocks = DB::table('stock')->where('ISBN', $isbn)->get();
    	
    	return view('stockdetail',['book'=>$book->name,
    						'author'=>$book->author,
    						'date'=>$book->date,
    						'price'=>$book->price,
    						'ISBN'=>$book->ISBN,
                            'publisher'=>$book->publisher,
    						'cover'=>$book->cover,
                            'zaiko1' => $stocks[0]->在庫数 - $stocks[0]->引当数 - $stocks[0]->陳列数,
                            'zaiko2' => $stocks[1]->在庫数 - $stocks[1]->引当数 - $stocks[1]->陳列数,
                            'zaiko3' => $stocks[2]->在庫数 - $stocks[2]->引当数 - $stocks[2]->陳列数,
                            'zaiko4' => $stocks[3]->在庫数 - $stocks[3]->引当数 - $stocks[3]->陳列数,
    						'shop1'=>$shop1,
    						'shop2'=>$shop2,
    						'shop3'=>$shop3,
    						'shop4'=>$shop4]);   	
    }
    
    public function to_order($isbn, $shop_id) {
        return redirect()->action('DbController@input', ['isbn' => $isbn, 'shop_id' => $shop_id]);
    }
}
