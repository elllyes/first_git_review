
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('users') }}</div>
                
                <div class="card-body table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    

            <body ng-app="twin" ng-controller="userCtrl">

            
            <table class="table table-striped ">
                  <thead>
                      <tr>
                      
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Edit</th>
                      </tr>
                  </thead>
                  <tbody>
            
                    <tr @foreach ($users as $user)>

                        <td>{{ucwords($user->name)}} </td>
                        <td>{{ucwords($user->last_name)}} </td>
                        <td>{{$user->email}}</td> 
                        <td> {{$user->phone}}</td> 
                        <td><a class="btn btn-outline-light btn-link" href="/admin/users/{{$user->id}}/edit" role="button">
                        <span class="glyphicon glyphicon-pencil"></span>  Edit</a>
                        </button></td>
                                    
                    </tr @endforeach>                       
                  </tbody>
                </table>        
</body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
  





