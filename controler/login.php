<?php

    require_once '../modelo/conexion.php';
    require_once '../vista/loginvista.php';
    

    class Login{
        
        public $modelo;
        public $vista;
        
        public function __construct() {
            
            $this->modelo = new Conexion();
            $this->vista = new LoginVista();
            
        }
        
        
        
        
        
        public function mostrar(){
            
            
            $this->vista->mostarlogin();

        }
        
        
    }
    
    
    
    
    $login = new Login();    
    $login->mostrar();
    
    echo 'hola NO entro';
//     echo $_GET['usuario'];
     
    if($_GET['usuario']){
        echo $_GET['usuario'];
        
        echo 'hola entro';
    }
    
    
    
    $qry= "select * from usuario";
    
    print_r($login->modelo->get_resultados_query($qry));