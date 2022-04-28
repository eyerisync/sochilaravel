<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Portal;

class portalcontroller extends Controller
{
    public function portal(){

    	return view('portalview');
    }
}
