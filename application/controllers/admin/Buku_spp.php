<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_spp extends CI_Controller {

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
      $this->load->model(['Model_user']);

      $data_user	=	$this->Model_user->semua()->result_array();
      $data = [
        'title' 		=> 'Data SPP',
        'page' 			=> 'buku_spp',
        'users'			=> $data_user			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/user.php');
    }

    public function mahasiswa($nim)
    {
      $this->load->model(['Model_user']);

      $data_user	=	$this->Model_user->semua()->result_array();
      $data = [
        'title' 		=> 'Buku SPP Mahasiswa - ' . $nim,
        'page' 			=> 'buku_spp_mahasiswa',
        'nim'			=> $nim			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/user.php');
    }
}
