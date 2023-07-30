<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
public function login(){

    return view('admin.pages.login');
}

// admin login


public function adminLogin(Request $request)  {

// validate 
$this -> validate($request,[
        'auth'     => 'required',
        'password' => 'required'
]);

    if(Auth::guard('admin') -> attempt(['email' => $request -> auth, 'password' => $request -> password])){

    return redirect () -> route('admin.dashboard.page');

   }else{
    return redirect () -> route('admin.login') -> with ('error', 'Wrong Email or Password');
   }


}

}
