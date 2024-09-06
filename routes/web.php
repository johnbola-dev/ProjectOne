<?php

use App\Http\Controllers\AuthLoginController;
use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegister;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthLoginController::class, 'index']);

Route::get('livewire-login', AuthLogin::class);
Route::get('register', AuthRegister::class);

Route::get('counter', Counter::class);
// MVC - Model - View - Controller
