<?php

namespace App\Models;
use CodeIgniter\Model;


class KaryawanModel extends Model
{
    protected $table            = 'data_karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $allowedFields    = ['nama','posisi','status'];

    // Validation
    protected $validationRules      = [
        'nama'          => 'required|min_length[3]',
        'posisi'        => 'required|min_length[3]',
        'status'        => 'required|min_length[3]',
    ];
    protected $validationMessages   = [
    	'nama'	=> [
    		'required'		=> 'Nama Karyawan Harus di Isi',
    		'min_length'	=> 'Nama Karyawan Minimal 3 Karakter'
    	],
        'posisi'	=> [
    		'required'		=> 'Posisi Harus di Isi',
    		'min_length'	=> 'Posisi Minimal 3 Karakter'
    	],
    	'status'	=> [
    		'required'		=> 'Status Harus di Isi',
    		'min_length'	=> 'Status Minimal 3 Karakter'
    	],
    ];
    

    public function getKaryawan()
    {
        $datakaryawan = $this->karyawan -> findAll();

        return $datakaryawan;
    }

    public function getRule()
    {
        return $this->validationRules;        
    }  


}

    



