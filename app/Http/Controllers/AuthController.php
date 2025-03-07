<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
public function login() {
    return view('auth.login');
}

public function register() {
    return view('auth.register');
}

public function register_logic(Request $request) {
    $validate = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    Auth::login($user);

    return redirect()->route('tasks.index')->with('success', 'Register success');
}

public function login_logic(Request $request) {
    $validate = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('tasks.index')->with('success', 'Login success');
    }

    return redirect()->back()->with('error', 'Login failed');
}

public function logout() {
    Auth::logout();

    return redirect()->route('home')->with('success', 'Logout success');
}
}
