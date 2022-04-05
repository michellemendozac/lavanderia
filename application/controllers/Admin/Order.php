<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	public function __construct()
    {
    	parent::__construct();
        $this->load->model('Clientes_model');  
        $this->load->model('Admin/Order_model'); 
		$this->load->model('Admin/Product_model');  
		$this->headerdata["module"] = "Order";
    }    
 
	public function index()
	{				
		$this->load->view('registro_clientes');
	} 

    public function Order_list()  
	{	         

		$data["custom"]   = ["title"   => "Pedidos",
                             "page"    => "OrderList",
							 "prefix"  => "orderlist",
							 "section" => "Orders",
                             "module"  => $this->headerdata["module"]];
        //Files to be included in head, body and footer
		$data["include"]     = includefiles($data["custom"]["page"]); 		
		   
		$data["orders"] = $this->Order_model->Order_list();
		$this->load->view('admin/pedidos/listado',$data);
	}

    public function Edit_order($id){
		$data["pe"]             = $this->Order_model->pedido_info($id);
        $data["serv"]           = $this->Order_model->service_type();
        $data["reception"]      = $this->Order_model->reception_type();
        $data["order_status"]   = $this->Order_model->order_status();
        $data["promotions"]     = $this->Order_model->promotions();
        $data["employe"]        = $this->Order_model->employe();
        $data["cl"]             = $this->Clientes_model->select_clientes();  		
		$data ["colors"]        = $this->Product_model->color_list(); 
		$data ["marks"]         = $this->Product_model->mark_list(); 
		$data ["detail_list"]   = $this->Order_model->order_detail($id);  
        
		$this->load->view('admin/pedidos/pedido',$data);
	} 


	public function New_order(){		
		$data["cl"] = $this->Clientes_model->select_clientes();
		$this->load->view('admin/pedidos/pedido',$data);
	} 

    public function Delete_order($id){
		$this->Clientes_model->eliminar_cliente($id);
		header('Location: '.base_url().'/Registroclientes/listado');
	}
	
}
?>
