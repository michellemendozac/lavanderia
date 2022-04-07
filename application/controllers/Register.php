<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
 
  $this->load->model('Register_model');
 }

 function index()
 {
 $this->load->view('page/layout/top');
  $this->load->view('Register');
 }

 function validation()
 {
 
  $this->load->library('encrypt'); 
 
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  $encrypted_string = $this->encrypt->encode(('user_password'));
  if($this->form_validation->run())
  {
    
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email'),
    'password' => $encrypted_string
 
   );
   $id = $this->Register_model->insert($data);
   redirect('login');
  }
  else
  {
   redirect('register');
  }
 }

 

}

?>


