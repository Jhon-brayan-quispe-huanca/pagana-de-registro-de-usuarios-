<?php
include_once "../clases/registrar-clases.php";
include_once "../clases/conexionDB.php";
include_once "../clases/registrarControlador-clases.php";

if(isset($_REQUEST['submit'])){
    $usuario = $_REQUEST['user'];
    $correo = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];
    $passRepetido = $_REQUEST['pwdrepeat'];

    $insertar = new RegistrarCont($usuario, $password,$passRepetido,$correo);
    $insertar->RegistrarUsuario();
    header('Location: ../index.php?error=ninguno');

    //$objeto = new Registrar();
    //$objeto->agregarUsuario($usuario, $password, $correo);
}
?>