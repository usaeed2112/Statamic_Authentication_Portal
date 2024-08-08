<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAccountRequest;
use App\Http\Requests\RegisterAccountRequest;
use App\Traits\Authenticate;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use Authenticate;
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(RegisterAccountRequest $request)
    {
        $this->createAndAuthenticateUser($request);

        return redirect()->route('dashboard');
    }

    public function login(LoginAccountRequest $request)
    {


        $status = $this->loginAccount($request, $request->remember ? true : false);

        if ($status) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        $this->logoutAccount();
        return redirect()->route('login');
    }
}
