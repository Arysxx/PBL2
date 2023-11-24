<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $User = new UserModel();
        $userData = $User->findAll();
        $data = [
            'title' => 'Data Pengguna',
            'head' => 'Data Pengguna',
            'data' => $userData
        ];

        return view('adminPage/user_table', $data);
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

        // if ($this->request->getVar() === 'post') {
            $rules = [
                'username' => 'required|min_length[3]|is_unique[users.username]|max_length[100]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'nomor_telpon' => 'required|min_length[10]|max_length[20]',
                'password' => 'required|min_length[6]|max_length[255]',
            ];

            if ($this->validate($rules)) {
                $model = new UserModel();
                $password = $this->request->getPost('password');
                $newData = [
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'nomor_telpon' => $this->request->getPost('nomor_telpon'),
                    'password' => $hashedPassword = hash('sha256', $password),
                    'role' => 'admin-desa',
                    'id_desa' => $this->request->getPost('desa')
                ];
                // dd($newData);

                $model->save($newData);

                // Sesuaikan alur navigasi sesuai kebutuhan aplikasi Anda.
                return redirect()->to('/')->with('success', 'User registered successfully');
            } else {
                $data['validation'] = $this->validator;
            }
        // }

        return redirect()->to('/register');
    }
}
