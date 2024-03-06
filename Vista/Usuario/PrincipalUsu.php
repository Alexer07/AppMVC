<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-lg-12>">
            <div class="bd-ligth rounded p-4">
                <h3>Administracion Usuarios</h3>
                <a href="?controlador=usuario&accion=frmRegistrar" class="btn btn-primary">Registrar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12>">
            <div class="bd-ligth rounded p-4">
                <h3>Reporte de Usuarios PDF</h3>
                <form action="?controlador=usuario&accion=ReportePDF" method="post" target="_blank">
                    <select name="Rol" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Estudiante</option>
                        <option value="3">Secretaria</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Aceptar" name="Aceptar"></input>
                </form>
            </div>
        </div>
    </div>
            <table class="table table-success table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <?php
                if($_SESSION['Usu_Rol']== 1){
                   echo" <th scope='col'>Telefono</th>";
                   echo" <th scope='col'>Fecha de Nacimiento</th>";
                }
                ?>
                <th>  </th>
            </tr>
            <?php
            foreach($this->usuarios as $info){
                $uid=$info["Usu_UID"];
                echo"<tr>";
                echo"<td>".$info["Usu_Nombres"]."</td>";
                echo"<td>".$info["Usu_Apellidos"]."</td>";
                echo"<td>".$info["Usu_Email"]."</td>";
                echo"<td>".$info["Usu_Rol"]."</td>";
                if($_SESSION['Usu_Rol']== 1){
                    echo"<td>".$info["Usu_Telefono"]."</td>";
                    echo"<td>".$info["Usu_FCH_NAC"]."</td>";
                    echo"<td> <a href='?controlador=usuario&accion=frmEditar&uid=$uid' class='btn btn-primary'>Editar</a> |
                    <button class= 'btn btn-danger name='usuarios' mt-3' data-name='usuarios' data-id='$uid' onclick='eliminar()'>Eliminar</button>";
                    echo"</tr>";
                }
            }
            ?>
            </table>
        </div>
    </div>
    
</div>    