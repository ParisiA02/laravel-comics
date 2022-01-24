<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@home");
Route::get('details', "DetailController@detail") -> name("details");