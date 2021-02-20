<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    // protected function authenticated($request, $user){
        

    //     if($user->hasRole('admin')){
    //         return redirect(route('admin'));
    //     }
    //      elseif($user->hasRole('renter')) {
    //         return redirect(route('renter'));
    //     }
    //     elseif($user->hasRole('rentee')) {
    //         return redirect(route('home'));
    //     }
    // }
}
