<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use DB;
use App\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('admin');
        $users = Applicant::orderBy('id')->paginate(25);
        return view('admin.admin-dashboard')->with('users', $users); 
    }

    public function show($id)
    { 
        $user = Applicant::find($id);
        return view('admin.show-applicant-details')->with('user',$user);   
    }


    public function get_all_registered_users(){
        $users = User::orderBy('userid')->paginate(25);
        return view('admin.show-register-users')->with('users',$users);
    }

    public function get_register_user_by_id($id){

        $user = User::find($id);
        return view('admin.show-reg-user-details')->with('user',$user);          
    }


    public function update_user_data(Request $request, $id)
    {
        $this->validate($request, [
            'csp_approval' =>  'required',
            'settlement_account' =>  'required',
            'area_verification'  =>  'required',
            'software_installed' =>  'required',
            'work_training'      =>  'required',
            'image'              =>  'nullable|max:4096'
        ]);

        //Handling file uploading

        if($request->hasFile('image')){
            //Get Filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }          
                                                      
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Update user data
        $user = User::find($id);
        $user->csp_approval       = $request->input('csp_approval');
        $user->settlement_account = $request->input('settlement_account');
        $user->area_verification  = $request->input('area_verification');
        $user->software_installed = $request->input('software_installed');
        $user->work_training      = $request->input('work_training');
            
            // Use strcmp() function  
         if (strcmp($fileNameToStore, 'noimage.jpg') !== 0) { 
                $user->image = $fileNameToStore;
        } 
        $user->save();
        
        return redirect('/admin/regusers/')->with('success','Post Updated');
            
    }



    public function send_email(Request $request, $id){
     
        $user = User::find($id);
    
        return view('email.sendcredentials')->with('user',$user);

    }
}
