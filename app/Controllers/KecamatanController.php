<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;
class KecamatanController extends BaseController
{
    public function index()
    {
        $Kecamatan = new KecamatanModel();
        $dataKecamatan = $Kecamatan->findAll();
        $page = [
            'title' => 'Data Kecamatan',
            'head' => 'Data Kecamatan',
            'kecamatan' => $dataKecamatan
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

    public function add(){
        $Data = [];
        
        $rules = [
            'kecamatan' => 'required|min_length[3]|is_unique[users.username]|max_length[100]',
            'kodepos' => 'required|min_length[5]|max_length[6]',
            'kode_wilayah' => 'required|min_length[6]|max_length[20]',

        ];
        if($this->validate($rules)){
            $kecamatan = new KecamatanModel();
            $newData = [
                'nama' => $this->request->getPost('kecamatan'),
                'kode_pos' => $this->request->getPost('kodepos'),
                'kode_wilayah' => $this->request->getPost('kode_wilayah')
            ];
            // dd($newData);
            $kecamatan->save($newData);

            return redirect()->to('/kecamatan')->with('success', 'Kecamatan berhasil ditambahkan');
        }
        else{
            $Data['validation'] = $this->validator;
        }

        return redirect()->to('/kecamatan/tambah');
    }
}
