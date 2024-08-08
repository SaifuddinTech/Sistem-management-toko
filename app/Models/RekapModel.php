<?php

namespace App\Models;
use CodeIgniter\Model;

class RekapModel extends Model
{
    protected $table            = 'data_rekap';
    protected $primaryKey       = 'id_rekap';
    protected $allowedFields    = ['ket','nomin','pemba','penja'];

    // Validation
    protected $validationRules      = [
        'ket'       => 'required|min_length[3]',
        'nomin'          => 'required|min_length[3]',
        'pemba'       => 'required|min_length[3]',
        'penja'               => 'required|min_length[3]',
    ];
    protected $validationMessages   = [
        'ket' => [
            'required'      => 'Keterangan harus jelas',
            'min_length'    => 'Keterangan Harus Di Isi Minimal 4 Karakter'
        ],
        'nomin'    => [
            'required'      => 'Nominal harus jelas',
            'min_length'    => 'Nominal Harus Di Isi Minimal 4 Karakter'
        ],
        'pemba' => [
            'required'      => 'Pembayaran harus jelas',
            'min_length'    => 'Pembayaran Harus Di Isi Minimal 4 Karakter'
        ],
        'penja'         => [
            'required'      => 'Penanggung Jawab harus jelas',
            'min_length'    => 'Penanggung Jawab Harus Di Isi Minimal 4 Karakter'
        ],
    ];

    public function getRekap()
    {
        $datarekap = $this->rekap->findAll();
        return $datarekap;
    }

    public function getRule()
    {
        return $this->validationRules;        
    }  

}
