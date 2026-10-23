<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function login() {
    return view('auth.login');
    }
    public function register() {
    return view('auth.register');
    }
    public function homepage() {
    return view('layout.homepage');
    }
    public function giorno() {
    return view('abbonamenti.giorno');
    }
    public function settimana() {
    return view('abbonamenti.settimana');
    }
    public function mese() {
    return view('abbonamenti.mese');
    }
    public function milano() {
    return view('citta.milano');
    }
    public function abbonamento() {
    return view('noleggi.bike');
    }
    public function pagamento() {
    return view('auth.check-out-view');
    }
}
