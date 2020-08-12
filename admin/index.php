<?php session_start();
//Archivo index del ADMIN
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

//comprobar sesion
comprobarSession();

if(!$conexion) {
    header('Location: ../error.php');
}

$posts = obtener_post($blog_config['articulos_por_pagina'], $conexion);


require '../views/admin_index.view.php';

?>