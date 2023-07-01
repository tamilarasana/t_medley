<?php

namespace App\Http\Controllers\Auth;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (auth()->user()->role == 'user') {
            return '/dashboard/user';
        }
        if (auth()->user()->role == 'admin') {
            return '/dashboard/blogs';
        }
        if (auth()->user()->role == 'super_admin') {
            return '/dashboard/tea';
        }
        abort(403);
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

    public function showLoginForm()
    {
        $categories = Category::get();
        return view('auth.login', ['categories' =>$categories]);
    }
}
