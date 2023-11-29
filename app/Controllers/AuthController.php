<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
use App\Models\UserModel;
class AuthController extends BaseController
{
    public function index(): string
    {

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->getUserByUsername($username);

            if ($user && hash('sha256', $password) === $user['password']) {
                // Login berhasil
                // Set session atau lakukan tindakan lain yang sesuai
                session()->set('user_id', $user['id']);
                
                // Redirect ke halaman dashboard
                return redirect()->to('/dashboard');
            } else {
                // Login gagal
                // Tambahkan logika sesuai kebutuhan, misalnya tampilkan pesan kesalahan, dll.
                echo '<script>alert("Login gagal. Periksa kembali username dan password Anda.");</script>';
            }
        }
        return view('authPage/auth-login');
    }    
    public function register(): string
    {
        if($this->request->getMethod() === 'post'){
            dd($this->request->getPost());
        }
        else{
            $kecamatanModel = new KecamatanModel();
            $data['kecamatan'] = $kecamatanModel->findAll();
            return view('authPage/auth-register', $data);
        }    
    }
    public function getDesa()
    {
        $request = $this->request;
        $kecamatanId = $request->getPost('id_kecamatan');
        $desaModel = new DesaModel();
        $desaList = $desaModel->where('id_kecamatan', $kecamatanId)->findAll();
        return view('component/opsiDesa', ['desaList' => $desaList]);
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
            return redirect()->to('/')->with('error', 'reCAPTCHA validation failed. Please try again.');
        }

        // Continue with the login process
    }
    public function logout()
    {
        // Perform logout logic here
        // For example, you can unset session variables, destroy the session, etc.

        // Redirect to the home page after logout
        return redirect()->to('/');
    }
}
