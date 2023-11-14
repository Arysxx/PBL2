<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EditorController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Buat Surat',
            'head' => 'Form Buat Surat'
        ];
        return view('adminPage/textEditor', $data);
    }
}
