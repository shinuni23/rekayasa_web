<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tugas', [
        'nama' => 'Nur Aeni',
        'nim' => '251011701051',
        'prodi' => 'Sistem Informasi'
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});