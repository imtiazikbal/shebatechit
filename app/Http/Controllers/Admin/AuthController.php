<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email    = env('ADMIN_EMAIL',    'admin@shebatech.com');
        $password = env('ADMIN_PASSWORD', 'shebatech@admin');

        if ($request->email === $email && $request->password === $password) {
            session(['admin_logged_in' => true, 'admin_email' => $request->email]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget(['admin_logged_in', 'admin_email']);
        return redirect()->route('admin.login');
    }
}
