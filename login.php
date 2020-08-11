<?php session_start();

require 'admin/config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location:' .RUTA. '/admin');
    } else {
        $password = hash('sha512', $password);

        try {
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    
        $statement = $conexion->prepare(
            'SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
        );
        $statement->execute(array(':usuario' => $usuario, ':password' => $password));
    
        $resultado = $statement->fetch();
        if ($resultado !== false) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        } else {
            $errores .= '<li>Datos Incorrectos</li>';
        }
    }
}
    
require 'views/login.view.php';

?>