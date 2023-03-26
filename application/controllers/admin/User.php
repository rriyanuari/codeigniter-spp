<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        'title' 		=> 'Data User',
        'page' 			=> 'user_master',
        'users'			=> $data_user			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/user.php');
    }

    public function tambah()
    {
      $data = [
        'title' 		=> 'Tambah User',
        'page' 			=> 'user_tambah',
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/user.php');
    }

    public function proses_tambah()
    {
      $this->load->model(['Model_user']);
  
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $role = $this->input->post('role');
  
      $data = array(
        'username'       => $username,
        'password'       => $password,
        'role'           => $role,
        );
      $insert = $this->Model_user->tambah($data,'user');
      
      if($insert){
        echo "success";
      } else{
        echo "error";
        
      }    
    }

    public function proses_hapus()
    {
      $this->load->model(['Model_user']);
  
      $id = $this->input->post('id');
  
      if($this->Model_user->hapus_by_id($id)){
        echo "success";
      } else{
        echo "error";
        
      }
    }

    public function edit($id)
    {
      $this->load->model(['Model_user']);

      $data_user	=	$this->Model_user->by_id($id)->row_array();
      $data = [
        'title' 		=> 'Edit User',
        'page' 			=> 'user_edit',
        'user'			=> $data_user			
      ];
      $this->load->view('templates/admin/index.php', $data);
      $this->load->view('function/admin/user.php');
    }

    public function proses_edit()
    {
      $this->load->model(['Model_user']);

      $id = $this->input->post('id');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $role = $this->input->post('role');

      $data = array(
        'username' => $username,
        'password' => $password,
        'role' => $role
      );

      $where = array(
        'id_user' => $id
      );

      if($this->Model_user->update_by_id($where, $data, 'user')){
        echo "success";
      } else{
        echo "error";
        
      }
    }
}
