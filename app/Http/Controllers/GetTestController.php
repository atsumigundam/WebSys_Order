<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetTestController extends Controller
{
	public function index() {
		return view('test');
	}

    public function got(Request $request) {
    	$input = $request->input('search');
    	return view('result', compact('input'));
    }
}
