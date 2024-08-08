<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    protected $karyawan;
    public function __construct()
    {
    $this->karyawan = new KaryawanModel();
    }

    public function index()
    {

        $data ['data'] = [
            'menu'  => 'Data Karyawan',
            'title' => 'karyawan',

        ];
        $data['datakaryawan'] = $this->karyawan->paginate(3, 'karyawan');
        $data['datapager'] = $this->karyawan->pager;
        $data['nomor'] = nomor($this->request->getVar('page_karyawan'), 3);
        
        return view('view/karyawan', $data);
    }

    public function tambah()
    {
        $data ['data'] = [
            'menu'  => '',
            'title' => 'Tambah Karyawan',
            ];

        return view('view/crud_karyawan/tambah_karyawan', $data);
    }

    // metod untuk save data
    public function save()
    {
        $getRule = $this->karyawan->getRule();
        $this->karyawan->setValidationRules($getRule);

        $dtkaryawan=[
            'id_karyawan' => $this->request->getPost('id_karyawan'),
            'nama'        => $this->request->getPost('nama'),
            'posisi'      => $this->request->getPost('posisi'),
            'status'      => $this->request->getPost('status'),
        ];

        if(!$this->karyawan->insert($dtkaryawan)) {
            return redirect()->back()->withInput()->with('errors', $this->karyawan->errors());
        }
        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');   
    }

    public function edit($id)
    {
        $data['data'] = [
            'menu'  => '',
            'title' => 'Ubah Data Penerbit',
        ];

        $data ['datakaryawan'] = $this->karyawan->where('id_karyawan', $id)->first();
        return view('view/crud_karyawan/edit_karyawan', $data);
    }

    public function update($id)
    {
        $getRule = $this->karyawan->getRule();
        $this->karyawan->setValidationRules($getRule);

        $dtkaryawan=[
            'id_karyawan' => $id,
            'nama'        => $this->request->getVar('nama'),
            'posisi'      => $this->request->getVar('posisi'),
            'status'      => $this->request->getVar('status'),
        ];
        
        if (!$this->karyawan->update($id ,$dtkaryawan)) {
            return redirect()->back()->withInput()->with('errors', $this->karyawan->errors());
        }
        else  {
            return redirect()->back()->with('success', 'Data Berhasil di Edit !');     
        } 
    }

    public function delete($id)
    {
        $this->karyawan->delete($id);
        return redirect()->back()->with('success', 'Data Berhasil di Hapus !');
    }

}