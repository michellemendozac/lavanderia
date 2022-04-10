<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Hacerlo con un hook
        /*if($this->session->userdata('id'))
        {
            redirect('private_area');
        }*/  

        $this->load->model('Login_model'); 
    }
 
    function index()
    {
        //Personalizar vista 
        $custom = array("title" => "Login",
                        "form"  => "admin/login/login",
                        "text"  =>  "Bienvenido, por favor ingrese con sus datos");     
    
        //Guardar variables
        $data["custom"] = $custom;  
        

        //Cargar vista y enviamos la variable data
        $this->load->view('admin/login/main_login',$data);
    } 
    

    //Start session
    public function start()
	{
        //Get data 
        $usuario  = $_POST["user"];
        //encriptar password
        $password = md5($_POST["password"]);
 
        //Search user 
        $user = $this->Login_model->check_login($usuario, $password);       
    
        //If user exist, save and return true
        if($user){            
            //Cargar catalogos
            $this->load_system_data();
            // Iniciar sesion
            $this->init($user);          
            echo "true"; 
        }else{
            echo "Error: Usuario o contraseña incorrecto.";
        }

    }


    private function load_system_data(){       
        //$data["catalog_name"] = $this->Login_model->funcion();

        //$_SESSION["catalog"]    = $data;

        //emergencial, comentar al agregar catalogos
        $_SESSION["catalog"]   = [];
    }
    
    //Save user in session 
    private function init($user){
        $login = array("id"      => $user["id_users"],                       
                       "nombre"  => $user["name"],
                       "email"   => $user["email"]);
        $_SESSION["user"]  = $login;
    }

    //Close session
    public function cerrar_session(){
        session_destroy();
        header('Location:/Login');
    }


    /*
 function validation()
 {       
  $this->form_validation->set_rules('user_email','Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
 
  if($this->form_validation->run())
  {
   $result = $this->Login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
   if($result == '')
   {
    redirect('private_area');
   }
   else
   {
    $this->session->set_flashdata('message',$result);
    redirect('login');
   }
  }
  else
  {
   $this->index();
  }
 }*/


}

?>

