<?php
require_once "Modelo/inicio_modelo.php";
class inicio_controlador{
    public function __construct(){
        $this-> obj= new Plantilla();
    }
    public function principal(){
        $this-> obj-> unirPagina("inicio/frmLogin",false);        
    }
    public function frmLogin(){
        $this-> obj-> unirPagina("inicio/frmLogin");    
    }

    public function validarUsuario(){
        if( isset($_POST['email'])&& isset($_POST['contraseña'])){
            extract($_POST);
            $datos ['email']=$email;
            $datos ['contraseña']=$contraseña;
            $res = inicio_modelo::validarUsuario($datos);
            if($res>0){
                echo json_encode(array("estado"=>1, "mensaje"=> "Datos Correctos", "icono"=>"sucess"));
            }else{
                echo json_encode(array("estado"=>2, "mensaje"=> "Datos Incorrectos", "icono"=>"error"));
        }
    }
    }

    public function cerrarSesion(){}

}
?>