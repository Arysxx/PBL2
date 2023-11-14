<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $page = [
            'title' => 'Data Penduduk',
            'head' => 'Data Penduduk'
        ];
        return view('adminPage/dashboard', $page);
    }
    public function dashboard(): string
    {
        return view('adminPage/index');
    }

    public function layout(): string
    {
        return view('component/file');
    }

}
