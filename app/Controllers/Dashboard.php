<?php

namespace App\Controllers;


class Dashboard extends BaseController
{
    public function index()
    {
        $data['data'] = [
            'menu'  => 'Dashboard',
            'title'  => 'Dashboard',

        ];
        return view('view/dashboard', $data);
    }
}