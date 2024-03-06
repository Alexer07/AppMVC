<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Inscripcion de Programas</h6>
                            <form method="Post" action="?controlador=programa&accion=registrar"  onsubmit="return false;" id="#frmpro">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de Programa</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Estudiante</label>
                                        <input type="tex" class="form-control" id="codigo" name="codigo">                                 
                                 </div>  
                                <button type="submit" class="btn btn-primary mt-4" onclick="registrarUsuPro()">Registrar</button>  
                            </form>
                        </div>
                    </div>