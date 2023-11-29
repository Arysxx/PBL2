<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesaModel;
class DesaController extends BaseController
{
    public function index()
    {
        $desa = new DesaModel();
        $dataDesa = $desa->findAll();
        $data = [
            'title' => 'Data Desa',
            'head' => 'Data Desa',
            'data' => $dataDesa
        ];
        return view('adminPage/Desa/desa_table', $data);
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
        return view('adminPage/Desa/add_desa_form', $page);
    }
}
