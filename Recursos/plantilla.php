<?php
class Plantilla{
    public function unirPagina($contenido, $paginacompleta=true){
        if($paginacompleta){
        require_once"Vista/Header.php";
        require_once"Vista/$contenido".".php";
        require_once"Vista/footer.php";
        }else{
            require_once "vista/$contenido".".php";
        }
    }

}

?>