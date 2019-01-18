<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\booked_room;
use Alert;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status','pending')->get();

        return view('admin.orders')->with('orders',$orders);
    }

    public function approved_orders()
    {
        $orders = Order::where('status','approved')->get();
        return view('admin.approved_orders')->with('orders',$orders);
    }

    public function order_details($id)
    {
        $order = Order::find($id);

        $booked_rooms = booked_room::where('order_id', $id)->get();

        return view('admin.order_details')->with('order',$order)->with('booked_rooms',$booked_rooms);
    }

    public function order_delete($id)
    {
        Order::destroy($id);

        return back();
    }

    public function order_approve($id)
    {
        Order::where('id',$id)->update([
            'status' => 'approved'
        ]);

        Alert::success('success','Order Has Been Approved');

        return back();
    }
}
