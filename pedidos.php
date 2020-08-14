<?php session_start();

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion) {
    header('Location: ../error.php');
}

if (isset($_SESSION['usuario'])) {
    require 'views/pedidos.view.php';
} else {
    header('Location: login.php');
}

?>