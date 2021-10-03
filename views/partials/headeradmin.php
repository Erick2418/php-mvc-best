<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/adminstyle.css">
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" style="background-color: #880E4F">
            <div class="p-4 pt-5">
                <div class="text-center mb-3">Administrador</div>
                <div class="img logo rounded-circle mb-5" style="background-image: url(http://ensogo.com.mx/style/images/team/user.png);"></div>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="index.php?c=usuario">Mis datos</a>
                    </li>
                    <li>
                        <a href="index.php?c=dashboard">Datos estadísticos</a>
                    </li>
                    <li>
                        <a href="#usuarioSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
                        <ul class="collapse list-unstyled" id="usuarioSubmenu">
                            <li>
                                <a href="index.php?c=usuario&a=nuevo">Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="index.php?c=usuario">Mostrar usuarios</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#productoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Productos</a>
                        <ul class="collapse list-unstyled" id="productoSubmenu">
                            <li>
                                <a href="index.php?c=producto&a=nuevo">Nuevo producto</a>
                            </li>
                            <li>
                                <a href="index.php?c=producto">Mostrar productos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#servicioSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Servicios</a>
                        <ul class="collapse list-unstyled" id="servicioSubmenu">
                            <li>
                                <a href="index.php?c=servicio&a=nuevo">Nuevo servicio</a>
                            </li>
                            <li>
                                <a href="index.php?c=servicio">Mostrar servicios</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="footer">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    </p>
                </div>
            </div>
        </nav>
        <!-- Page Content  -->
<!--        <div id="content" class="p-4 p-md-5" style="background-image: url('https://mdbootstrap.com/img/Photos, url('assets/images/admin/pexels-cottonbro-3993136.jpg');">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">/new-templates/tables/img2.jpg');">-->
        <div id="content" class="p-4 p-md-5" style="background: linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)), url('assets/images/admin/pexels-cottonbro-3993122.jpg'); background-size: cover">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                <div class="mask d-flex align-items-center" style="background-color: rgba(0,0,0,.25)">
                