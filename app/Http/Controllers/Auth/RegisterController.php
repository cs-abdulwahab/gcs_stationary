<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    // protected $redirectTo = '/home';
    public function redirectTo()
    {
        switch(Auth::user()->usertype){
            case 'admin':
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
            case 'rentee':
                    $this->redirectTo = '/';
                return $this->redirectTo;
                break;
            case 'renter':
                $this->redirectTo = '/renter';
                return $this->redirectTo;
                break;
            
                default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
            }        
     }           

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
            'user-id' => ['required', 'string', 'min:4'],
            'name' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required|regex:/(03)[0-9]{9}/',          
            'nic' => ['required', 'string','min:13'],
            'address' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user-id' => $data['user-id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'nic' => $data['nic'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'usertype' => 'rentee',
        ]);
       
    }
}
