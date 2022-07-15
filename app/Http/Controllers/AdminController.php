<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminRoles;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Auth;

class AdminController extends Controller
{
    public function index(Request $request){
        $email = $request->email;
        $password = $request->password;
        $roleid = AdminRoles::select('id')->get();
        $adminemailexist = Admin::where('email', $email)->first();
        if(!empty($adminemailexist))
        {
            if(Admin::where('role_id', 1))
            {
                return redirect('/qrcode-scanner'); 
            }        
        }
        else{
            return redirect('/')->with('Wrong Credentials');
        }
    } 
}
