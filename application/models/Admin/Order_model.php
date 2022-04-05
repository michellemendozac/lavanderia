<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Order_model extends CI_Model {
/*
SELECT 
	p.id, p.cliente_id, p.tipo_servicio, p.recepcion, p.estatus, p.direccion_id, 
	c.nombre,
	st.service_type,
	CONCAT(d.calle,' ',d.numero,' ',d.colonia) direccion,
	p.order_status 
	
FROM 
	orders p 
	LEFT JOIN service_type st ON p.tipo_servicio = st.id_service_type
	LEFT JOIN clientes c      ON c.id            = p.cliente_id
	LEFT JOIN direcciones d   ON p.direccion_id  = d.id
	LEFT JOIN order_status os ON p.order_status  = os.id
*/


    public function Order_list($id = 0){
        $this->db->select(' p.id, 
                            p.cliente_id, 
                            p.tipo_servicio, 
                            p.recepcion, 
                            p.estatus, p.calificacion, p.promesa_entrega, p.recibido, p.hora_promesa_entrega, p.hora_recibido, p.importe, p.descuento, p.total, p.iva, p.total_total, p.pagado,
                            p.direccion_id, p.entrega,
                            c.nombre,
                            st.service_type,
                            CONCAT(d.calle," ",d.numero," ",d.colonia) direccion,
                            p.order_status');
        $this->db->from('orders p','left');
        $this->db->join('cat_service_type st', 'p.tipo_servicio = st.id_service_type','left');
        $this->db->join('clientes c', 'c.id = p.cliente_id', 'left');
        $this->db->join('cat_direcciones d', 'p.direccion_id  = d.id', 'left');
        $this->db->join('order_status os', 'p.order_status  = os.id','left');

        if($id > 0){
            $this->db->where("p.id",$id);
        }

        $query = $this->db->get(); 

        if ($query->num_rows()>0) {  
             return $query->result(); 
        } else {
            return false; 
        } 
    }  


    public function order_detail($id = 0){ //
        $this->db->select('o.*, c.color, m.mark, sp.product_id, sp.service_id,
                            cst.service_type, pr.name product_name');
        $this->db->from('order_detail o','left');
        $this->db->join('cat_colors c', 'o.color = c.id ','left');
        $this->db->join('cat_mark m', 'o.mark = m.id', 'left');
        $this->db->join('service_price sp', 'sp.id  = o.service_product', 'left');
        $this->db->join('cat_service_type cst', 'cst.id_service_type = sp.service_id','left');
        $this->db->join('product pr', 'pr.id = sp.product_id','left');

        $this->db->where("o.order_id",$id);
        $query = $this->db->get(); 

        if ($query->num_rows()>0) {  
             return $query->result(); 
        } else {
            return false; 
        } 
    }  


    public function pedido_info($id){
        $this->db->select('p.*, c.nombre');
        $this->db->from('orders p','left');
        $this->db->join('clientes c', 'p.cliente_id = c.id','left');
        $this->db->where('p.id',$id);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function service_type(){
        $this->db->select('*');        
        $this->db->from('cat_service_type');        
        $this->db->where('status_serv','1'); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }

    public function reception_type(){
        $this->db->select('*');        
        $this->db->from('reception');        
        $this->db->where('status_reception','1'); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }

    public function order_status(){
        $this->db->select('*');        
        $this->db->from('order_status');        
        $this->db->where('status','1'); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }

    public function promotions(){
        $this->db->select('*');        
        $this->db->from('promotions');        
        $this->db->where('status','1'); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }

    public function employe(){
        $this->db->select('*');        
        $this->db->from('employe');        
        $this->db->where('status','1'); 
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }


    public function edita_cliente($data,$id){
        $this->db->where("id", $id);
        return $this->db->update('clientes',$data);		
    }


}
?>