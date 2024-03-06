<?php 
class Usupro_modelo{
public static function buscarXCodigo($codigo){
    $i=new Conexion();
    $con= $i->getConexion();
    $sql= "SELECT * FROM t_programa WHERE Pro_UID  = ?";
    $st=$con->prepare($sql);
    $v = array($codigo);
    $st->execute($v);
    return $st->fetch();
}
}
?>