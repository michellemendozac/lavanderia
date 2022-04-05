<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reception extends CI_Controller {
	
	public function __construct()
    {
    	parent::__construct();
        
		$this->load->model('Admin/Order_model');  
    }    
 
	public function index() 
	{				
		$this->load->view('Operation/new');
	} 

    public function reception()
	{				
		$this->load->view('Operation/Conteo/new');
	} 


    public function conteo()
	{				
		$this->load->view('Operation/Conteo/conteo');
	} 

 
    
}
?>
