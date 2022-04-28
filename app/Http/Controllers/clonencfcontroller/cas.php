<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class cas extends Controller
{
    public function casweb(){

    	return view('casview');
    }
}
