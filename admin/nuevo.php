<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if(!$conexion){
    header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $nombre = limpiarDatos($_POST['nombre']);
   $cantidad = $_POST['cantidad'];
   $precio = $_POST['precio'];
   $texto = limpiarDatos($_POST['texto']);
   $thumb = $_FILES['thumb']['tmp_name'];

   $archivo_subido ='../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

   move_uploaded_file($thumb, $archivo_subido);

   $statement = $conexion->prepare(
      'INSERT INTO articulos (id, nombre, cantidad, precio, texto, thumb)
      VALUES (null, :nombre, :cantidad, :precio, :texto, :thumb)'
   );

   $statement->execute(array(
      ':nombre'=> $nombre,
      ':cantidad'=> $cantidad,
      ':precio'=> $precio,
      ':texto'=> $texto,
      ':thumb'=> $_FILES['thumb']['name']
   ));

   header('Location: '. RUTA . '/admin');
}

require '../views/nuevo.view.php';

?>