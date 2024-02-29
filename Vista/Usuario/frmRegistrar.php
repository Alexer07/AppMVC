<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Registro de Usuario</h6>
                            <form method="Post" action="?controlador=usuario&accion=registrar"  onsubmit="return false;" id="frm">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombres</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombres" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                                        <input type="tex" class="form-control" id="apellido" name="apellido" placeholder="Ingrese Apellidos"  >
                                    </div>                                   
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@gmail.com" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="**********" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" >
                                    </div>  
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="fechaNaci" name="fechaNaci" placeholder="" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Rol</label>
                                        <input type="text" class="form-control" id="Rol" name="Rol" placeholder="">
                                    </div>
                                                                     
                                 </div>  
                                <button type="submit" class="btn btn-primary mt-4" onclick="registrarUsuario()">Registrar</button>  
                            </form>
                        </div>
                    </div>