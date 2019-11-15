<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class AdminLoginController extends Controller
{

    public function __construct(){

        $this->middleware('guest:admin',['except'=> ['adminLogout']]);
      //  $this->middleware('guest')->except('adminLogout');

    }

   public function showLoginForm(){

    return view('auth.admin-login');
      
    }


     public function login(Request $request){
    
        //Validate form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log the user in
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //if successful then redirect to their intended location
                return redirect()->intended(route('admin.dashboard'));

            }
        
        //if unsuccessfull then, redirect back to the login with the from data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }


}
