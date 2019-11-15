@extends('layouts.app')

@section('content')


<!--<div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
     <div class="well">
        <div class="col-sm-12">
            <h2 style="text-align:center;"><strong>Applicant Details</strong></h2>
            <div class="col-xs-12 col-sm-8">
            <h3><strong>User Name: </strong>{{$user->name}}</h3>
            <p><strong>User ID: </strong> {{$user->id}} </p>
            <p><strong>Email: </strong> {{$user->email}}</p>
            <p><strong>Mobile No: </strong>{{$user->mobileno}}</p>
            <p><strong>City : </strong>{{$user->city}}</p>
            <p><strong>Bank Name: </strong>{{$user->bankname}}</p>
            <p><strong>Applied At: </strong>{{$user->created_at}}</p>
            </div>             
            
        </div>            
        <div class="col-xs-12 divider text-center">
            <div class="col-xs-12 col-sm-6 emphasis">
                <button class="btn btn-success btn-block" class="table-link" data-toggle="modal" data-target="#modalLoginForm"><span class="fa fa-plus-circle"></span> Assign </button>

            </div>-->
<!--<div class="col-xs-12 col-sm-6 emphasis">
                <button class="btn btn-danger btn-block"><span class="fa fa-user"></span> Remove </button>
            </div>-->
<!--</div>
     </div>                 
    </div>
</div>-->


<!-- Model Fade code -->


<!--{!! Form::open(['url' => '/register', 'method'=>'POST']) !!}
@csrf

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Assign User Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-email"><strong>UserID</strong></label>
          {{Form::text('userid','',['class'=>'form-control input-lg','placeholder'=>'Enter UserID', 'tabindex'=>'1'])}}

        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass"><strong>Password</strong></label>
          {{Form::text('password','',['class'=>'form-control input-lg','placeholder'=>'Enter Password', 'tabindex'=>'2'])}}

        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        {{Form::hidden('name',$user->name)}}
        {{Form::hidden('email',$user->email)}}
        {{Form::hidden('mobileno',$user->mobileno)}}
        {{Form::hidden('city',$user->city)}}
        {{Form::hidden('bankname',$user->bankname)}}
        {{Form::hidden('id',$user->id)}}
        {{Form::submit('Assign',['class'=>'btn btn-primary'])}}
    </div>
    </div>
  </div>
</div>

{!! Form::close() !!}
-->


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-primary text-center" style="padding:20px; font-family:nunito;">
        Applicant User Details
      </h3>
    </div>
  </div>
  <div class="row" style="margin-left:50px; margin-right:50px; margin-top:20px; padding:10px;  font-family: nunito;   border: 2px solid #73AD21;  border-radius: 25px;">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2" style="padding-left:60px">
          <h5 style="padding:15px">
            <strong>Name: </strong>
          </h5>
          <h5 style="padding:15px">
            <strong>Email: </strong>
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
          <h5 style="padding:10px">
            <strong>Created At: </strong>
          </h5>

        </div>
        <div class="col-md-5" style="color:#808080;">
          <h5 style="padding:15px">
            {{$user->name}}
          </h5>
          <h5 style="padding:15px">
            {{$user->email}}
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
        <div class="col-md-4">
     
        {!! Form::open(['url' => '/register', 'method'=>'POST']) !!}
        @csrf
        <div class="md-form mb-5" style="padding-top:30px">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-email"><strong>UserID</strong></label>
            {{Form::text('userid','',['class'=>'form-control input-lg','placeholder'=>'Enter UserID', 'tabindex'=>'1'])}}
  
          </div>
  
          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass"><strong>Password</strong></label>
            {{Form::text('password','',['class'=>'form-control input-lg','placeholder'=>'Enter Password', 'tabindex'=>'2'])}}
  
          </div>

          <div class="modal-footer d-flex justify-content-center">
              {{Form::hidden('name',$user->name)}}
              {{Form::hidden('email',$user->email)}}
              {{Form::hidden('mobileno',$user->mobileno)}}
              {{Form::hidden('city',$user->city)}}
              {{Form::hidden('bankname',$user->bankname)}}
              {{Form::hidden('id',$user->id)}}
              {{Form::submit('Assign Credentials',['class'=>'btn btn-primary btn-block'])}}
          </div>

        
        </div>
      </div>
    </div>
  </div>
</div>
@endsection