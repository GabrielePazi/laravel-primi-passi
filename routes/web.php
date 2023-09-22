<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "users" => [
            [
                "name" => 'Giovanni',
                "lastname" => 'Verdi',
                "age" => 28
            ],
            [
                "name" => 'Mario',
                "lastname" => 'Rossi',
                "age" => 34
            ],
            [
                "name" => 'Luigi',
                "lastname" => 'Bianchi',
                "age" => 16
            ]
        ]
    ];
    return view('home', $data);
});
