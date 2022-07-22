<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Order;
use App\Models\User;

class QrcodeController extends Controller
{
    //
    public function qrcodscannereview(){
        return view('host.qrcodescanner');
    }

    public function qrcode($OrderId){
        $user_id = User::select('id')->where('email','user@gmail.com')->get();
        return view('host.qrcode',compact('OrderId'));
    }
}
