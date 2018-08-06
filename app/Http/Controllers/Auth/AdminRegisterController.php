<?php

namespace App\Http\Controllers\Auth;

use App\Models\Verificator;
use Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminRegisterController extends Controller
{

	public function __construct(){
		$this->middleware('guest:admin');
	}

    public function showRegisterForm(){
    	return view('auth.admin-register');
    }

    public function register(Request $request){
    	$messages = array(
            'nama.required' => 'Please enter name',
            'email.required' => 'Please enter email',
            'email.unique' => 'This email is already taken. Please input a another email',
            'password.required' => 'Please enter password',
        );

        $rules = array(
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        );

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('admin/register')
                            ->withErrors($validator)
                            ->withInput();
        }

        $input = $request->all();
        $admin = Verificator::registeruser($input);

        if($admin->id){
            return redirect('admin/login')->with('status', 'Admin register successfully');
        }else{
            return redirect('admin/register')->with('status', 'Admin not register. Please try again');
        }
    }
}
