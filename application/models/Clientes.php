<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Clientes_model extends CI_Model {

	public function new($data){
        $this->db->insert('clientes',$data);
		return $this->db->insert_id();
    }

}
?>