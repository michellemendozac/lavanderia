<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendiente extends CI_Controller {
	
	public function __construct()
    {
    	parent::__construct();
        
		$this->load->model('Admin/Order_model');  
    }    
 
	public function index() 
	{				
		$this->load->view('Operation/Pendiente/consulta');
	} 

    

    
}
?>