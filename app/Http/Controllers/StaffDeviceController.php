<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class StaffDeviceController extends Controller
{
	public function index (){
		return view('staffdevice');
	}
	public function IDcard(){
		return view('staffdevicegetIDTcard');
	}
	public function IDregister(){
		return view('IDregister');
	}

	public function IDconfirm(){
		$age = Request::input('age');
		$sex = Request::input('sex');
		return view('IDconfirm',compact('age','sex'));
	}
}
