<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{    
    protected $user;
    public function __construct()
    {
        $this->user = new UserModel;
    }
    public function index()
    {
        $data ['data'] = [
            'menu'  => 'Data User',
            'title' => 'Data User',
            
        ];
        $data['datauser'] = $this->user->findAll();  
        return view ('view/user', $data);
    }
    // metod untuk save data
    public function tambah()
    {
        $getRule = $this->user->getRule();
        $this->user->setValidationRules($getRule);

        $dtuser=[
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'fullname'          => $this->request->getPost('fullname'),
           
        ];

        if(!$this->user->insert($dtuser)) {
            return redirect()->back()->withInput()->with('errors', $this->user->errors());
        }
        return redirect()->back()->with('success', 'User Berhasil di Tambahkan');   
    }

    public function delete($id)
    {
        $this->user->delete($id);
        return redirect()->back()->with('success', 'Data Berhasil di Hapus !');
    }
}