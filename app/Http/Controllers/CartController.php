<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Hotel;
use App\Order;
use Auth;
use App\booked_room;

class CartController extends Controller
{
    public function showCart()
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];
        $total = array_sum(array_column($cart,'advance_amount'));
        $due = array_sum(array_column($cart,'due_price'));
        return view('front.cart')->with('hotels',$cart)->with('total',$total)->with('due',$due);
    }

    public function addToCart(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        $hotel = Hotel::find($request->id);

        $cart = session()->has('cart') ? session()->get('cart') : [];

        if(array_key_exists($hotel->id,$cart))
        {
            Alert::error('Sorry','You Have Already Booked It');
            return back();
        }
        else
        {
            $cart[$hotel->id] = [
                'title' => $hotel->title,
                'price' => $hotel->price,
                'advance_amount' => $hotel->advance_amount,
                'due_price' => ($hotel->price - $hotel->advance_amount)
            ];
        }

        session(['cart'=>$cart]);

        return redirect()->route('cart.show');
    }

    public function remove(Request $request)
    {
        $this->validate($request,[
            'id' => 'required'
        ]);

        $cart = session()->has('cart') ? session()->get('cart') : [];

        unset($cart[$request->id]);

        session(['cart'=>$cart]);

        return back();
    }

    public function clearcart()
    {
        session(['cart'=>[]]);

        return back();
    }

    public function checkout()
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];
        $total = array_sum(array_column($cart,'advance_amount'));
        return view('front.checkout')->with('hotels',$cart)->with('total',$total);
    }

    public function order(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'paymentMethod' => 'required'
        ]);

        $cart = session()->has('cart') ? session()->get('cart') : [];
        $total = array_sum(array_column($cart,'advance_amount'));
        $due = array_sum(array_column($cart,'due_price'));

        $order = Order::create([
            'user_id' => Auth::guard('web')->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'payment_method' => $request->paymentMethod,
            'status' => 'pending',
            'total_advance' => $total,
            'due_amount' => $due 
        ]);
        
        foreach($cart as $key => $hotel)
        {
            booked_room::create([
                'order_id' => $order->id,
                'hotelroom_id' => $key,
                'title' => $hotel['title'],
                'price' => $hotel['price'],
                'advance_amount' => $hotel['advance_amount']
            ]);

        }

        Session(['cart'=>[]]);
        Alert::success('success','You Have Successfully Ordered');
        return redirect()->route('front.index');
    }
}
