<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrPageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/qr', [QrPageController::class, 'show']);

Route::get('/test', function () {
    return 'Working!';
});
