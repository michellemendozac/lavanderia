<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Product_model extends CI_Model {
 
    public function color_list(){
        $this->db->select('*');        
        $this->db->from('cat_colors');
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }

    public function mark_list(){
        $this->db->select('*');        
        $this->db->from('cat_mark');
        $query = $this->db->get();               
        if ($query->num_rows()>0) {  
            return $query->result();
        } else {
            return false; 
        } 
    }

}
?>