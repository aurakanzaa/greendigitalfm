<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Caffeinated\Flash\Facades\Flash;

class SignUpController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest');
    }

    public function getRegister()
    {
      return view('login');
    }

    public function postRegister(Request $request)
    {
      $this->validate($request, [
        'email'  => 'unique:users|email'
      ]);

      $user = new User();
      $user->email = $request->email;
      $user->password = bcrypt(Input::get('password'));
      Flash::success('Sign Up Succeed!');
      $user->save();
      return redirect('logedin');
    }

}
