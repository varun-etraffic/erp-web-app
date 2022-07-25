<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminRoles;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Auth;
use Session;

class AdminController extends Controller
{
    public function index(Request $request){
        $email = $request->email;
        $password = $request->password;
        $roleid = AdminRoles::select('id')->get();
        $adminemailexist = Admin::where('email', $email)->where('password', $password)->first();
        if(!empty($adminemailexist))
        {
            if(Admin::where('role_id', 1))
            {
                session(['admin_id' => $adminemailexist->id]);
                return redirect('/qrcode-scanner'); 
            }        
        }
        else{
            return redirect('/')->with('Wrong Credentials');
        }
    } 
}
