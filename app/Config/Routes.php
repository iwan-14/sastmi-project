<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');
$routes->get('/auth', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index'); // kita akan buat nanti
$routes->get('/santri', 'Santri::index');
$routes->get('/santri/tambah', 'Santri::tambah');
$routes->post('/santri/simpan', 'Santri::simpan');
$routes->get('/santri/edit/(:num)', 'Santri::edit/$1');
$routes->post('/santri/update/(:num)', 'Santri::update/$1');
$routes->get('/santri/hapus/(:num)', 'Santri::hapus/$1');
$routes->get('/kehadiran', 'Kehadiran::index');
$routes->get('/kehadiran/tambah', 'Kehadiran::tambah');
$routes->post('/kehadiran/simpan', 'Kehadiran::simpan');
$routes->get('/nilai', 'Nilai::index');
$routes->get('/nilai/tambah', 'Nilai::tambah');
$routes->post('/nilai/simpan', 'Nilai::simpan');
$routes->get('/nilai/export', 'Nilai::exportPdf');
$routes->get('/pengasuh', 'Pengasuh::index');
$routes->get('/kehadiran/export', 'Kehadiran::exportPdf');
$routes->get('/orangtua', 'Orangtua::index');

