<?php

use App\Http\Controllers\AuthLoginController;
use App\Livewire\Auth\AuthLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthLoginController::class, 'index']);

Route::get('livewire-login', AuthLogin::class);
// MVC - Model - View - Controller
