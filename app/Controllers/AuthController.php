<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
class AuthController extends BaseController
{
    public function index(): string
    {
        return view('authPage/auth-login');
    }    
    public function register(): string
    {
        $kecamatanModel = new KecamatanModel();
        $data['kecamatan'] = $kecamatanModel->findAll();
        return view('authPage/auth-register', $data);
    }    
    public function getDesa()
    {
        $request = $this->request;
        $kecamatanId = $request->getPost('kecamatan_id');

        $desaModel = new DesaModel();
        $desaList = $desaModel->where('id_kecamatan', $kecamatanId)->findAll();

        echo view('component/opsiDesa', ['desaList' => $desaList]);
    }

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
