<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class casstories extends Controller
{
    public function casstories(){

    	return view('casstoriesv');
    }
}
