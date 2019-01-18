<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest',['except' => ['userlogout']]);
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email , 'password' => $request->password])){

            Alert::success('Successfully','Logged In !');
            return redirect()->route('front.index');
         }
        Alert::error('Unsuccessful', 'Wrong Email/Password'); 
        return redirect()->back()->withinput($request->only('email'));
    }

    public function userlogout()
    {
        Auth::guard('web')->logout();
        Alert::success('Successfully','Logged Out !');
        return redirect('/'); 
    }
}
