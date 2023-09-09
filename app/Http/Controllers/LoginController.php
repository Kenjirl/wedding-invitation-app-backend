<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function login(Request $req) {
        $credentials = $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        // dd(bcrypt('leovaniaforever'));

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect()->intended(route('admin.daftar-tamu'));
        }

        return back()->with('loginFailed', 'Username atau Password tidak cocok');
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect(route('admin.index'));
    }
}