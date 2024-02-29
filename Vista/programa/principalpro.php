<h3>Programa Principal</h3>
<a href="?controlador=programa&accion=frmRegistrar" class="btn btn-primary">Registrar</a>

<div class="container-fluid pt-4 px-4">
    <div class="col-lg-12>">
        <div class="bd-ligth rounded p-4">
            <table class="table table-success table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Codigo</th>
                <th>  </th>
            </tr>
            <?php
            foreach($this->programas as $info){
                $uid=$info["Pro_UID"];
                echo"<tr>";
                echo"<td>".$info["Pro_Nombre"]."</td>";
                echo"<td>".$info["Pro_Codigo"]."</td>";
                echo"<td> <a href='?controlador=programa&accion=frmEditar&uid=$uid' class='btn btn-primary'>Editar</a> | <a href='?controlador=programa&accion=frmRegistrar' class='btn btn-primary'>Eliminar</a> </td>";
                echo"</tr>";
            }
            ?>
            </table>
        </div>
    </div>
</div>    
