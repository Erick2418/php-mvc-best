<?php
class UsuarioController {
    public function index(){
        require_once 'views/usuarios/cuentaAdminView.php';
    }
    public function nuevo(){
        require_once 'views/usuarios/usuarioAdminCrearView.php';
    }
    public function misdatos(){
        require_once 'views/usuarios/usuarioDatosView.php';
    }
    public function modificar(){
        require_once 'views/usuarios/usuarioEditarView.php';
    }
}