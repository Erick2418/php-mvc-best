<?php
class IndexController {
    public function index(){


        require_once "views/homeView.php";
        //require_once 'views/usuarios/cuentaAdminView.php';
    }
    public function nosotros(){
        require_once 'views/partials/Nosotros.php';
        //require_once 'views/usuarios/cuentaAdminView.php';
    }


}
