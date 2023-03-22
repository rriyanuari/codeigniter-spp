<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth/login';

// Auth
  $route['login'] = 'auth/login';
    $route['login/proses'] = 'auth/loginProses';

  $route['logout'] = 'auth/logout';

// ----------

// User
  $route['home'] = 'user/index';

// ----------

// Admin
  $route['admin/dashboard'] = 'admin/dashboard';

    // MASTER DATA
      $route['admin/user'] = 'admin/user';
        $route['admin/tambah-user'] = 'admin/user/tambah';
        $route['admin/proses-tambah-user'] = 'admin/user/proses_tambah';
        $route['admin/proses-hapus-user'] = 'admin/user/proses_hapus';
        $route['admin/edit-user/(:any)'] = 'admin/user/edit/$1';
        $route['admin/proses-edit-user'] = 'admin/user/proses_edit';


      $route['admin/mahasiswa'] = 'admin/mahasiswa';
        $route['admin/tambah-mahasiswa'] = 'admin/mahasiswa/tambah';
        $route['admin/proses-tambah-mahasiswa'] = 'admin/mahasiswa/proses_tambah';
        $route['admin/proses-hapus-mahasiswa'] = 'admin/mahasiswa/proses_hapus';
        $route['admin/edit-mahasiswa/(:any)'] = 'admin/mahasiswa/edit/$1';
        $route['admin/proses-edit-mahasiswa'] = 'admin/mahasiswa/proses_edit';

      $route['admin/spp'] = 'admin/spp';
        $route['admin/tambah-spp'] = 'admin/spp/tambah';
        $route['admin/proses-tambah-spp'] = 'admin/spp/proses_tambah';
        $route['admin/proses-hapus-spp'] = 'admin/spp/proses_hapus';
        $route['admin/edit-spp/(:any)'] = 'admin/spp/edit/$1';
        $route['admin/proses-edit-spp'] = 'admin/spp/proses_edit';
    
    // ============

    // SPP
    $route['admin/buku-spp'] = 'admin/buku_spp';
    $route['admin/pembayaran]'] = 'admin/pembayaran';
      
    $route['admin/laporan'] = 'admin/laporan';
      $route['admin/laporan-print'] = 'admin/laporan_print';
// -------------

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


