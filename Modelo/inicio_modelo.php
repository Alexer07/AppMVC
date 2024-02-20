<?php
class inicio_modelo {
    public static function validarUsuario($datos){
        $i = new conexion();
        $con = $i->getConexion();
        $email = $datos["email"];
        $contraseña = sha1($datos["contraseña"]);
        
        $sql = "SELECT * from t_usuarios WHERE Usu_Email= '$email' AND Usu_Contraseña ='$contraseña'";

        $st = $con->prepare($sql);
        $st->execute();
        
         return $st->fetch() ;
         


    }

 }