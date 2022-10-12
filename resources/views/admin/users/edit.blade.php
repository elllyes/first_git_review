
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }} : {{$user->email}}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/users/{{$user->id}}">
                        @csrf
                        @method('PATCH')
                                
                        <x-form.select name="title" label="Title" type="text" value="{{ old('title', $user->title) }}"/>
                        <x-form.inputt2 name="name" label="Name" type="text" value="{{ old('name', $user->name) }}"/>
                        <x-form.inputt2 name="last_name" label="Last name" type="text" value="{{ old('last_name', $user->last_name) }}"/>
                        <x-form.inputt2 name="email" label="Email" type="email" value="{{ old('email', $user->email) }}"/>

                        <div class="row mb-3 mt-4">
                            <label for="edit_pass" class="col-md-4 col-form-label text-md-end">Password</label>
                                 <div class="col-md-6">
                                     <a class="btn btn-danger"  role="button" href="/admin/users/{{$user->id}}/edit-password" onclick="myFunction()">Edit password</a>
                                 
                                </div>
                        </div>

                        <x-form.inputt2 name="phone" label="Phone number" type="text" value="{{ old('phone', $user->phone) }}"/>
                        <x-form.selectGender name="gender" label="Select gender"  value="{{ old('gender', $user->gender) }}"/> 
                        <x-form.textarea name="address" label="Address"  value="{{ old('address', $user->address) }}"/>
                        <x-form.country name="country" label="Country" type="text" value="{{ old('country', $user->country) }}"/>
                        <x-form.dateOfBirth name="dob" label="Date of birth" type="text" value="{{ old('dob',$user->dob) }}"  />
                        <x-form.checkbox name="subscribe" label="Want to subscribe?"  value="{{ old('subscribe', $user->subscribe) }}"/>     
                   
                                
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger" onclick="myFunction1()">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            <script>
                function myFunction() 
                {
                    if (confirm("Do you want to change your password!")== true) {
                        return true;
                    };
                    else {
                        return false;
                    }
                }
                function myFunction() {
  let text;
  if (confirm("Press a button!") == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
                function myFunction1() 
                {
                    confirm("Do you want to update your data!");
                }
            </script>
            
@endsection

