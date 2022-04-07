<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registroclientes extends CI_Controller {
	
	public function __construct()
    {
    	parent::__construct();
        //validate of users 
    	 
        $this->load->model('Clientes_model');  
    }    
 
 

	public function index()
	{				
	        $this->load->view('page/layout/top');
		$this->load->view('registro_clientes');
	} 

	public function editar_cliente($id){
		$data["cl"] = $this->Clientes_model->cliente_info($id);		 
		$this->load->view('registro_clientes',$data);
	} 

	public function eliminar_cliente($id){
		$this->Clientes_model->eliminar_cliente($id);
		header('Location: '.base_url().'/Registroclientes/listado');
	}
    

    public function editar_cliente_info($id,$direccion_id){
		$data = array("nombre"        => $_POST["nombre"],
					  "amaterno"      => $_POST["amaterno"],
					  "apaterno"      => $_POST["apaterno"],
					  "telefono"      => $_POST["telefono"],
					  "correo"        => $_POST["correo"],
					  "observaciones" => $_POST["obs"],
					  "promedio_compra" => $_POST["promedio"],
					  "sucursal"      => "1",
					  "estatus"       => "1");
		$this->Clientes_model->edita_cliente($data,$id); 
		$data = array("calle"      => $_POST["calle"],
					  "numero"     => $_POST["numero"],					  
					  "n_int"      => $_POST["numero_int"],
					  "colonia"    => $_POST["colonia"],
					  "municipio"  => $_POST["municipio"],
					  "estado"     => "1",
					  "pais"       => "1",
					  "cp"         => $_POST["cp"]);
		$this->Clientes_model->edita_direccion($data,$direccion_id);		
	}
    
    public function revisar_telefono($telefono,$cliente_id){
    	$cliente =  $this->Clientes_model->revisar_telefono(trim($telefono));
    	if($cliente){
    		if($cliente["id"] == $cliente_id){
    			echo "1";
    		}else{
    			echo "Ya existe el numero ".$telefono." a nombre de ".$cliente["nombre"]." ".$cliente["apaterno"]." ".$cliente["amaterno"];
    		}
    	}else{
    		echo "1";
    	}
    } 

	public function nuevo(){			
		$data = array("nombre"        => $_POST["nombre"],
					  "amaterno"      => $_POST["amaterno"],
					  "apaterno"      => $_POST["apaterno"],
					  "telefono"      => $_POST["telefono"],
					  "promedio_compra" => $_POST["promedio"],
					  "correo"        => $_POST["correo"],
					  "observaciones" => $_POST["obs"],
					  "sucursal"      => "1",
					  "estatus"       => "1");
		$cliente_id = $this->Clientes_model->nuevo_cliente($data);

		$data = array("calle"      => $_POST["calle"],
					  "numero"     => $_POST["numero"],
					  "cliente_id" => $cliente_id,
					  "n_int"      => $_POST["numero_int"],
					  "colonia"    => $_POST["colonia"],
					  "municipio"  => $_POST["municipio"],
					  "estado"     => "1",
					  "pais"       => "1",
					  "cp"         => $_POST["cp"]);

		$direccion_id = $this->Clientes_model->nueva_direccion($data);
		
		$data = array("direccion"  => $direccion_id);
		$this->Clientes_model->edita_cliente($data,$cliente_id); 
	} 

	public function listado()  
	{		
		$data["clientes"] = $this->Clientes_model->listado_cliente();
		$this->load->view('listado_clientes',$data);
	}

	
}
?>
