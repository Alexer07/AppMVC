<?php
require_once "Modelo/programa_modelo.php";
class programa_controlador{

    public function __construct(){
        $this->obj = new Plantilla();
    }
    public function principal(){
        $this-> obj-> programas = programa_modelo::listar();
        $this-> obj-> unirPagina("programa/principalpro"); 
                 
    }

    public function frmRegistrar(){
        $this-> obj-> unirPagina("programa/frmRegistrar");   
    }
    public function registrar(){
            if(isset($_POST["nombre"]) && isset($_POST["codigo"])){
                extract ($_POST);
                $datos["nombre"] = $nombre;
                $datos["codigo"] = $codigo;              
                $res= programa_modelo::buscarXCodigo($codigo);
                if( is_array($res)){
                    echo json_encode(array("estado"=> 2, "mensaje"=>"El Codigo ya se encuentra registrado", "icono" => "error"));
                }else{
                    if($nombre != null && $codigo != null ){
                        $res = programa_modelo::registrar($datos);
                        if($res>0){
                            echo json_encode(array("estado"=> 1, "mensaje"=>"Registro Exitoso", "icono" => "success"));
                        }
                    }else {
                        echo json_encode(array("estado"=> 2, "mensaje"=>"Registro Incorrecto", "icono" => "error"));
                    }
                    } 
            }
                
    }

    public function frmEditar(){
        $uid = $_GET["uid"];
        $this-> obj-> infoprograma = programa_modelo::buscarXCodigo($uid);
        $this-> obj-> unirPagina("programa/frmEditar");
    }
    public function editar(){if(isset($_POST["nombre"]) && isset($_POST["codigo"])){
        extract ($_POST);
        $datos["nombre"] = $nombre;
        $datos["codigo"] = $codigo;
        $datos["uid"] = $uid;
        $res = programa_modelo::actualizar($datos);
            if ($res>0){
                echo json_encode(array("estado"=>1, "mensaje" => "Actualizado", "icono"=>"success")) ;
            }
            else{
                echo json_encode(array("estado"=>2, "mensaje" => "Error al actualizar", "icono"=>"error")) ;
            }
        }
    }
        

    public function eliminar(){}

    public function buscar(){}
}

?>