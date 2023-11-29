<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KecamatanModel;

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

        return view('adminPage/User/user_table', $data);
    }
    public function add_user()
    {            
        $kecamatanModel = new KecamatanModel();

        $data = [
            'title' => 'Tambah Pengguna',
            'head' => 'Tambah Pengguna',
            'kecamatan' => $kecamatanModel->findAll()
        ];

        return view('adminPage/User/add_user_form', $data);
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
    public function insert()
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
                return redirect()->to('/user')->with('success', 'User registered successfully');
            } else {
                $data['validation'] = $this->validator;
            }
        // }

        return redirect()->to('/user/tambah');
    }
    public function edit($id){
        $userData = new UserModel();
        $kecamatanModel = new KecamatanModel();
        $data = [
            'title' => 'Edit Kecamatan',
            'head' => 'Edit  Kecamatan',
            'user' => $userData->find($id),
            'kecamatan' => $kecamatanModel->findAll()    
        ];
        // dd($data);
        return view('adminPage/User/edit_user_form', $data);
    }
    public function delete($id){
        $user = new UserModel();
        $user->delete($id);
        return redirect()->to('/user');
    }
}
