<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	public function index()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/inicio');
		$this->load->view('page/layout/bottom');
	} 
}
