<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    //protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'userid' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
           ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
                
        return User::create([
            'userid'   => $data['userid'],
            'password' => Hash::make($data['password']),
            'userpassword' => $data['password'],
            'name'     => $data['name'],
            'email'    => $data['email'],
            'bankname' => $data['bankname'],
            'mobileno' => $data['mobileno'],
            'city'     => $data['city'],
            'csp_approval'       => 'Pending',
            'settlement_account' => 'Pending',
            'area_verification'  => 'Pending',
            'software_installed' =>	'Pending',
            'work_training'      => 'Pending',	
            ]);
 
    
    }
}

