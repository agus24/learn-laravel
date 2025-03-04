<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $check = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if ($check) {
            return 'login sukses';
        }

        return 'login gagal';
    }
}
