<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function hotels()
    {
        $hotels = Hotel::all();

        return view('admin.hotels')->with('hotels',$hotels);
    }
    public function hotels_update($id)
    {
        $hotels = Hotel::find($id);

        return view('admin.edithotels')->with('hotels',$hotels);
    }

}
