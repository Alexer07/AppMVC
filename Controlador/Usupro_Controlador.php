<?php
class Usupro_Controlador{

    public function __construct(){
        $this->obj = new Plantilla();
    }

    public function frmRegistrar(){
        $this-> obj-> unirPagina("Usupro/frmRegistrar"); 
    }
    public function registrar(){
        if(isset($_POST["nombre"]) && isset($_POST["codigo"])){
            extract ($_POST);
            $datos["nombre"] = $nombre;
            $datos["codigo"] = $codigo;              
            $res= usupro_modelo::buscarXCodigo($codigo);
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

    public function frmEditar(){}
    public function editar(){}

    public function eliminar(){}

    public function buscar(){}

}

?>