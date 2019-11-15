@extends('layouts.app')

@section('content')

<!--<div class="container">
<h3 style="text-align:center;"><strong>Registered User Details</strong></h3>
<img src="/storage/images/{{$user->image}}" style="width:150px; height:200px" class="mx-auto img-fluid img-circle d-block" alt="avatar">
               
<div class="row" >
    <div class="well profile">
        <div class="col-sm-10">
            <div class="col-xs-12 col-sm-8">
                <h4><strong>UserID: </strong>{{$user->userid}}</h4>
                <p><strong>Name: </strong>{{$user->name}} </p>
                <p><strong>Password: </strong>{{$user->password}} </p>
                <p><strong>Email: </strong>{{$user->email}}</p>
                <p><strong>Mobile No: </strong>{{$user->mobileno}}</p>
                <p><strong>City : </strong>{{$user->city}}</p>
                <p><strong>Bank Name: </strong>{{$user->bankname}}</p>
                <p><strong>Applied At: </strong>{{$user->created_at}}</p>
            </div>

        </div>
        <div class="col-xs-12 divider text-center">
            <div class="col-xs-12 col-sm-6 emphasis">
                <button class="btn btn-success btn-block" class="table-link" data-toggle="modal"
                    data-target="#modalLoginForm"><span class="fa fa-plus-circle"></span> Assign </button>
            </div>-->
<!--<div class="col-xs-12 col-sm-6 emphasis">
                <a href="" class="btn btn-danger btn-block"><span class="fa fa-user"></span> Remove </a>
            </div>-->
<!--</div>
    </div>-->

<!-- Right Side -->

<!--<div class="container" style="margin: 0 auto; width:30%;">
            {!! Form::open(['action' => ['AdminController@update_user_data',$user->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}

                <div class="form-group">
                    {{Form::label('settlementaccount', 'Settlement Account',['class'=>' font-weight-bold'])}}
                    {{Form::text('settlement_account',$user->settlement_account,['class'=>'form-control', 'tabindex'=>'1'])}}
                </div>
        
                <div class="form-group">
                    {{Form::label('areaverification', 'Area Verification',['class'=>' font-weight-bold'])}}
                    {{Form::text('area_verification',$user->area_verification,['class'=>'form-control', 'tabindex'=>'2'])}}
                </div>
        
                <div class="form-group">
                    {{Form::label('softwareinstalled', 'Software Installed',['class'=>' font-weight-bold'])}}
                    {{Form::text('software_installed',$user->software_installed,['class'=>'form-control', 'tabindex'=>'3'])}}
                </div>
        
                <div class="form-group">
                    {{Form::label('worktraining', 'Work Training',['class'=>' font-weight-bold'])}}
                    {{Form::text('work_training',$user->work_training,['class'=>'form-control', 'tabindex'=>'4'])}}
                </div>
                
                <div class="form-group">
                    {{Form::label('image', 'Upload User Image (optional)',['class'=>' font-weight-bold'])}}
                    {{Form::file('image')}}
                </div>

            {{Form::submit('Submit',['class'=>'btn btn-primary btn-block'])}}
            {!! Form::close() !!}
        
        </div>
        
</div>
</div>-->

<!-- New CODE STart -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary text-center" style="padding:20px; font-family:nunito; ">
                Registered User Details
            </h3>
        </div>
    </div>
    <div class="row" style="font-family: nunito; margin-left:20px; margin-right:20px;  border: 2px solid #73AD21;  border-radius: 25px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="padding-top:15px">
                    <img src="/storage/images/{{$user->image}}" style="width:200px; height:250px"
                        class="mx-auto img-fluid img-circle d-block" alt="No Image Set">
                    <h4 style="text-align:center">
                        {{$user->userid}}
                    </h4>
                </div>
                <div class="col-md-5" style="padding-right:100px; padding-bottom:30px;  ">
                    <div class="row">
                        <div class="col-md-5">
                            <h5 style="padding:15px">
                                <strong>UserID: </strong>
                            </h5>
                            <h5 style="padding:15px">
                                    <strong>Name: </strong>
                                </h5>
                                <h5 style="padding:15px">
                                        <strong>Email: </strong>
                                    </h5>
                                    <h5 style="padding:15px">
                                            <strong>Password: </strong>
                                        </h5>
                                        <h5 style="padding:15px">
                                                <strong>MobileNo: </strong>
                                            </h5>
                                            <h5 style="padding:15px">
                                                    <strong>City: </strong>
                                                </h5>
                                                                                   
                                            <h5 style="padding:15px">
                                                    <strong>Bank: </strong>
                                                </h5>
                                                <h5 style="padding:15px">
                                                        <strong>Created At: </strong>
                                                    </h5> 
                        </div>
                        <div class="col-md-7"  style="color:#808080;">
                            <h5 style="padding:15px;">
                                {{$user->userid}}
                            </h5>
                            <h5 style="padding:15px">
                                    {{$user->name}}
                                </h5>
                                <h5 style="padding:15px">
                                        {{$user->email}}
                                    </h5>
                                    <h5 style="padding:15px">
                                            {{$user->userpassword}}
                                        </h5>
                                        <h5 style="padding:15px">
                                                {{$user->mobileno}}
                                            </h5>
                                            <h5 style="padding:15px">
                                                    {{$user->city}}
                                                </h5>
                                                <h5 style="padding:15px">
                                                        {{$user->bankname}}
                                                    </h5>
                                                    <h5 style="padding:15px">
                                                            {{$user->created_at}}
                                                        </h5>
                                                                                                            
                        </div>
                    </div>
                    {!! Form::open(['url' => '/admin/regusers/sendmail/{{$user->$id}}', 'method'=>'POST']) !!}
                    @csrf

                    {{Form::hidden('email',$user->email)}}
                    {{Form::hidden('userid',$user->userid)}}
                    {{Form::hidden('userpassword',$user->userpassword)}}

                    {{Form::submit('Send Credential Email To User',['class'=>'btn btn-success btn-block mt-4'])}}
                    {!! Form::close() !!}
                  
                

                </div>
                <div style=" padding-left:75px; padding-right:75px; padding-top:15px; font-family:nunito;" class="col-md-5">

                    {!! Form::open(['action' => ['AdminController@update_user_data',$user->id], 'method'=>'PUT',
                    'enctype'=>'multipart/form-data']) !!}


                    <div class="form-group">
                        {{Form::label('CSP Approval', 'CSP Approval',['class'=>' font-weight-bold'])}}
                        {{Form::text('csp_approval',$user->csp_approval,['class'=>'form-control', 'tabindex'=>'0'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('settlementaccount', 'Settlement Account',['class'=>' font-weight-bold'])}}
                        {{Form::text('settlement_account',$user->settlement_account,['class'=>'form-control', 'tabindex'=>'1'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('areaverification', 'Area Verification',['class'=>' font-weight-bold'])}}
                        {{Form::text('area_verification',$user->area_verification,['class'=>'form-control', 'tabindex'=>'2'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('softwareinstalled', 'Software Installed',['class'=>' font-weight-bold'])}}
                        {{Form::text('software_installed',$user->software_installed,['class'=>'form-control', 'tabindex'=>'3'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('worktraining', 'Work Training',['class'=>' font-weight-bold'])}}
                        {{Form::text('work_training',$user->work_training,['class'=>'form-control', 'tabindex'=>'4'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('image', 'Upload User Image (optional)',['class'=>' font-weight-bold'])}}
                        {{Form::file('image')}}
                    </div>

                    {{Form::submit('Submit',['class'=>'btn btn-primary btn-block'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection