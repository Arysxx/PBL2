<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $page = [
            'title' => 'Data Pengguna',
            'head' => 'Data Pengguna'
        ];

        return view('adminPage/user_table', $page);
    }
    public function add_user()
    {
        $page = [
            'title' => 'Tambah Pengguna',
            'head' => 'Tambah Pengguna'
        ];

        return view('adminPage/add_user_form', $page);
    }
    public function register()
    {
        $data = [];

        if ($this->request->getPost() === 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[100]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'nomor_telpon' => 'required|min_length[10]|max_length[20]',
                'password' => 'required|min_length[6]|max_length[255]',
            ];

            if ($this->validate($rules)) {
                $model = new UserModel();

                $newData = [
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'nomor_telepon' => $this->request->getPost('nomor_telpon'),
                    'password' => $this->request->getPost('password'),
                    'role' => 'admin-desa',
                    'id-desa' => 1
                ];

                $model->save($newData);

                // Sesuaikan alur navigasi sesuai kebutuhan aplikasi Anda.
                return redirect()->to('/')->with('success', 'User registered successfully');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('authPage/auth-register', $data);
    }
}
