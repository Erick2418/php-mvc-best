<?php require_once 'views/partials/headeradmin.php'; ?>
      <div class="container py-5" style="min-width: 100%;">
        <div class="row justify-content-center">
            <div class="align-items-center h-100">
                <div class="text-center">
                    <h1 class="mb-3">PRODUCTOS</h1>
                </div>
                <form action="index.php" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control">
                        <button class="btn btn-primary ml-1"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
          <div class="col-12">
            <div class="table-responsive" style="color: #000">
              <table class="table mb-0 table-hover">
                <thead >
                  <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tiger Nixon</th>
                    <td>System Architect</td>
                    <td>tnixon12@example.com</td>
                    <td>61</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh</td>
                  </tr>
                  <tr>
                    <th>Sonya Frost</th>
                    <td>Software Engineer</td>
                    <td>sfrost34@example.com</td>
                    <td>23</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh</td>
                  </tr>
                  <tr>
                    <th>Jena Gaines</th>
                    <td>Office Manager</td>
                    <td>jgaines75@example.com</td>
                    <td>30</td>
                    <td>London</td>
                    <td>Edinburgh</td>
                  </tr>
                  <tr>
                    <th>Quinn Flynn</th>
                    <td>Support Lead</td>
                    <td>qflyn09@example.com</td>
                    <td>22</td>
                    <td>Edinburgh</td>
                    <td>Edinburgh</td>
                  </tr>
                  <tr>
                    <th>Charde Marshall</th>
                    <td>Regional Director</td>
                    <td>cmarshall28@example.com</td>
                    <td>36</td>
                    <td>San Francisco</td>
                    <td>Edinburgh</td>
                  </tr>
                  <tr>
                    <th>Haley Kennedy</th>
                    <td>Senior Marketing Designer</td>
                    <td>hkennedy63@example.com</td>
                    <td>43</td>
                    <td>London</td>
                    <td>Edinburgh</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<?php require_once 'views/partials/footeradmin.php';?>