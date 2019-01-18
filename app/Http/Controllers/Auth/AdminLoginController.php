<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Alert;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin',['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email , 'password' => $request->password])){
           Alert::success('Successfully', 'Logged In'); 
           return redirect()->route('admin.index');
        }
         Alert::error('Unsuccessful', 'Wrong Email/Password'); 
        return redirect()->back()->withinput($request->only('email'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Alert::success('Successfully','Logged Out !');
        return redirect('/admin/login');
    }
}
