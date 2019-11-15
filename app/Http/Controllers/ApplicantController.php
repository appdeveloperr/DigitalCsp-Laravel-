<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;


class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.apply');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function create()
    {
        //
        return view('pages.apply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:applicant_users'],
            'mobileno' => ['required', 'string', 'min:10'],
            'bankname' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
         ]);

        $register = new Applicant;
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->mobileno = $request->input('mobileno');
        $register->bankname = $request->input('bankname');
        $register->city = $request->input('city');
        $register->save();

        //$isRegistered = 'success';
        //return redirect('/')->with('isRegistered',$isRegistered);
 
        $isRegistered = 'success';
        return view('pages.index')->with('isRegistered',$isRegistered);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $user = Applicant::find($id);
        return view('admin.show-applicant-details')->with('user',$user);   
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
