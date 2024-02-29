<?php
require_once "Modelo/usuario_modelo.php";
class usuario_controlador{

    public function __construct(){
        if(!isset($_SESSION["Usu_UID"])){
            header("location:/AppMVC");
        }
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
        if(isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["email"]) && isset($_POST["contraseña"]) && isset($_POST["telefono"]) && isset($_POST["fechaNaci"]) && isset($_POST["Rol"])){
            extract ($_POST);
            $datos["nombre"] = $nombre;
            $datos["apellido"] = $apellido;
            $datos["email"] = $email;
            $datos["contraseña"] = $contraseña;
            $datos["telefono"] = $telefono;
            $datos["fechaNaci"] = $fechaNaci;
            $datos["Rol"] = $Rol;
            $res= usuario_modelo::buscarXEmail($email);
            if( is_array($res)){
                echo json_encode(array("estado"=> 2, "mensaje"=>"El correo ya se encuentra registrado", "icono" => "error"));
            }else{
                if($nombre != null && $apellido != null && $email != null && $contraseña != null && $telefono != null && $fechaNaci != null && $Rol != null ){
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

    public function Frmeditar(){
        $uid = $_GET["uid"];
        $this-> obj-> infoUsuario = usuario_modelo::BuscarXUid($uid);
        $this-> obj-> unirPagina("usuario/frmEditar");  
    }

    public function editar(){
        if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) && isset($_POST["fechaNaci"]) && isset($_POST["uid"])){
            extract ($_POST);
            $datos["nombre"] = $nombre;
            $datos["apellido"] = $apellido;
            $datos["telefono"] = $telefono;
            $datos["fechaNaci"] = $fechaNaci;
            $datos ['uid']=$uid;
            $res= usuario_modelo::actualizarDatos($datos);
            if( is_array($res)){
                echo json_encode(array("estado"=> 2, "mensaje"=>"El correo ya se encuentra registrado", "icono" => "error"));
            }else{
                if($nombre != null && $apellido != null && $telefono != null && $fechaNaci != null ){
                    $res = usuario_modelo::actualizarDatos($datos);
                    if($res>0){
                        echo json_encode(array("estado"=> 1, "mensaje"=>"Registro Exitoso", "icono" => "success"));
                    }
                }else {
                    echo json_encode(array("estado"=> 2, "mensaje"=>"Registro Incorrecto", "icono" => "error"));
                }
                } 
        }
            
    }



    public function eliminar(){
        if(isset($_GET["uid"])){
            $uid= $_GET["uid"];
            $r= usuario_modelo::eliminar($uid);
            if($r>0){
                header('location:?controlador=usuario&accion=principal');
            }
        }

    }

    public function buscar(){}

    public function ReportePDF(){
        $rol = $_POST["Rol"];
        $allUsers = usuario_modelo::listar("WHERE Usu_Rol = $rol");
        require_once "Vista/Usuario/Reporte.php";
        
    }

}

?>