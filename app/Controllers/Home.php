<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard_new');
    }

    public function index_new(): string
    {
        return view('dashboard_new');
    }

    public function login(): string
    {
        return view ('auth/login');
    }

    public function register(): string
    {
        return view ('auth/register');
    }
}
