<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Hacerlo con un hook
        /*if($this->session->userdata('id'))
        {
            redirect('private_area');
        }*/  
 

        $this->load->model('Register_model'); 
    }
 
    function index()
    {
        //Personalizar vista 
        $data['email'] = $this->Register_model->check_email();

        $custom = array("title" => "Registrar usuario",
                        "form"  => "admin/acount/users/add_user",
                        "text"  =>  "Panel de registro");     
    
        //Guardar variables
        $data["custom"] = $custom;  
        //envio a la plantilla los datos de los roles
        $data['roles'] = $this->Register_model->check_rol();

        //Cargar vista y enviamos la variable data
        $this->load->view('admin/login/main_login',$data);
    } 
    

    //Start session
    public function start(){


        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Nombre de usuario', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('name', 'Nombre', 'required|min_length[3]|max_length[12]');
        $this->form_validation->set_rules('last_name', 'Apellido', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Email','required|min_length[6]|max_length[22]');
        $this->form_validation->set_rules('password1', 'Email', 'required|min_length[6]|max_length[22]');


 foreach($email as $row)
            { 
              echo  $row->email;
            }


         if($_POST["password"] == $_POST["password1"]){

if( $row->email == $_POST["email"]){

                        echo "email ya existe";

}

if ($this->form_validation->run()) {

    // datos a guardar
  $data = array(
        'user'  => $_POST["user"],
        'name'  => $_POST["name"],
        'last_name'  => $_POST["last_name"],
        'email'  => $_POST["email"],
        'password' => md5($_POST["password"]),
        'id_rol'  => $_POST["rol"],
        'status' => 1
);
    
        //post data 
         
 
  
         
 
        //Search user 
      $user=  $this->Register_model->add_user($data);       
      $user = $this->db->get('users');
                if(!$user){            
            //Cargar catalogos
                    echo "Error: Usuario o contraseña incorrecto.";
            
        }else{
             echo "true";   
        }
     


}
     
         }else {

                    echo $row->email, "contraseñas no coinciden  ";


         }  
}
 

}

?>

