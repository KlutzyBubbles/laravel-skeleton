<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function categories() {
        return view('pages.categories');
    }

    public function movies() {
        return view('pages.movies');
    }
}
