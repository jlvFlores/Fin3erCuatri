<?php 
 /* borrar o editar a baso como lo necesitemos */
function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($articulos_por_pagina, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $articulos_por_pagina - $articulos_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $articulos_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function numero_paginas($articulos_por_pagina, $conexion){
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $articulos_por_pagina);
    return $numero_paginas;
}

function id_articulo($id){
    return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function comprobarSession() {
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . RUTA);
    }
}

?>