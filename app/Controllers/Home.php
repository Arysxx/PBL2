<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function home(): string
    {
        return view('adminPage/index');
    }

    public function layout(): string
    {
        return view('component/file');
    }

}
