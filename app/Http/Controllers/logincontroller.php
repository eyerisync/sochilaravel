<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Login;
	use Validator;
	use Auth;
	use Socialite;

class logincontroller extends Controller
{
    public function login(){

    	return view('loginview');
    }

    public function validator(Request $request){

    	$messages = [
            "username.required" => "Username is required",
            "password.required" => "Password is required"
        ];

    	$this->validate($request, [
    		'username'	=>	'required',
    		'password'	=>	'required'
    	], $messages);

		$user_data = array(
			'username'	=>	$request->get('username'),
			'password'	=>	$request->get('password')
		);

		if(Auth::attempt($user_data)){
			return redirect('login/adminview');
		}else{
			return back()->with('error', 'Wrong login details');
		}
    }

    public function adminview(){

    	return view('adminview');
    }

    public function logout(){

    	Auth::logout();
    	return redirect('login'); 
    }

	public function redirectToProvider(){

		return Socialite::driver('google')->stateless()->redirect();
	}

	public function handleProviderCallback(){

		$user = Socialite::driver('google')->user();
		// $user->token; (return as your need)
	}
}