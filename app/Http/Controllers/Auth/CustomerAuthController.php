<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|string|min:6|max:12',
        ]);

        if (Auth::guard('customer')->attempt($credentials)) {
        // 3️⃣ Regenerate session untuk keamanan
        $request->session()->regenerate();

        // 4️⃣ Redirect ke dashboard customer
        return redirect()->route('user.home')->with('success', 'Login berhasil, selamat datang!');
    }

    return back()->withErrors([
        'username' => 'Wrong username or password',
    ])->onlyInput('username');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|string|min:6|max:12',
            'email' => 'required|email|unique:customer',
            'phone' => 'required|string|min:12|max:12',
            'address' => 'required|string|max:200',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $customer = Customer::create($validated);

        Auth::guard('customer')->login($customer);

        $request->session()->regenerate();

        return redirect()->route('user.home')->with('success', 'Registrasi berhasil, silakan mulai belanja!');
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.login')->with('success', 'Berhasil logout!');
    }
}
