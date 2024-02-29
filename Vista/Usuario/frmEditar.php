<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Editar Usuario</h6>
                            <form method="Post" action="?controlador=usuario&accion=editar"  onsubmit="return false;" id="frm">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombres</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"  value="<?php echo $this ->infoUsuario["Usu_Nombres"];?>" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                                        <input type="tex" class="form-control" id="apellido" name="apellido"  value="<?php echo $this ->infoUsuario["Usu_Apellidos"];?>" >
                                    </div>                                   
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono"  value="<?php echo $this ->infoUsuario["Usu_Telefono"];?>" >
                                    </div>  
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="fechaNaci" name="fechaNaci"  value="<?php echo $this ->infoUsuario["Usu_FCH_NAC"];?>" >
                                    </div>
                                    <div class="col-lg-6">
                   
                                    <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $this ->infoUsuario["Usu_UID"];?>">
                                    </div>
                                                                     
                                 </div>  
                                <button type="submit" class="btn btn-primary mt-4" onclick="EditarUsuario()">Editar</button>  
                            </form>
                        </div>
                    </div>