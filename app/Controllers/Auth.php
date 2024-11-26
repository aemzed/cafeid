<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('auth/login'); // Pastikan file ini ada
    }

    public function register(): string
    {
        return view('auth/register'); // Pastikan file ini juga ada
    }
}

