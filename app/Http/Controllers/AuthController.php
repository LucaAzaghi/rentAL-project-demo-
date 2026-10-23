<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function mostraRegistrazione() {
        return view('auth.register'); // Assicurati di avere o creare questa vista
    }
    public function registra(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        
        return redirect()->intended('/login')->with('Grazie per esserti registrato! Ora puoi effettuare il login!');
    }
    public function accedi(Request $request)
    {
        $credenziali = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credenziali)) {
        $request->session()->regenerate();
        $nomeUtente = Auth::user()->name;
            return redirect()->intended('/')->with('Bentornato' . $nomeUtente . '!');
        }

        return back()->withErrors([
            'credenziali' => 'campo Email o Password non corretti!',
        ])->onlyInput('email');
    }
}