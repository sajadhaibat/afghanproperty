<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class adminloginController extends Controller
{

public function __construct() {

$this->middleware('guest:admin',['except' => ['logout']]);
}

    public function ShowLoginForm (){

      return view ('auth.adminlogin');
    }

    public function login(Request $request) {

      $this->validate($request, [
        'email'=>'required |email'

      ]);

      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password'=> $request->password], $request->remember)) {

          return redirect()->intended(('admin/home'));

      }

         return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }


}
