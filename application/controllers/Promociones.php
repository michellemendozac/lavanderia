<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends CI_Controller {
	

	public function __construct()
    {
    	parent::__construct();
    //    $this->load->model('Clientes_model');  
    }    


	public function index()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/promociones/promociones');
		$this->load->view('page/layout/bottom');
	} 

 

}