<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class casabout extends Controller
{
    public function casabout(){

    	return view('casaboutv');
    }
}
