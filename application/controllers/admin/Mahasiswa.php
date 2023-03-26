<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
    parent::__construct();

    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url('login'));
    }

    if($this->session->userdata('role') == 1 ){
      redirect(base_url());
    }

    $this->load->model(['Model_mahasiswa']);
    $this->load->model(['Model_user']);

  }

  // MASTER ----------------------
    public function index()
    {
      $data_mahasiswa	=	$this->Model_mahasiswa->semua()->result_array();
      $data = [
        'title' 		=> 'Data Mahsiswa',
        'page' 			=> 'mahasiswa_master',
        'mahasiswas'			=> $data_mahasiswa			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/mahasiswa.php');
    }

    public function tambah()
    {
      $data = [
        'title' 		=> 'Tambah Mahasiswa',
        'page' 			=> 'mahasiswa_tambah',
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/mahasiswa.php');
    }

    public function proses_tambah()
    {

      $data_user = array(
        'username'       => $this->input->post('nim'),
        'password'       => 'aretacollage',
        'role'           => 1,
      );
      $insert_user = $this->Model_user->tambah($data_user, 'user');
      $last_id = $this->db->insert_id();

      if($insert_user){
        $data = array(
          'id_user'         => $last_id,
          'nim'             => $this->input->post('nim'),
          'nama_lengkap'    => $this->input->post('nama_lengkap'),
          'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
          'jurusan'         => $this->input->post('jurusan'),
        );
        $insert = $this->Model_mahasiswa->tambah($data);
        
        if($insert){
          echo "success";
        } else{
          echo "error";
          
        }    
      }
    }

    public function proses_hapus()
    {
      $id = $this->input->post('id');
  
      if($this->Model_mahasiswa->hapus_by_id($id)){
        echo "success";
      } else{
        echo "error";
        
      }
    }

    public function edit($id)
    {
      $data_mahasiswa	=	$this->Model_mahasiswa->by_id($id)->row_array();
      $data = [
        'title' 		  => 'Edit Mahasiswa',
        'page' 			  => 'mahasiswa_edit',
        'mahasiswa'		=> $data_mahasiswa			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/mahasiswa.php');
    }

    public function proses_edit()
    {
      $data = array(
        'nim'             => $this->input->post('nim'),
        'nama_lengkap'    => $this->input->post('nama_lengkap'),
        'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
        'jurusan'         => $this->input->post('jurusan'),
      );

      $where = array(
        'id' => $this->input->post('id')
      );

      if($this->Model_mahasiswa->update_by_id($where, $data)){
        echo "success";
      } else{
        echo "error";
        
      }
    }
}
