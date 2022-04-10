<?php
/**
 * Created by PhpStorm.
 * User: Julio
 * Date: 13/01/2018
 * Time: 20:41
 */

class AuthHook
{
 private $controller = [
   'Login'
 ];

 public function check()
 {
   $CI =& get_instance();

   if (!isset($CI->session)){
     $CI->load->library('session');
   };
   $CI->load->helper('url');

   $user = $CI->session->user ?? null;
   $controller = $CI->uri->segment(1);
   if (!$user and !in_array($controller, $this->controller)){
       redirect('Login');
    }
 }
}