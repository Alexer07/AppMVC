<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Registro de Programa</h6>
                            <form method="Post" action="?controlador=programa&accion=registrar"  onsubmit="return false;" id="#frmpro">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de Programa</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombres" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Codigo</label>
                                        <input type="tex" class="form-control" id="codigo" name="codigo" placeholder="123456"  >                                 
                                 </div>  
                                <button type="submit" class="btn btn-primary mt-4" onclick="registrarPrograma()">Registrar</button>  
                            </form>
                        </div>
                    </div>