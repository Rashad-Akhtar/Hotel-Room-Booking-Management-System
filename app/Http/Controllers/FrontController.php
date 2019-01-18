<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class FrontController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();

        return view('front.hotels')->with('hotels',$hotels);
    }

    public function login()
    {
        return view('front.login');
    }

    public function register()
    {
        return view('front.register');
    }

    public function hotel_details($id)
    {
        $hotel = Hotel::find($id);

        return view('front.hotel_details')->with('hotel',$hotel);
    }
}
