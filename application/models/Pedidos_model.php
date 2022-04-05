<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pedidos_model extends CI_Model {

	public function nuevo_pedido($data){
        $this->db->insert('pedidos',$data);
		return $this->db->insert_id(); 
    } 
    public function listado_pedidos(){
        $this->db->select('p.*, c.nombre');        
        $this->db->from('pedidos p','left');
        $this->db->join('clientes c', 'p.cliente_id = c.id','left');
        $query = $this->db->get(); 

        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }  

    public function pedido_info($id){
        $this->db->select('p.*, c.nombre');        
        $this->db->from('pedidos p','left');
        $this->db->join('clientes c', 'p.cliente_id = c.id','left');
        $this->db->where('p.id',$id); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->row_array();
        } else {
            return false; 
        } 
    }

/*

    public function edita_cliente($data,$id){
        $this->db->where("id", $id);
        return $this->db->update('clientes',$data);		
    }

    public function eliminar_cliente($id){
        $this->db->where("id", $id);
        return $this->db->delete('clientes');     
    }
    
    public function listado_cliente(){
        $this->db->select('c.*, d.*, d.id direccion_id, m.nombre nmunicipio', 'left');
        $this->db->from('clientes c','left');
        $this->db->join('direcciones d', 'c.id = d.cliente_id','left');
        $this->db->join('municipios m', 'm.id = d.municipio', 'left');
        $query = $this->db->get(); 

        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }  
	
	public function cliente_info($id){
		$this->db->select('c.*, d.*, d.id direccion_id, m.nombre nmunicipio');        
        $this->db->from('clientes c','left');
        $this->db->join('direcciones d', 'c.id = d.cliente_id','left');
        $this->db->join('municipios m', 'm.id = d.municipio');
		$this->db->where('c.id',$id); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->row_array();
        } else {
            return false; 
        } 
	}


    public function nueva_direccion($data){
        $this->db->insert('direcciones',$data);
		return $this->db->insert_id();
    }

    public function edita_direccion($data,$id){
        $this->db->where("id", $id);
        return $this->db->update('direcciones',$data);		
    } 


    public function revisar_telefono($telefono){
		$this->db->select('*');
        $this->db->from('clientes');
		$this->db->where('telefono',$telefono); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->row_array();
        } else {
            return false; 
        } 
	}
*/


}
?>