<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|string|min:6|max:12',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            // 3️⃣ Regenerate session untuk keamanan
            $request->session()->regenerate();

            // 4️⃣ Redirect ke dashboard admin
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'username' => 'Wrong username or password',
        ])->onlyInput('username');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Login berhasil, selamat datang!');
    }
}
