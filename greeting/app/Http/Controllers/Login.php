<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login(Request $request)
    {
        if ($request->username == 'admin' && $request->password == 'admin') {
            return view('welcome_admin');
        }

        return view('login_error');
    }
    //
}
