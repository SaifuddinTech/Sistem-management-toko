<?php

namespace App\Controllers;


class Laptop extends BaseController
{
    public function index()
    {
        $data['data'] = [
            'menu'  => 'Laptop',
            'title'  => 'Laptop',

        ];
        return view('view/laptop', $data);
    }
}