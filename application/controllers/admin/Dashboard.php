<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url('login'));
    }

    if($this->session->userdata('role') == 1 ){
      redirect(base_url());
    }


  }

  // MASTER ----------------------
    public function index()
    {
      // $this->load->model(['Model_pelamar']);
      // $this->load->model(['Model_lowongan']);

      $data = [
        'title' 		=> 'Dashboard',
        'page' 			=> 'dashboard',
        // 'pelamar'   => $this->Model_pelamar->semua()->num_rows(),
        // 'lowongan'  => $this->Model_lowongan->semua()->num_rows()
      ];
      $this->load->view('templates/admin/index.php', $data);
    }
}
