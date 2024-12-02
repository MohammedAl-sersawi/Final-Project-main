<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected function authenticated()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/dashboard/admin');
        } elseif (Auth::guard('doctor')->check()) {
            return redirect('/dashboard/doctor');
        } elseif (Auth::guard('pharmacist')->check()) {
            return redirect('/dashboard/pharmacist');
        } elseif (Auth::guard('web')->check()) {
            return redirect('/dashboard/patient');
        }

        return redirect('/');
    }



    protected function guard()
    {
        $guard = request()->input('guard', 'web');
        return Auth::guard($guard);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware(function ($request, $next) {
            if (Auth::guard('admin')->check()) {
                return redirect('/dashboard/admin');
            } elseif (Auth::guard('doctor')->check()) {
                return redirect('/dashboard/doctor');
            } elseif (Auth::guard('pharmacist')->check()) {
                return redirect('/dashboard/pharmacist');
            } elseif (Auth::guard('web')->check()) {
                return redirect('/dashboard/patient');
            }
            return $next($request);
        })->only('showLoginForm');
    }
}
