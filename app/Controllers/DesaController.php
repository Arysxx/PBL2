<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
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
    public function tambah_desa()
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
    
    public function insert(){
        $Data = [];
        
        $rules = [
            'nama' => 'required|min_length[3]|is_unique[desa.nama]|max_length[100]',
            'kodepos' => 'required|min_length[5]|max_length[6]',
            'kode_wilayah' => 'required|min_length[6]|max_length[20]',
        ];
        if($this->validate($rules)){
            $kecamatan = new KecamatanModel();
            $newData = [
                'nama' => $this->request->getPost('desa'),
                'kode_pos' => $this->request->getPost('kodepos'),
                'kode_wilayah' => $this->request->getPost('kode_wilayah'),
                'id_kecamatan' => $this->request->getPost('kecamatan')
            ];
            dd($newData);
            $kecamatan->save($newData);

            return redirect()->to('/desa')->with('success', 'Kecamatan berhasil ditambahkan');
        }
        else{
            $Data['validation'] = $this->validator;
        }
        return redirect()->to('/desa/tambah');
    }
    public function edit($id){
        $DataDesa = new DesaModel();
        $DataKecamatan = new KecamatanModel();
        $data = [
            'title' => 'Edit Desa',
            'head' => 'Edit  Desa',
            'kecamatan' => $DataKecamatan->findAll(),
            'desa' => $DataDesa->find($id)    
        ];
        // dd($data);
        return view('adminPage/Desa/edit_desa', $data);
    }

    public function update(){
        $desa = new DesaModel();
        $newData = [
            'nama' => $this->request->getPost('desa'),
            'kode_pos' => $this->request->getPost('kodepos'),
            'kode_wilayah' => $this->request->getPost('kode_wilayah'),
            'id_kecamatan' => $this->request->getPost('kecamatan')
        ];
        $desa->update($this->request->getPost('id'), $newData);
        return redirect()->to('/desa');
    }

    public function delete($id){
        $desa = new DesaModel();
        $desa->delete($id);
        return redirect()->to('/desa');
    }

}



