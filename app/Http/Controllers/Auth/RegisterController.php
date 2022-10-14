<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class RegisterController extends Controller
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' =>['required','string'],
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['string','required'],
            'gender'=> ['string','required'],
            'address'=> ['present'],
            'country'=> ['string'],
            'dob'=> ['required','date'],
            'subscribe'=> ['boolean'],
            'terms'=> ['boolean', 'required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
             $attributes=[     
            'title'=> $data['title'],
            'name' => ucwords($data['name']),
            'last_name' =>ucwords($data['last_name']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'=> $data['phone'],
            'gender'=> $data['gender'],
            'address'=> $data['address'],
            'country'=> $data['country'],
            'dob'=> $data['dob'],
            'subscribe'=> $data['subscribe'],
            'terms'=> $data['terms']
        ];
        return $user = User::create($attributes);
    }
    
}
