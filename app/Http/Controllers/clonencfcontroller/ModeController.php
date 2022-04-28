<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Mode;

	class ModeController extends Controller {

		public function index(){

			//echo "Hello World Inside Controller";
			return view('mode');
		}

		public function retData(){

			$user = Mode::RetrieveUser();

			return response()->json($user);
			//echo "Hello World";
		}

}
