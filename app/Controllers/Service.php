<?php

namespace App\Controllers;


class Service extends BaseController
{
    public function index()
    {
        $data['data'] = [
            'menu' => 'Service',
            'title' => 'Service',
        ];
        return view('view/service', $data);
    }
}