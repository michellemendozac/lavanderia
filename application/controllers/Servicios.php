<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
	

	public function __construct()
    {
    	parent::__construct();
    //    $this->load->model('Clientes_model');  
    }    


	public function index()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/inicio');
		$this->load->view('page/layout/bottom');
	} 

 
	public function lavanderia()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/servicios/lavanderia');
		$this->load->view('page/layout/bottom');
	} 
	
	public function planchaduria()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/servicios/planchaduria');
		$this->load->view('page/layout/bottom');
	} 

	public function Costureria()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/servicios/costureria');
		$this->load->view('page/layout/bottom');
	}
 

	public function Tintoreria()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/servicios/tintoreria');
		$this->load->view('page/layout/bottom');
	}


}
