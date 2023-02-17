<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $redirectAfterLogout = '/login';
    protected $redirectAfterLogin = '/home';

    public function login(): View
    {
        return view('auth.login');
    }

    public function loginPost(Request $request): RedirectResponse
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
   
        if (Auth::attempt([
            'login' => request()->input('login'),
            'password' => request()->input('password')],
            request()->input('remember'),
        )) {
            return redirect(property_exists($this, 'redirectAfterLogin') ? $this->redirectAfterLogin : '/');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        Session::flush();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    public function domain() {
        if (Auth::check()) return redirect()->route('home');
        else return redirect()->route('login');
    }
}