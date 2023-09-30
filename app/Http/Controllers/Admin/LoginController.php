<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('admin.auth.login');
    }

    public function login(Request $request) {
       $formFields = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
       ]);
       if (Auth::attempt($formFields)) {
        $request->session()->regenerate();

        return redirect()->intended('admin/dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('admin/login');
    }
}
