<!DOCTYPE html>
<?php
if(!isset($_SESSION)){
    session_start();
}?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shalom Peluquería</title>
    <!--BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- OTROS -->
    <link rel="stylesheet" href="assets/css/Shalom.css">
    <link rel="stylesheet" href="assets/css/efects.css">
    <link rel="stylesheet" href="assets/css/menustyle.css">
    <link rel="stylesheet" href="assets/css/footerstyle.css">
    <link href="assets/css/login.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/css/landing-page.min.css" rel="stylesheet">
    <!-- w3 schoools estilos   estilo de brode sombreado de la card-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--ESTILOS PROPIOS -->
 	<link rel="stylesheet" href="assets/css/disenioCard.css">
     
     
        
        
</head>
<body>
        <?php  
        if (isset($_GET['idnavs'])) {
            $idnavs = $_GET['idnavs'];
        }else{
            $idnavs =1;
        }
        $activate= array(" "," "," "," "," "," ");
        if($idnavs==1){
            $activate[1]=" active";
        }if($idnavs==2){
            $activate[2]=" active";
        }if($idnavs==3){  
            $activate[3]=" active";
        }if($idnavs==4){
            $activate[4]=" active";
        }if($idnavs==5){
            $activate[5]=" active";
        }if($idnavs==6){
            $activate[6]=" active";
        }
       // echo '231232312';
        ?>
<main>

    <nav class="navbar navbar-expand-custom navbar-mainbg" style="position: fixed; z-index: 500; width: 100%">
<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="fas fa-bars text-white"></i>
</button>-->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-0">
                <div class="hori-selector"></div>
                <li id="n1" class="nav-item <?php echo $activate[1] ?>">
                    <a id="clase1" class="nav-link" href="index.php?idnavs=1"><i class="fas fa-home"></i>Home</a>
                </li>
                <li id="n2" class="nav-item <?php echo $activate[2] ?>">
                    <a id="clase1" class="nav-link" href="index.php?c=Producto&a=catalogoProduco&idnavs=2"><i class="far fa-address-book" ></i>Productos</a>
                </li>
                <li id="n3" class="nav-item <?php echo $activate[3] ?>">
                    <a id="clase1" class="nav-link" href="index.php?c=Servicio&a=MostrarCatalogoServicios&idnavs=3"><i class="far fa-clone"></i>Tratamientos</a>
                </li>
                <li id="n4" class="nav-item <?php echo $activate[4] ?>">
                    <a id="clase1" class="nav-link" href="index.php?c=Index&a=nosotros&idnavs=4"><i class="far fa-calendar-alt"></i>Contacto</a>
                </li>
                <?php 
                if(isset($_SESSION['rol'])) { 
                    $pepe = $_SESSION['rol'];
                    if ($pepe == 1){?>

                        <li id="n5" class="nav-item <?php echo $activate[5] ?>">
                            <a id="clase1" class="nav-link" href="index.php?c=usuario&a=index"><i class="far fa-chart-bar"></i>Charts</a>
                            </li><?php  
                        }
                } ?>
            </ul>
        </div>
        
 
    <?php if(isset($_SESSION['usuario'])) { ?>      
        
        <span class="btn btn-outline-light mx-1" data-toggle="modal" data-target="#exampleModa1">                
           <strong> Hola <?php echo $_SESSION['usuario'] ?> </strong>
       </span>

       <a class="btn btn-outline-light mx-1" href="index.php?c=login&a=logout">
           <strong>Salir</strong>
       </a>
        <?php
    }else 
    {?>
        <span class="btn btn-outline-light mx-1" data-toggle="modal" data-target="#exampleModa1">
            <strong>Iniciar sesión</strong>
        </span>
        <span class="btn btn-outline-light mx-1" data-toggle="modal" data-target="#exampleModa2">
            <strong>Registrarse</strong>
        </span>  
        
        <?php  
    }   ?>    
        
        
        <a class="navbar-brand navbar-logo font-italic m-0" href="index.php">Shalom </a>
    </nav>
    
   
    
    <script  src="assets/js/menufunctions.js"></script>
 <script src="assets/js/movimientonav.js"></script>
