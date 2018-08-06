<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware;

class LoginController extends Controller
{
      public function username()
    {
      return 'email';
    }

    public function __construct()
    {
      $this->middleware('guest');
    }

    public function getLogin()
    {
      return view('login');
    }


    public function checkLogin(Request $request)
    {
     $user = User::where('email', $request->email)->first();
     
     if(Hash::check($request->password,$user->password)){
       Auth::login($user, true);
       return redirect('logedin');
     }
    }
}
