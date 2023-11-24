<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;
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
        $kecamatanModel = new KecamatanModel();
        $data['kecamatan'] = $kecamatanModel->findAll();

        $page = [
            'title' => 'Tambah Desa',
            'head' => 'Tambah Desa',
            'data' => $data
        ];
        return view('adminPage/add_desa_form', $page);
    }
}
