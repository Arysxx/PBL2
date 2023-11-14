<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PendudukController extends BaseController
{
    public function index()
    {

        $page = [
            'title' => 'Data Penduduk',
            'head' => 'Data Penduduk'
        ];
        return view('adminPage/penduduk_table', $page);
    }

    public function add_kecamatan()
    {
        $page = [
            'title' => 'Tambah Penduduk',
            'head' => 'Tambah Penduduk'
        ];
        return view('adminPage/add_kecamatan_form', $page);
    }
}
