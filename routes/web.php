<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;


Route::get('/pcr', function () {
   return ' selamat datang di website kampus pcr';
});

Route::get('/mahasiswa', function () {
   return ' hallo';
});

Route::get('/nama/{param1}', function ($param1) {
   return ' nama saya:'.$param1;
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

