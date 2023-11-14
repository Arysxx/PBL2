<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KecamatanController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Data Kecamatan',
            'content' => 'editor',
            'head' => 'Data Kecamatan'
        ];
        return view('adminPage/kecamatan_table', $data);
    }
}
