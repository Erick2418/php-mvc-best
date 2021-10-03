<?php require_once 'views/partials/headeradmin.php'; ?>
      <div class="container py-5" style="min-width: 100%;">
         <div class="row">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="input_usuario" class="form-control" disabled/>
                <label class="form-label ml-3" for="input_usuario" style="color: #555">
                    <p class="d-1"><i class="fas fa-portrait mx-1"></i>Usuario</p>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="input_rol" class="form-control" disabled/>
                <label class="form-label ml-3" for="input_rol" style="color: #555">
                    <p class="d-1"><i class="fas fa-user-tag mx-1"></i>Rol</p>
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="input_nombre" class="form-control" disabled/>
                <label class="form-label ml-3" for="input_nombre" style="color: #555">
                    <p class="d-1"><i class="fas fa-user mx-1"></i>Nombre</p>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="input_apellido" class="form-control" disabled/>
                <label class="form-label ml-3" for="input_apellido" style="color: #555">
                    <p class="d-1"><i class="fas fa-user mx-1"></i>Apellido</p>
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="input_correo" class="form-control" disabled/>
                <label class="form-label ml-3" for="input_correo" style="color: #555">
                    <p class="d-1"><i class="fas fa-envelope mx-1"></i>Correo electrónico</p>
                </label>
              </div>
            </div>
          </div>
      </div>

<?php require_once 'views/partials/footeradmin.php';?>