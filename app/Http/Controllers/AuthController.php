<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller{
    public function register(Request $request){
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]
        );
        $user = User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]
        );
        Auth::login($user);
        return redirect()->route('/');
        }

    public function login(Request $request){
        $credentials = $request-> validate([
            'email' => 'required|string|email',
            'password' => 'required|min:6',
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('/view');
        }
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }


    public function showlogin(){
        return view('auth.login');
    }
    public function showregister(){
        return view('auth.register');
    }

}