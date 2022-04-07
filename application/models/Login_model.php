
<?php
class Login_model extends CI_Model
{

   // get login database
   public function check_login($user, $password)
   {
       //Query
       $this->db->select("*");
       $this->db->from("users");
       $this->db->where("email",$user);		
       $this->db->where("password",$password);

       //Ejecutar consulta
       $query = $this->db->get();                 
       
       //Validando que tenga resultados
       if($query->num_rows()>0){       
           //regresar array      
           return $query->row_array();
       }else{
           return false;	 		
       }
   }   
    


 function can_login($email, $password)
 {
  $this->load->library('encrypt'); 
  $this->db->where('email', $email);
  $query = $this->db->get('users');
  if($query->num_rows() > 0)
  {
   foreach($query->result() as $row)
   {
   /* if($row->rol== 'rol asignado')
    { 
     $store_password = $this->encrypt->decode($row->password);
     if($password == $store_password)
     {
      $this->session->set_userdata('id', $row->id);
      // el resto de info necesaria a guardar en la session para reutilizar
     }
     else
     {
      return 'error contraseña ';
     }
    } */ 
    $pass= $row->password;
     $encrypted_string = $this->encrypt->encode(($password)); 
     if($pass == $encrypted_string)
     {
      $this->session->set_userdata('email', $row->email);
       redirect('/');
       return 'exitoso';
     }
     else
     {
      return 'error de contraseña';
          redirect('login');
     }
    }  
 }
 else
     {
      return 'no existe';
     }
 }
 }
 
?>

