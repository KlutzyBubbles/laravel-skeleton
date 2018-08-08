<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return View('profile');
    }

    public function register() {
        return View('register');
    }

    public function login() {
        return View('login');
    }

    public function logout() {
        return View('logout');
    }
}
