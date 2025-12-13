<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mail');
});

Route::resource('mails', MailController::class);

Route::resource('users', UserController::class);
Route::post('/register',[UserController::class, 'register'])->name('register');


Route::post('/send-email', [MailController::class,'SendEmail'])
->name('send-email');
