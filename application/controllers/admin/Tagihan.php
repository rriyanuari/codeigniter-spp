<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

	public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url('login'));
    }

    if($this->session->userdata('role') == 1 ){
      redirect(base_url());
    }

    $this->load->model(['Model_tagihan']);

  }

  // MASTER ----------------------
    public function index()
    {
      $data_tagihan	=	$this->Model_tagihan->semua()->result_array();
      $data = [
        'title' 		=> 'Data Tagihan',
        'page' 			=> 'tagihan_master',
        'tagihans'			=> $data_tagihan			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/tagihan.php');
    }

    public function tambah()
    {
      $data = [
        'title' 		=> 'Tambah Tagihan',
        'page' 			=> 'tagihan_tambah',
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/tagihan.php');
    }

    public function proses_tambah()
    {
      $data = array(
        'periode'    => $this->input->post('periode'),
        'jurusan'    => $this->input->post('jurusan'),
        'total_tagihan'    => $this->input->post('tagihan'),
      );
      $insert = $this->Model_tagihan->tambah($data);
      
      if($insert){
        echo "success";
      } else{
        echo "error";
        
      }    
    }

    public function proses_hapus()
    {
      $id = $this->input->post('id');
  
      if($this->Model_tagihan->hapus_by_id($id)){
        echo "success";
      } else{
        echo "error";
      }
    }

    public function edit($id)
    {
      $data_tagihan	=	$this->Model_tagihan->by_id($id)->row_array();
      $data = [
        'title' 		=> 'Edit tagihan',
        'page' 			=> 'tagihan_edit',
        'tagihan'	  => $data_tagihan			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/tagihan.php');
    }

    public function proses_edit()
    {
      $data = array(
        'periode'         => $this->input->post('periode'),
        'jurusan'         => $this->input->post('jurusan'),
        'total_tagihan'   => $this->input->post('tagihan'),
      );

      $where = array(
        'id' => $this->input->post('id')
      );

      if($this->Model_tagihan->update_by_id($where, $data)){
        echo "success";
      } else{
        echo "error";
        
      }
    }
}
