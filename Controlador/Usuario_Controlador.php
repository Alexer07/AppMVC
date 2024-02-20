<?php
require_once "Modelo/usuario_modelo.php";
class usuario_controlador{

    public function __construct(){
        $this->obj = new Plantilla();
    }
    public function principal(){
        $this-> obj-> usuarios = usuario_modelo::listar();  
        $this-> obj-> unirPagina("usuario/PrincipalUsu");        
    }

    public function frmRegistrar(){
        $this-> obj-> unirPagina("usuario/frmRegistrar");    
    }
    public function registrar(){
        if(isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["email"]) && isset($_POST["contraseña"]) && isset($_POST["telefono"]) && isset($_POST["fechaNaci"])){
            extract ($_POST);
            $datos["nombre"] = $nombre;
            $datos["apellido"] = $apellido;
            $datos["email"] = $email;
            $datos["contraseña"] = $contraseña;
            $datos["telefono"] = $telefono;
            $datos["fechaNaci"] = $fechaNaci;
            $res= usuario_modelo::buscarXEmail($email);
            if( is_array($res)){
                echo json_encode(array("estado"=> 2, "mensaje"=>"El correo ya se encuentra registrado", "icono" => "error"));
            }else{
                if($nombre != null && $apellido != null && $email != null && $contraseña != null && $telefono != null && $fechaNaci != null ){
                    $res = usuario_modelo::registrar($datos);
                    if($res>0){
                        echo json_encode(array("estado"=> 1, "mensaje"=>"Registro Exitoso", "icono" => "success"));
                    }
                }else {
                    echo json_encode(array("estado"=> 2, "mensaje"=>"Registro Incorrecto", "icono" => "error"));
                }
                } 
        }
            
    }

    public function frmEditar(){}
    public function editar(){}

    public function eliminar(){
        if(isset($_GET["uid"])){
            $uid= $_GET["uid"];
            $r= usuario_modelo::eliminar($uid);
            echo"Se elimino";
        }

    }

    public function buscar(){}

}

?>