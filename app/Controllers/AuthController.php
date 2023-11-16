<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index(): string
    {
        return view('authPage/auth-login');
    }    
    public function register(): string
    {
        return view('authPage/auth-register');
    }    
    // public function index()
    // {
    //     return view('authPage/auth-login');
    // }
    public function PendudukLogin(): string 
    {
        return view('authPage/PendudukAuth');
    }
    public function lupaPassword(): string 
    {
        return view('authPage/LupaPassword');
    }
}
