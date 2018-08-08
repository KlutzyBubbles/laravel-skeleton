<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return View('welcome');
    }

    public function contact(){
        return View('contact');
    }

    public function about(){
        return View('about');
    }
}
