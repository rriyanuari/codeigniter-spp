<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url('login'));
    }

    if($this->session->userdata('role') == 1 ){
      redirect(base_url());
    }

    $this->load->model(['Model_pembayaran']);

  }

  // MASTER ----------------------
    public function index()
    {
      $data_pembayaran	=	$this->Model_pembayaran->semua_desc()->result_array();
      $data = [
        'title' 		      => 'Data Pembayaran',
        'page' 			      => 'pembayaran_master',
        'pembayarans'			=> $data_pembayaran			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/pembayaran.php');
    }

    public function tambah($nim, $periode)
    {
      $data = [
        'title' 		=> 'Tambah Pembayaran - ' . $nim,
        'page' 			=> 'pembayaran_tambah',
        'nim' 			=> $nim,
        'periode' 	=> $periode,
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/pembayaran.php');
    }

    public function proses_tambah()
    {
      date_default_timezone_set("Asia/Jakarta");

      $data = array(
        'nim'             => $this->input->post('nim'),
        'periode'         => $this->input->post('periode'),
        'nominal_bayar'   => $this->input->post('nominal_bayar'),
        'tgl_bayar'   => date('Y-m-d', time())
      );
      $insert = $this->Model_pembayaran->tambah($data,'pembayaran');
      
      if($insert){
        echo "success";
      } else{
        echo "error";
        
      }    
    }

    public function proses_hapus()
    {
      $id = $this->input->post('id');
  
      if($this->Model_pembayaran->hapus_by_id($id)){
        echo "success";
      } else{
        echo "error";
      }
    }

    public function edit($id)
    {
      $data_pembayaran	=	$this->Model_pembayaran->by_id($id)->row_array();
      $data = [
        'title' 		    => 'Edit pembayaran',
        'page' 			    => 'pembayaran_edit',
        'pembayaran'		=> $data_pembayaran			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/pembayaran.php');
    }

    public function proses_edit()
    {
      $data = array(
        'nim'             => $this->input->post('nim'),
        'periode'         => $this->input->post('periode'),
        'nominal_bayar'   => $this->input->post('nominal_bayar'),
      );

      $where = array(
        'id' => $this->input->post('id')
      );

      if($this->Model_pembayaran->update_by_id($where, $data)){
        echo "success";
      } else{
        echo "error";
        
      }
    }
}
