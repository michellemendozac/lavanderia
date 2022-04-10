
<?php
class Register_model extends CI_Model
{
 

   // get login database
   public function check_rol()
   {
         
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT * FROM rol');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }
       
     
    


 function add_user($data)
 {
  //Query
 
   
  
  $query =  $this->db->insert('users', $data);
   
  $query = $this->db->insert_id();
                 if(!$query){
                      redirect('login');
                   }
                   else{
                   redirect('Registration');
                   }
            } 
 
  
   }
 
?>


