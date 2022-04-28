<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class cashome extends Controller
{
    public function cashome(){

    	return view('cashomev');
    }
}
