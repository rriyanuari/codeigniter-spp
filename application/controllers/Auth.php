<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('model_auth');
  }

	public function login()
	{
    if($this->session->userdata('logged_in')){
			redirect(base_url('admin/dashboard'));
    }

    $data = [
			'title' 		=> 'Login',
			'page' 			=> 'login'			
		];
    
    $this->load->view('templates/user/index.php', $data);
    $this->load->view('function/login.php');
	}

  public function loginProses()
  {      

    $username = $this->input->post('user');
    $password = $this->input->post('pass');

    $user = $this->model_auth->login($username, $password);
    if(!empty($user)){
      $session_data = array(
          'id'        => $user->id_user,
          'username'  => $user->username,
          'role'      => $user->role,
          'logged_in' => TRUE
      );
      $this->session->set_userdata($session_data);
      echo "success";
    } else{
      echo "error";
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url());
  }
}
