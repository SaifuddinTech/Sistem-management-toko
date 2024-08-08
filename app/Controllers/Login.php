<?php

namespace App\Controllers;
use Config\Services;
use App\Models\UserModel;

class Login extends BaseController
{
    protected $session, $users;
    public function __construct()
    {
        // start session
        $this->session = Services::session();
        $this->users = new UserModel;
    }

    public function index()
    {
        $data['data'] = [
            'title' => 'Daftar',
        ]; 
        if ($this->session->isLoggedIn) {
            return redirect()->to('dashboard');
        }
        return view('view/login', $data);
    }

    public function login()
    {
        $rules = [
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[3]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('login')->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = $this->users->where('username', $this->request->getPost('username'))->first();
        
        if ( is_null($user) || !password_verify($this->request->getPost('password'), $user['password']) ) 
        {
            return redirect()->to('login')->withInput()->with('error', $this->users->errors());
        }
        
        $this->session->set('isLoggedIn', true);
        return redirect()->to('dashboard');
    }

    public function logout()
    {
        $this->session->remove(['isLoggedIn', 'userData']);
        return redirect()->to('login');
    }
}