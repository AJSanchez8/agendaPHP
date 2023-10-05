<?php
include('Amigo.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];
    
    // Agregar amigo con nombre y número
    agregarAmigo($nombre, $numero);
    header("Location: mostrar.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agenda App</title>
    <link href="./style/style.css" rel="stylesheet">
</head>
<body>
<div id="header">
        <img src='./resources/php.png'>
        <h1>Agenda</h1>
        <a href="https://github.com/AJSanchez8/agendaPHP" target=_blank><img src='./resources/github2.png' alt='Enlace gitHub'></a>
    </div>
    <div id="menu">
        <?php

echo (
    "<a class='button' href='mostrar.php'>Mostrar amigos</a>
    <a class='button' href='insertar.php'>Insertar nuevo amigo</a>
    <a class='button' href='borrar.php'>Borrar/editar amigos</a>"
);
            
        ?>


        <div id="add-friend-form">
        <h2>Añade amigo:</h2>
            <form action="insertar.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="numero">Teléfono:</label>
                <input type="number" min="100000000" max="999999999" id="numero" name="numero" required>

            <input type="submit" value="Añadir Amigo">
        </form>
        </div>

        <?php 

        echo "<ul>";
        if (empty($_SESSION['listaNombre'])) {
            echo "<li class='vacia'>Lista vacía</li>";
        } else {
            foreach ($_SESSION['listaNombre'] as $amigo) {
                echo "<li>👥: " . $amigo->getNombre() . " ---->📱 " . $amigo->getNumero();
            }
        }
        echo "</ul>";

        ?>



    </div>
</body>
</html>
