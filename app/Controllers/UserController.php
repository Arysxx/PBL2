<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
}
