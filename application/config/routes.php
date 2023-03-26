<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth/login';

// Auth
  $route['login'] = 'auth/login';
    $route['login/proses'] = 'auth/loginProses';

  $route['logout'] = 'auth/logout';

// ----------

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

      $route['admin/tagihan'] = 'admin/tagihan';
        $route['admin/tambah-tagihan'] = 'admin/tagihan/tambah';
        $route['admin/proses-tambah-tagihan'] = 'admin/tagihan/proses_tambah';
        $route['admin/proses-hapus-tagihan'] = 'admin/tagihan/proses_hapus';
        $route['admin/edit-tagihan/(:any)'] = 'admin/tagihan/edit/$1';
        $route['admin/proses-edit-tagihan'] = 'admin/tagihan/proses_edit';
    
    // ============

    // SPP
    $route['admin/buku-spp'] = 'admin/buku_spp';
      $route['admin/buku-spp/(:any)'] = 'admin/buku_spp/mahasiswa/$1';
    $route['admin/pembayaran]'] = 'admin/pembayaran';
      
    $route['admin/laporan'] = 'admin/laporan';
      $route['admin/laporan-print'] = 'admin/laporan_print';
// -------------

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


