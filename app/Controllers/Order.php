<?php

namespace App\Controllers;


class Order extends BaseController
{
    public function index()
    {
        $data['data'] = [
            'menu' => 'Order',
            'title' => 'Order',
        ];
        return view('view/order', $data);
    }
    public function tambah()
    {
        $data['data'] = [
            'menu' => 'Tambah Pesanan',
            'title' => 'Tambah Pesanan',
        ];
        return view('view/order_tambah', $data);
    }
}