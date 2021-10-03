<?php require_once 'views/partials/headeradmin.php'; ?>
<script src="assets/js/validarall.js"> </script>
<div class="col-12 p-5">
    <div class="mask mb-5" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="text-white text-center align-middle mp-3">Nuevo servicio</h1>
        </div>
    </div>
    <form>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline text-right">
                    <input type="text" id="input_nombre" class="form-control"onkeypress="return soloLetras(event)" required="" />
                    <label class="form-label ml-3" for="input_nombre" style="color: #555">Nombre</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline text-right">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" id="input_precio" class="form-control" required="" />
                    </div>
                    <label class="form-label mr-3" for="input_precio" style="color: #555">Precio</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline text-right">
                    <input type="number" id="input_precio" class="form-control" required=""/>
                    <label class="form-label ml-3" for="input_precio" style="color: #555">Imagen (nombre_del_archivo.jpg)</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4 text-right">
            <textarea id="input_descripcion" class="form-control" style="resize: none"></textarea>
            <label class="form-label ml-3" for="input_descripcion" style="color: #555">Descripción del producto</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Crear</button>
    </form>
</div>

<?php require_once 'views/partials/footeradmin.php';?>