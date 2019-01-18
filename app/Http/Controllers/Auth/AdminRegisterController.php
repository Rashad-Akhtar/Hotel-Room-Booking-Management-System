<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use App\Admin;
use Alert;


class AdminRegisterController extends Controller
{
    use RegistersUsers;
    
    
    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showRegistrationForm()
    {
        return view('login.register');
    }

    public function registerverify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $admin = Auth::guard('admin')->user();

        $password = $request->password;

        if(Hash::check($password , $admin->password))
        {
            return redirect()->route('admin.registerform');
        }

        else 
        {
            return back();
        }

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'user_name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required',
            'address' => 'required|string',
            'phone' => 'required|string'
        ]);

    }

    protected function create(array $data)
    {
        
            $data = [
                'name' => $data['name'],
                'username' => $data['user_name'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'type' => 'admin',
                'phone' => $data['phone'],
                'email' => $data['email'],
                'created_at' => now(),
                'updated_at' => now()
            ];    

        $admin = Admin::create($data);
        Alert::success('Successfully', 'New Admin Has Been Created');
        
        return $admin;


    }

}