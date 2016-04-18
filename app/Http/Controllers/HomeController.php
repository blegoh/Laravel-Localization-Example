<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App;
use URL;


class HomeController extends Controller
{
    public function index($locale = 'en')
    {
        App::setLocale($locale);
        return view('home');
    }
}
