<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $user
     * @return \Illuminate\Contracts\Validation\Validator
     */
   
    public function edit(User $user)
    {   
        return view('admin.users.edit', ['user' => $user]);
    }
    

    
        public function update(User $user)
    { 
        $attributes = request()->validate([
            'title' => ['required','string'],
            'name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users','email')->ignore($user->id)],
            'phone' => ['required'],
            'gender'=> ['required'],
            'address'=> ['present'],
            'country'=> ['string'],
            'dob'=> ['required','date'],
            'subscribe'=> ['boolean'],

        ]);
         $attributes['dob'] = Carbon::parse($attributes['dob']);
         $user->updateOrFail($attributes);
         
        return view('/updated');
    }

}
