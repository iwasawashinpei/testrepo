<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        if(!empty($_POST["email"]) && !empty($_POST["password"]))
        {
            $_SESSION['email'] = $_POST["email"];
            $_SESSION['password'] = $_POST["password"];
        }
        
        $this->middleware('guest')->except('logout');
    }
}
