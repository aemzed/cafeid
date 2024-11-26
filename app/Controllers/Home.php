<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function login(): string
    {
        return view ('auth/login');
    }
}
