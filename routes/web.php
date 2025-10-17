<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mail');
});

Route::resource('mails', MailController::class);


Route::post('/send-email', [MailController::class,'SendEmail'])
->name('send-email');