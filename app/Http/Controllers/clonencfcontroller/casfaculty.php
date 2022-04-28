<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

class casfaculty extends Controller
{
    public function casfac(){

    	return view('casfacultyv');
    }
}
