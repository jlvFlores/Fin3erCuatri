<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

require 'admin/config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=integrador', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

    $statement = $conexion->prepare(
        'SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
    );
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));

    $resultado = $statement->fetch();
    if ($resultado !== false) {
        if ($_SESSION['usuario'] == $blog_admin['usuario']) {
            $_SESSION['admin'] = $blog_admin['usuario'];
            header('Location:' . RUTA . '/admin/index.php');
        } else if ($_SESSION['usuario'] = $usuario) {
        header('Location: index.php');
        }
    } else {
        $errores .= '<li>Datos Incorrectos</li>';
    }
}

require 'views/login.view.php';

?>