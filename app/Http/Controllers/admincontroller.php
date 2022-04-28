<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Admin;
	use Auth;

	class admincontroller extends Controller{

		public function admin(){

			//$role = Admin::RetrieveRole();
    		return view('adminview');
		}

		public function showAdmin(){

			$user = Admin::RetrieveAdmin();
			return response()->json($user);
		}

		public function insert_admin(Request $request){

			$result = new Admin();
			$result->InsertAdmin($request);
			return response()->json($result);
		}

		public function update_admin(Request $request){
			$result = new Admin();
			$result->AdminUpdate($request);
			return response()->json($result);
		}

		public function delete_admin(Request $request){

			$result = new Admin();
			$result->DeleteAdmin($request);
			return response()->json($result);
		}
	}

?>