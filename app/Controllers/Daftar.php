<?php

namespace App\Controllers;
use Config\Services;
use App\Models\UserModel;

class Daftar extends BaseController
{
    // protected $session, $users;
    // public function __construct()
    // {
    //     // start session
    //     $this->session = Services::session();
    //     $this->users = new UserModel;
    // }

    public function index()
    {
        $data['data'] = [
            'title' => 'Daftar',
        ];
        return view('view/buatakun',$data);
    }

}