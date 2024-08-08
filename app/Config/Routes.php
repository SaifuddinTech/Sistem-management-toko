<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
    // Login
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');
    // Daftar Akun Di login
$routes->get('daftar','Daftar::index');
$routes->post('user/daftar','User::tambah');

    // User
$routes->get('user','User::index');
$routes->post('user/tambah','User::tambah');
$routes->post('user/delete/','User::delete');
    // Data Order
$routes->get('order/', 'Order::index');
$routes->get('order/tambah/', 'Order::index');


$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/laptop', 'Laptop::index');
$routes->get('/phone', 'Phone::index');
$routes->get('/service', 'Service::index');

    // Data Rekap
$routes->get('rekap/', 'Rekap::index');
$routes->get('rekap_tambah/', 'Rekap::tambah');
$routes->post('rekap/simpan/', 'Rekap::simpan');
$routes->get('rekap/edit/(:segment)', 'Rekap::edit/$1');
$routes->post('rekap/update/(:segment)', 'Rekap::update/$1');
$routes->get('rekap/delete/(:segment)', 'Rekap::delete/$1');

    // Data Daryawan
$routes->get('/karyawan/', 'Karyawan::index');
$routes->get('/karyawan_tambah','Karyawan::tambah');
$routes->post('/karyawan/save','Karyawan::save');
$routes->get('/karyawan_edit/(:segment)','Karyawan::edit/$1');
$routes->post('/karyawan_update/(:segment)','Karyawan::update/$1');
$routes->get('/karyawan/delete/(:segment)', 'Karyawan::delete/$1');



