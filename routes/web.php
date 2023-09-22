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
    return view('home');
});


Route::get('/products', function () {
    $data = [
        "productsList" => [
            [
                "name" => 'Laptop Acer Aspire 5',
                "image" => 'https://www.europc.com/it/64980-large_default/acer-aspire-5-a517-52g-72rr-argento-intel-core-i7-1165g7-16gb-ram-1tb-ssd-173-1920x1080-fhd-2gb-nvidia-geforce-mx450-acer-1-anno-di-garanzia-inglese-tastiera-157286.jpg',
                "price" => '600.00€'
            ],
            [
                "name" => 'Scheda Video Nvidia GeForce RTX 3090',
                "image" => 'https://m.media-amazon.com/images/I/61wbV8oqAbL.jpg',
                "price" => '1500.00€'
            ],
            [
                "name" => 'Processore Intel Core i7',
                "image" => 'https://media.istockphoto.com/id/458625657/it/foto/processore-intel-core-i7.jpg?s=1024x1024&w=is&k=20&c=VUrG33k2fPffw7LOYmVXCgCvAu56cUjxHOBALMmxxCo=',
                "price" => '500.00€'
            ]
        ]
    ];
    return view('products', $data);
});

Route::get('/login', function () {
    $data = [
        "inputName" => '',
        "inputLastname" => '',
        "inputEmail" => null,
        "inputAddress" => ''
    ];
    return view('login', $data);
});
