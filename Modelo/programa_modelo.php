<?php
class programa_modelo{
    public static function registrar($info){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "INSERT INTO t_programa (Pro_UID,Pro_Nombre,Pro_Codigo)
        VALUES
        (?,?,?)";
        $st=$con->prepare($sql);
        $uid= uniqid();
        $v= array(
            $uid,
            $info["nombre"]     , $info["codigo"],
        );
        return $st->execute($v);
    }
    public static function listar(){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT * FROM t_programa";
        $st=$con->prepare($sql);
        $st->execute();
        return $st->fetchAll();
    }

    public static function buscarXCodigo($codigo){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT * FROM t_programa WHERE Pro_UID  = ?";
        $st=$con->prepare($sql);
        $v = array($codigo);
        $st->execute($v);
        return $st->fetch();
    }

    public static function actualizar($info){
        $i = new conexion();
        $con = $i->getConexion();
      
        $sql = "UPDATE t_programa SET Pro_Nombre = ?, Pro_Codigo = ?
        WHERE Pro_UID=?";
        $st = $con->prepare($sql);
        $p = array(

            $info['nombre'], $info['codigo'], $info['uid'] 
         );
          return $st->execute($p); 
        
    }  
}  

?>