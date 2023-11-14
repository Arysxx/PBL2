<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KecamatanController extends BaseController
{
    public function index()
    {

        $page = [
            'title' => 'Data Kecamatan',
            'head' => 'Data Kecamatan'
        ];
        return view('adminPage/kecamatan_table', $page);
    }

    public function add_kecamatan()
    {
        $page = [
            'title' => 'Tambah Kecamatan',
            'head' => 'Tambah Kecamatan'
        ];
        return view('adminPage/add_kecamatan_form', $page);
    }
}
