<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

Route::get('/', function () {
    return view('layout.homepage');
})->name('homepage')->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/milano', function () {
    return view('citta.milano');
})->name('milano')->middleware('auth');

Route::get('/chi-siamo', function () {
    return view('components.about-us');
})->name('about')->middleware('auth');

Route::prefix('/abbonamenti')->group(function () {
    Route::get('/giornaliero', function () {
    return view('abbonamenti.giorno');
    })->name('giorno');
    Route::get('/settimanale', function () {
    return view('abbonamenti.settimana');
    })->name('settimana');
    Route::get('/mensile', function () {
    $giorniDelMese = Carbon::now()->dayInMonth;
    $nomeMeseCorrente = Carbon::now()->translatedFormat('F');
    return view('abbonamenti.mese', compact('giorniDelMese', 'nomeMeseCorrente'));
    })->name('mese');
})->middleware('auth');

Route::prefix('/città')->group(function () {
    Route::get('/milano', function () {
    return view('citta.milano');
    })->name('milano');
})->middleware('auth');

Route::get('/acquista-abbonamento', function () {
    return view('noleggi.bike');
    })->name('abbonamenti')->middleware('auth');

Route::get('/pagamento', function () {
    return view('auth.check-out-view');
    })->name('pagamento')->middleware('auth');

Route::post('/pagamento/invia', function (Request $request) {
    $numeroCarta = $request->input('card_number');
    $codiceOrdine = 'RENT-' . strtoupper(substr(uniqid(), -6));
    $request->session()->forget(['carrello', 'cart', 'abbonamento', 'prodotto']);
    return redirect()->route('pagamento.successo')->with('codice', $codiceOrdine);
})->name('pagamento.invia')->middleware('auth');

Route::get('/pagamento/successo', function () {
    return view('auth.successo-ordine');
})->name('pagamento.successo')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::get('/registrazione', [AuthController::class, 'mostraRegistrazione'])->name('registrazione');
Route::post('/registra-utente', [AuthController::class, 'registra'])->name('registra.azione');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'accedi'])->name('login.azione');