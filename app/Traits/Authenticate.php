<?php

namespace App\Traits;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

trait Authenticate
{
    function createAndAuthenticateUser(Request $request): void
    {
        $account = Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('account')->login($account);
    }

    function loginAccount(Request $request, $remember = false)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('account')->attempt($credentials, $remember)) {
            return true;
        }
    }

    function logoutAccount()
    {
        if (Auth::guard('account')->check()) {
            Auth::guard('account')->logout();
        }
    }
}
