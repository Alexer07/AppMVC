<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Editar Programa</h6>
                            <form method="Post" action="?controlador=programa&accion=editar"  onsubmit="return false;" id="#frmpro">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de Programa</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $this ->infoprograma["Pro_Nombre"]?>" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Codigo</label>
                                        <input type="tex" class="form-control" id="codigo" name="codigo" value="<?php echo $this ->infoprograma["Pro_Codigo"]?>" >  
                                 </div> 
                                 <div class="col-lg-6">                  
                                    <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $this ->infoprograma["Pro_UID"];?>">
                                 </div> 
                                <button type="submit" class="btn btn-primary mt-4" onclick="EditarPrograma()">Editar</button>  
                            </form>
                        </div>
                    </div>