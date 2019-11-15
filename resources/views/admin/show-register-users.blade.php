@extends('layouts.app')

@section('content')
<h1 class="text-primary text-center" style="text-align: center; margin-top:20px;font-family:nunito; color:blue">Registered Users</h1>

<div class="container bootstrap snippet" style="padding-top:50px; font-family:nunito;">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>UserID</span></th>
                                <th><span>Name</span></th>
                                <th><span>Email</span></th>                               
                                <th ><span>MobileNo</span></th>
                                <th ><span>City</span></th>
                                <th ><span>Details</span></th>
                                <!--<th><span>Created</span></th>-->
                                </tr>
                            </thead>

                            @if(count($users) > 0)

                            @foreach ($users as $user)

                            <tbody>
                                
                                <tr>
                                    <td>
                                    <a href="/admin/regusers/{{$user->id}}" class="user-link">{{$user->userid}}</a>
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobileno}}</td>
                                    <td>{{$user->city}}</td>
                                    <td style="width: 20%;">
                                     <a href="/admin/regusers/{{$user->id}}" class="btn btn-success">Open</a>
                                    </td>
    
                              </tr>
                            </tbody>
                            @endforeach

                            @else 
                            <p>No User Found</p>
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
