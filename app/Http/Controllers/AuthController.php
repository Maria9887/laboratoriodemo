<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('catalogoempleadosatendieron')
                    ->where('username', $username)
                    ->first();

        if ($user && $user->password === $password) {
            // Autenticación exitosa
            return redirect()->route('dashboard');
        } else {
            // Autenticación fallida
            return redirect()->route('login')->with('error', 'Credenciales incorrectas');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}