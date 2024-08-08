<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\RekapModel;

class Rekap extends BaseController
{
    protected $rekap;
    public function __construct()
    {
        $this->rekap = new RekapModel;
    }

    public function index()
    {
        $data['data']=[
            'menu' => 'Rekap Data',
            'title' => 'Rekap Data',
        ];

        $data ['datarekap'] = $this->rekap->findAll();
        return view('view/rekap', $data);
    }

    public function tambah()
    {
        $data['data'] = [
            'menu' => '',
            'title' => 'Tambah Data',
        ];
        return view('view/crud/tambahdata_rekap', $data);
    }

    public function simpan()
    {
        $getRule = $this->rekap->getRule();
        $this->rekap->setValidationRules($getRule);

        $dtrekap=[
            'id_rekap'      => $this->request->getPost('id_rekap'),
            'ket'           => $this->request->getPost('ket'),
            'nomin'         => $this->request->getPost('nomin'),
            'pemba'         => $this->request->getPost('pemba'),
            'penja'         => $this->request->getPost('penja'),
        ];

        if(!$this->rekap->insert($dtrekap)) {
            return redirect()->back()->withInput()->with('errors', $this->rekap->errors());
        }
        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');   
    }

    public function edit($id)
    {
        $data['data'] = [
            'menu'  => '',
            'title' => 'Ubah Data Penerbit',
        ];

        $data ['datarekap'] = $this->rekap->where('id_rekap', $id)->first();
        return view('view/crud/editedata_rekap', $data);
    }

    public function update($id)
    {
        $getRule = $this->rekap->getRule();
        $this->rekap->setValidationRules($getRule);

        $dtrekap=[
            'id_rekap'      => $this->request->getVar('id_rekap'),
            'ket'    => $this->request->getVar('ket'),
            'nomin'       => $this->request->getVar('nomin'),
            'pemba'    => $this->request->getVar('pemba'),
            'penja'            => $this->request->getVar('penja'),
        ];

        if (!$this->rekap->update($id ,$dtrekap)) {
            return redirect()->back()->withInput()->with('errors', $this->rekap->errors());
        }
        else  {
            return redirect()->back()->with('success', 'Data Berhasil di Edit !');     
        } 
    }

    public function delete($id)
    {
        $this->rekap->delete($id);
        return redirect()->back()->with('success', 'Data Berhasil di Hapus !');
    }
}