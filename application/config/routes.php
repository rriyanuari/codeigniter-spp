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
  $route['admin/dashboard'] = 'admin';

    // MASTER DATA
      $route['admin/user'] = 'admin/master_user';
        $route['admin/tambah-user'] = 'admin/tambah_user';
        $route['admin/proses-tambah-user'] = 'admin/proses_tambah_user';
        $route['admin/proses-hapus-user'] = 'admin/proses_hapus_user';
        $route['admin/edit-user/(:any)'] = 'admin/edit_user/$1';
        $route['admin/proses-edit-user'] = 'admin/proses_edit_user';

      $route['admin/mahasiswa'] = 'admin/master_mahasiswa';
        $route['admin/tambah-mahasiswa'] = 'admin/tambah_mahasiswa';
        $route['admin/proses-tambah-mahasiswa'] = 'admin/proses_tambah_mahasiswa';
        $route['admin/proses-hapus-mahasiswa'] = 'admin/proses_hapus_mahasiswa';
        $route['admin/edit-mahasiswa/(:any)'] = 'admin/edit_mahasiswa/$1';
        $route['admin/proses-edit-mahasiswa'] = 'admin/proses_edit_mahasiswa';

      
      $route['admin/laporan'] = 'admin/laporan';
        $route['admin/laporan-print'] = 'admin/laporan_print';
// -------------

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


