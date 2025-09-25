<?php

use Illuminate\Support\Facades\Route;

Route::get('/pcr', function () {
   return ' selamat datang di website kampus pcr';
});

Route::get('/mahasiswa', function () {
   return ' hallo';
});

Route::get('/nama/{param1}', function ($param1) {
   return ' nama saya:'.$param1;
});
