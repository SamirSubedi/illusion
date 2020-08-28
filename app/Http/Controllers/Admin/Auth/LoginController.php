<?php

namespace App\Http\Controllers\Admin\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function showLoginForm()
    {
        return view('admin.login');
    }
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

      

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

      

        return $this->sendFailedLoginResponse($request);
    }

    public function __construct()
    {
        //specifying guard as admin
        $this->middleware('guest:admin')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }

}