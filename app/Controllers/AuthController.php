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

    public function login()
    {
        // Other login logic

        // Validate reCAPTCHA
        $recaptcha = $this->request->getVar('g-recaptcha-response');

        $recaptchaResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . config('Recaptcha')->secretKey . "&response=" . $recaptcha);

        $recaptchaData = json_decode($recaptchaResponse);

        if (!$recaptchaData->success) {
            // reCAPTCHA validation failed
            return redirect()->to('/login')->with('error', 'reCAPTCHA validation failed. Please try again.');
        }

        // Continue with the login process
    }

}
