<?php session_start();

if (isset($_SESSION['usuario'])) {
    require 'views/galeria.view.php';
} else {
    header('Location: login.php');
}

?>