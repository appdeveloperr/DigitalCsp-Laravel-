@extends('layouts.user-header')

@section('content')

<!--<h1 style="color:gray; text-align:center"> User DashBoard</h1>-->
<!--`<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h4 class="mb-3">User Profile Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>ID:</h6>
                            <p>{{$user->id}}</p>
                            <h6>DSL Code:</h6>
                            <p>{{$user->userid}}</p>
                            <h6>User Name:</h6>
                            <p>{{$user->name}}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>MobileNo:</h6>
                            <p>{{$user->mobileno}}</p>
                            <h6>City:</h6>
                            <p>{{$user->city}}</p>
                            <h6>Bank Name:</h6>
                            <p>{{$user->bankname}}</p>
                        </div>
                        <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Work Status</h5>
                                <table class="table table-sm ">
                                    <tbody>
                                       <th>Settlement Account</th>
                                       <th>Area Verification</th>
                                       <th>Software Installed</th>
                                       <th>Work Training</th>
                                        <tr>
                                        <td>{{$user->settlement_account}}</td>
                                        <td>{{$user->area_verification}}</td>
                                        <td>{{$user->software_installed}}</td>
                                        <td>{{$user->work_training}}</td>
                                          
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                
        <div class="col-lg-4 order-lg-1 text-center">
                <img src="/storage/images/{{$user->image}}" style="width:150px; height:200px" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <h6 class="mt-2">{{$user->name}}</h6>
        </div>
    </div>
</div>-->

<div class="container-fluid" >
        <a href='/home/logout' style="float:right" class='btn btn-danger'>Logout</a>
    
    <div class="row">
                <div class="col-md-12">
                    <h1 class="text-primary text-center" style="padding-top:20px; padding-bottom:20px; font-family:nunito; ">
                        User DashBoard
                    </h1>
                </div>
            </div>
            
    <div class="row"  style="font-family: nunito; margin-left:20px; margin-right:20px;  border: 2px solid #0E57FF;  border-radius: 25px;">
            <div class="col-md-12" style="padding-top:15px">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5 text-primary   " >
                        <h3>
                            User Profile
                        </h3>
                    </div>
                    <div class="col-md-5 text-primary ">
                        <h3>
                            Work Status
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  style="font-family: nunito; margin-left:20px; margin-right:20px;  border: 2px solid #0E57FF;  border-radius: 25px;">
            <div class="col-md-2" style="padding-top:15px;">
                    <img src="/storage/images/{{$user->image}}" style="width:200px; height:250px" class="mx-auto img-fluid img-circle d-block" alt="No Image">
                    <h4 class="mt-2 text-center">{{$user->name}}</h4>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-2">
                        <h4 style="padding-top:15px">
                            UserID:
                        </h4>
                        <h4 style="padding-top:15px">
                                Password:
                            </h4>
                            <h4 style="padding-top:15px">
                                    Name:
                                </h4>
                                <h4 style="padding-top:15px">
                                        Email:
                                    </h4>
                                    <h4 style="padding-top:15px">
                                            MobileNo:
                                        </h4>
                                        <h4 style="padding-top:15px">
                                                City:
                                            </h4>
                                            <h4 style="padding-top:15px">
                                                    BankName:
                                                </h4>
                                                                                          
                    </div>
                    <div class="col-md-4" style="color:#808080;">
                        <h4 style="padding-top:15px">
                            {{$user->userid}}
                        </h4 style="padding-top:15px">
                        <h4 style="padding-top:15px">
                                {{$user->userpassword}}
                            </h4>
                            <h4 style="padding-top:15px">
                                    {{$user->name}}
                                </h4>
                                <h4 style="padding-top:15px">
                                        {{$user->email}}
                                    </h4>
                                    <h4 style="padding-top:15px">
                                            {{$user->mobileno}}
                                        </h4>
                                        <h4 style="padding-top:15px">
                                                {{$user->city}}
                                            </h4>
                                            <h4 style="padding-top:15px">
                                                    {{$user->bankname}}
                                                </h4>
                    </div>
                     <div class="col-md-3">
                        <h4 style="padding-top:15px">
                            CSP Approval
                        </h4>
                        <h4 style="padding-top:15px">
                                Settlement Account         
                                               </h4>
                            <h4 style="padding-top:15px">
                                    Area Verification                           
                                     </h4>
                                <h4 style="padding-top:15px">
                                        Software Installed
                                                                        </h4>
                                    <h4 style="padding-top:15px">
                                            Work Training                                        </h4>
                                                            
                    </div>
                    <div class="col-md-3" style="color:#808080;">
                        <h4 style="padding-top:15px">
                                {{$user->csp_approval}}
                        </h4>
                        <h4 style="padding-top:15px">
                                {{$user->settlement_account}}
                            </h4>
                            <h4 style="padding-top:15px">
                                    {{$user->area_verification}}
                                </h4>
                                <h4 style="padding-top:15px">
                                        {{$user->software_installed}}
                                    </h4>
                                    <h4 style="padding-top:15px">
                                            {{$user->work_training}}
                                        </h4>
                                        
                                         
                                        
                </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection