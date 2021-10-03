<?php require_once 'views/partials/headeradmin.php'; ?>
<script src="assets/js/validarall.js"> </script>

<div class="col-12 p-5">
    <div class="mask mb-5" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="text-white text-center align-middle mp-3">Nuevo usuario</h1>
        </div>
    </div>
    <form>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="input_usuario" class="form-control" required=""/>
                    <label class="form-label ml-3" for="input_usuario" style="color: #555">Usuario</label>
                </div>
            </div>
            <div class="col text-right">
<!--                <div class="form-outline">
                    <input type="text" id="input_password" class="form-control" />
                    <label class="form-label" for="input_password" style="color: #555">Contraseña</label>
                </div>-->
                <select class="form-control" name="input_tipo" id="input_tipo">
                    <option>Administrador</option>
                    <option>Gerente</option>
                    <option>Empleado</option>
                    <option>Cliente</option>
                </select>
                <label class="form-label mr-3" for="input_password" style="color: #555">Rol</label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="input_nombre" class="form-control" onkeypress="return soloLetras(event)" required=""/>
                    <label class="form-label ml-3" for="input_nombre" style="color: #555">Nombre</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline text-right">
                    <input type="text" id="input_apellido" class="form-control" onkeypress="return soloLetras(event)" required="" />
                    <label class="form-label mr-3" for="input_apellido" style="color: #555">Apellido</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="email" id="input_correo" class="form-control" required=""/>
            <label class="form-label ml-3" for="input_correo" style="color: #555">Correo electrónico</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Crear</button>
    </form>
</div>

<?php require_once 'views/partials/footeradmin.php';?>