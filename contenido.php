<?php session_start();

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion) {
    header('Location: ../error.php');
}

$posts = obtener_post(8, $conexion);

if (isset($_SESSION['usuario'])) {
    require 'views/contenido.view.php';
} else {
    header('Location: login.php');
}

?>