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
	
        //Personalizar vista 
        $custom = array("title" => "Pedidos",
                        "form"  => "Operation/new",
                        "text"  =>  "Bienvenido, panel de pedidos");     
    
        //Guardar variables
        $data["custom"] = $custom;  
        

        //Cargar vista y enviamos la variable data
        $this->load->view('admin/login/main_login',$data);
 
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
