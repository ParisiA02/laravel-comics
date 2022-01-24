<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $comic = [
            "name" => "Superman"
        ];

        return view('pages.home', compact("comic"));
    }
}
