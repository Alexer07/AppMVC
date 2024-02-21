<?php
class usuario_modelo{
    public static function registrar($info){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "INSERT INTO t_usuarios (Usu_UID,Usu_Nombres,Usu_Apellidos,Usu_Email,Usu_Contraseña,Usu_Telefono,Usu_FCH_NAC)
        VALUES
        (?,?,?,?,?,?,?)";
        $st=$con->prepare($sql);
        $uid= uniqid();
        $v= array(
            $uid,
            $info["nombre"]     , $info["apellido"],
            $info["email"]     , sha1($info["contraseña"]), //md5(), passaword_hash()
            $info["telefono"]     , $info["fechaNaci"]
        );
        return $st->execute($v);
    }
    public static function listar(){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT * FROM t_usuarios";
        $st=$con->prepare($sql);
        $st->execute();
        return $st->fetchAll();
    }

    public static function buscarXEmail($email){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT Usu_Nombres, Usu_Email FROM t_usuarios WHERE Usu_Email = ?";
        $st=$con->prepare($sql);
        $v = array($email);
        $st->execute($v);
        return $st->fetch();
    }
    public static function eliminar($uid){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "DELETE FROM t_usuarios WHERE Usu_UID = ?";
        $st=$con->prepare($sql);
        $v = array($uid);
        return  $st->execute($v);
    }
    public static function BuscarXUid($uid){
        $i = new conexion();
        $con = $i->getConexion();
      $sql = "SELECT * FROM t_usuarios WHERE Usu_UID = ?";
      $st = $con->prepare($sql);
      $v = array($uid);
      $st->execute($v);
      return $st ->fetch();
    }  

    public static function actualizarDatos($UD){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "UPDATE t_usuarios SET Usu_Nombres=?,Usu_Apellidos=?,Usu_Telefono=?,Usu_FCH_NAC=? WHERE Usu_UID=?";
        $st = $con->prepare($sql);
        $a = array(
            $UD['nombre'],$UD['apellido'],$UD['telefono'],$UD['fechaNaci'],$UD['uid']
        );
        return $st->execute($a);
    }

    

}    

?>