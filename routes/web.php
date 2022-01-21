<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = [
        [
            "name" => "Fumetto 1",
            "image" => ""
        ]
    ];
    return view('pages.home');
});
