<?php
require_once "Modelo/inicio_modelo.php";
class inicio_controlador{
    public function __construct(){
        $this-> obj= new Plantilla();
    }
    public function principal(){
        $this-> obj-> unirPagina("inicio/frmLogin",false);        
    }

    public function dashboard(){
        if(!isset($_SESSION["Usu_UID"])){
            header("location:/AppMVC2/AppMVC");
        }
        $this-> obj-> unirPagina("inicio/principal");       
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
                if (is_array($res)){
                    $_SESSION['Usu_Apellidos'] =$res["Usu_Apellidos"];
                    $_SESSION['Usu_Nombres'] =$res["Usu_Nombres"];
                    $_SESSION['Usu_UID'] =$res["Usu_UID"];
                    $_SESSION['Usu_ID'] =$res["Usu_ID"];
                    $_SESSION['Usu_Rol'] =$res["Usu_Rol"];
                }
            }
    }
    }


    public function cerrarSesion(){
        session_destroy();
        header("location:/AppMVC2/AppMVC");
    }

}
?>