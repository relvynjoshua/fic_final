<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:5',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'role' => $request->role,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('login');
    }

    // Handle user login
    public function login(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string|min:5',
    ]);

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user(); // Get the authenticated user

        // Check the role of the user
        if ($user->role === 'admin') {
            return redirect()->route('dashboard'); // Redirect to dashboard if admin
        } else {
            return redirect()->route('form.page'); // Redirect to form page for other roles
        }
    }

    return back()->withErrors(['username' => 'Invalid credentials.']);
}


    // Handle logout
    public function logoutAccount()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }

    // Show user profile
    public function showUser()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    // Update user account
    public function updateAccount(Request $request)
    {
        $user = Auth::user();
        // Perform user account update logic
    }
}