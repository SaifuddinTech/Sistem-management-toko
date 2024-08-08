<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'data_user';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['username','password','fullname'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'username' => 'required|min_length[3]',
        'password' => 'required|min_length[3]',
        'fullname' => 'required|min_length[3]'
    ];

    protected $validationMessages   =[
        'username'	=> [
    		'required'		=> 'Username Harus di Isi',
    		'min_length'	=> 'Username Minimal 3 Karakter'
    	],
        'password'	=> [
    		'required'		=> 'Password Harus di Isi',
    		'min_length'	=> 'Password Minimal 3 Karakter'
    	],
    	'fullname'	=> [
    		'required'		=> 'Fullname Harus di Isi',
    		'min_length'	=> 'Fullname Minimal 3 Karakter'
    	],
    ];

    // Callbacks
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];

    public function getData()
    {
        $datauser = $this->user->findAll();

        return $datauser;
    }

    public function getRule()
    {
        return $this->validationRules;
    }

    public function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) return $data;
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
}
