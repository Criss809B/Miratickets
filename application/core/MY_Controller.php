<?php
class MY_Controller extends CI_Controller{

public function __construct()
 {
     parent::__construct();

     $controlador = $this->router->fetch_class();
     $metodo = $this->router->fetch_method();

     define('CONTROLADOR', ($controlador));
     define('METODO',($metodo));

	 /*
     if($metodo != 'login' && !isset($_SESSION['muni_user'])){
       redirect('main/login');
     }*/

 }

}
