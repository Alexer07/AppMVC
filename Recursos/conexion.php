<?php
class Conexion{
    public function  __construct(){
      try{
        $this->con = new PDO("mysql:host=localhost;dbname=dbmvc","root", "");
        $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            echo"Error:".$e->getMessage();
        }  
    }
    public function getConexion(){
        return $this->con;
    }
}


?>