@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit password for') }} : {{$user->email}}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/users/edit-password/{{$user->id}}">
                        @csrf
                        @method('PATCH')
                        <x-common-password/>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="myFunction()">
                                    {{ __('Edit') }}
                                </button>

                                <script>
                                function myFunction() {
                                confirm("Do you want to change your password!");
                                }
                                </script>
                            </div>
                        </div>
</form>
@endsection
