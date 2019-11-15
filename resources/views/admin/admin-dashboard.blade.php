@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!--
<h1>Applicant Users</h1>

@if(count($users) > 0)

@foreach ($users as $user)
        <div class="card card-body bg-light">
          <h3><a href="/apply/{{$user->id}}">{{$user->username}}</a></h3>
          <small>written on {{$user->created_at}}</small> 
        </div>    
@endforeach
@else 
    <p>No User Found</p>
@endif

    -->

<h1 class="text-primary text-center" style="text-align: center; font-family:nunito; padding-top:20px">Applicant Users</h1>

<div class="container bootstrap snippet" style="margin-top:30px; font-family:nunito;">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Name</span></th>
                                <th><span>Email</span></th>
                                <th ><span>MobileNo</span></th>
                                <th><span>CreatedAt</span></th>
                                <th><span>Details</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>

                            @if(count($users) > 0)

                            @foreach ($users as $user)

                            <tbody>
                                <tr>
                                    <td>
                                        <a href="/admin/applicant/{{$user->id}}" class="user-link">{{$user->name}}</a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobileno}}</td>
                                    <td>{{$user->created_at}}</td>

                                    <td style="width: 20%;">
                                        <a href="/admin/applicant/{{$user->id}}" class="btn btn-success">Open</a>
                                        

                                        <!--<a href="" class="table-link" data-toggle="modal" data-target="#modalLoginForm">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>-->
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

                            @else 
                            <p style="text-align: center">No Applicant Found</p>
                            @endif
                        
                        </table>
                        @if(count($users) > 0)  
                        {{$users->links()}}       
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
