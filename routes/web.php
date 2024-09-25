<?php

use App\Http\Controllers\loginController;
use App\Livewire\App\EspaceConnecte;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'logUser'])->name('login');

Route::get('/register', [loginController::class, 'register'])->name('register');
Route::post('/register', [loginController::class, 'storeUser'])->name('storeUser');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('app');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/framework', function () {
    return view('welcome');
});

Route::get('/composants', function() {
    return view('composants');
});

Route::prefix('/app')
->middleware(['auth', 'verified'])
->group(function() {
    Route::get('/', EspaceConnecte::class)->name('app');
});
