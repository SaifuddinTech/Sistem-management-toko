<?php

namespace App\Controllers;


class Phone extends BaseController
{
    public function index()
    {
        $data['data'] = [
            'menu' => 'Phone',
            'title' => 'Phone',
        ];
        return view('view/phone', $data);
    }
}