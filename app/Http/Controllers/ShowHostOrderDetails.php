<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
Use Auth;


class ShowHostOrderDetails extends Controller
{
    //
    public function ShowOrderDetail($OrderId,$UserId)
    {
        $user_id = User::select('id')->get();
        $user_info = User::where('id',$UserId)->get();
        //$order_info = Order::where('id',$OrderId)->where('user_id',1)->get();
        $order_info = Order::where('id',$OrderId)->get();
        return view('host.orderdetail',compact('user_info','order_info'));
    }
}
