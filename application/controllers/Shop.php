<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	

	public function __construct()
    {
    	parent::__construct();
    //    $this->load->model('Clientes_model');  
    }    


	public function index()
	{
		$this->load->view('page/layout/top');
		$this->load->view('page/shop/shop');
		$this->load->view('page/layout/bottom');
	} 

 
 


}