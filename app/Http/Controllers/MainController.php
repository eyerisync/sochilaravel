<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
     return view('loginview');
    }

    function checklogin(Request $request)
    {
     $messages = [
       "email.email" => "Incorrect email.",
       "email.required" => "Email is required.",
       "password.required" => "Password is required.",
       "password.alphaNum" => "Password is invalid.",
       "password.min" => "Password is too short."
     ];

     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ], $messages);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/adminview'); //ilalaag mo digdi si mainview mo, itong kapag naka log in na, ma welcome na.
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
     return view('adminview'); //ining adminview, si view ko ni itong may mga roles baga
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}
