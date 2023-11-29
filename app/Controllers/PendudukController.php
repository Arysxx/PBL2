<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PendudukController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Data Penduduk',
            'head' => 'Data Penduduk'
        ];
        return view('adminPage/Penduduk/penduduk_table', $data);
    }

    public function tambah_penduduk()
    {
        $data = [
            'title' => 'Tambah Penduduk',
            'head' => 'Tambah Penduduk'
        ];
        return view('adminPage/Penduduk/add_penduduk_form', $data);
    }
}
