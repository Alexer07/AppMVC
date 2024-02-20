
<h3>Administracion Usuarios</h3>

<a href="?controlador=usuario&accion=frmRegistrar" class="btn btn-primary">Registrar</a>


<div class="container-fluid pt-4 px-4">
    <div class="col-lg-12>">
        <div class="bd-ligth rounded p-4">
            <table class="table table-success table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th>  </th>
            </tr>
            <?php
            foreach($this->usuarios as $info){
                $uid=$info["Usu_UID"];
                echo"<tr>";
                echo"<td>".$info["Usu_Nombres"]."</td>";
                echo"<td>".$info["Usu_Apellidos"]."</td>";
                echo"<td>".$info["Usu_Email"]."</td>";
                echo"<td> <a href='?controlador=usuario&accion=frmRegistrar' class='btn btn-primary'>Editar</a> |
                <a href='?controlador=usuario&accion=eliminar&uid=$uid' class='btn btn-danger'>Eliminar</a></td>";
                echo"</tr>";
            }
            ?>
            </table>
        </div>
    </div>
</div>    