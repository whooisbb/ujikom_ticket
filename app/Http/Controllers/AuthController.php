<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.registration');
    }

    public function registration_post(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'is_role' => 'required'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('login')->with('success', 'Register Success');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->is_role == '2') {
                return redirect()->intended('superadmin/dashboard');
            } elseif ($user->is_role == '1') {
                return redirect()->intended('admin/dashboard');
            } elseif ($user->is_role == '0') {
                 return redirect()->intended('user/dashboard');
            } else {
                return redirect('login')->with('error', 'no available email please check.');
            }
        } else {
            return redirect()->back()->with('error', 'Login Failed. Please check your credentials.');
        }
    }

    public function forgot()
    {
        return view('auth.forgot');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
