<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class casgallery extends Controller
{
    public function casgal(){

    	return view('casgalleryv');
    }
}
