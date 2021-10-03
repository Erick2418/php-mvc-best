<?php require_once 'views/partials/header.php'; ?>

<style>
.button {
  background-color: #8C13B9;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.buttonmalo
{
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}



.botones
{
 position: relative;
  left: 600px;
}



</style>

<div class="col-12 p-5">
    <div class="mask mb-5" style="background-color:#3B094D">
        <div class="d-flex justify-content-center align-items-center h-100">
            <h1 class="text-white text-center align-middle mp-3">DATOS DE USUARIO</h1>
        </div>
    </div>
    
    
   
    <form>  
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="input_usuario" class="form-control" value ="AQUI PONES LA basura ROBERTITO" disabled/>              
                    <label class="form-label" for="input_usuario" style="color: #555">Usuario</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="input_password" class="form-control" value ="AQUI PONES LA basura ROBERTITO" disabled />
                    <label class="form-label" for="input_password" style="color: #555">Contraseña</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="input_nombre" class="form-control" value ="AQUI PONES LA basura ROBERTITO" disabled />
                    <label class="form-label" for="input_nombre" style="color: #555">Nombre</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="input_apellido" class="form-control" value ="AQUI PONES LA basura ROBERTITO" disabled />
                    <label class="form-label" for="input_apellido" style="color: #555">Apellido</label>
                </div>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="email" id="input_correo" class="form-control" value ="AQUI PONES LA basura ROBERTITO" disabled />
            <label class="form-label" for="input_correo" style="color: #555">Correo electrónico</label>
        </div>
     
        <div class="botones">
       <button type="submit" class="button">Cambiar Datos</button>
        <button type="submit" class="buttonmalo">Salir</button>
        </div>
    </form>
</div>
</div>


<?php require_once 'views/partials/footer.php';?>