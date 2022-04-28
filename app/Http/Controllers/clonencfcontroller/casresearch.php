<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class casresearch extends Controller
{
    public function casres(){

    	return view('casresearchv');
    }
}
