<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        $name = "Lee Tzilantonis";
        $grade = rand(0, 100);
        return view('pages.about', compact('name', 'grade'));
    }
}
