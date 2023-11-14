<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DesaController extends BaseController
{
    public function index()
    {
        $page = [
            'title' => 'Data Desa',
            'head' => 'Data Desa'
        ];
        return view('adminPage/desa_table', $page);
    }
    public function add_desa()
    {
        $page = [
            'title' => 'Tambah Desa',
            'head' => 'Tambah Desa'
        ];
        return view('adminPage/add_desa_form', $page);
    }
}
