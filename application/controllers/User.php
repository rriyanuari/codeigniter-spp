<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url('login'));
    }

    $this->load->model(['Model_mahasiswa']);
    $this->load->model(['Model_pembayaran']);
    $this->load->model(['Model_tagihan']);

  }

  // MASTER ----------------------
    public function index()
    {
      $nim = $this->session->userdata('username');

      $periode = "";
      $data_pembayaran = false;
      $data_buku_spp = [];
      $data_tagihan = '';

      $data_mahasiswa = $this->Model_mahasiswa->by_nim($nim)->row_array();

      if($this->input->get('periode') != "" ){
        $periode = $this->input->get('periode');

        $data_buku_spp = $this->Model_pembayaran->buku_spp($periode, $data_mahasiswa['nim']);
        $data_tagihan  = $this->Model_tagihan->by_jurusan($data_mahasiswa['jurusan'])->row_array();

        if($data_buku_spp->num_rows() > 0){
          $data_pembayaran = true;
        }
      }

      $data = [
        'title' 	         => 'Buku SPP Mahasiswa - ' . $nim,
        'page' 		         => 'buku_spp_mahasiswa',
        'mahasiswa'	       => $data_mahasiswa,
        'nim'			         => $nim,			
        'periode'			     => $periode,		
        'buku_spps'			   => $data_buku_spp,		
        'data_pembayaran'  => $data_pembayaran,
        'data_tagihan'     => $data_tagihan
      ];
      $this->load->view('pages/mahasiswa.php', $data);
      $this->load->view('function/admin/buku_spp.php');
    }
}
