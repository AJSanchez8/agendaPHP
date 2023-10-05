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
        <h1>Agenda App</h1>
    </div>
    <div id="menu">
        <?php

        echo (
            "<a class='button' href='mostrar.php'>Mostrar amigos</a>
            <a class='button' href='insertar.php'>Insertar nuevo amigo</a>
            <a class='button' href='borrar.php'>Borrar amigos por nombre</a>
            <a class='button' href='editar.php'>Editar amigos por nombre</a>"
        );
            
        ?>
        <div id="añadirHeader"><h2>Añadir Amigo</h2></div>

        <div id="add-friend-form">
        <h2>Rellena los datos:</h2>
            <form action="insertar.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="numero">Teléfono:</label>
                <input type="text" id="numero" name="numero" required>

            <input type="submit" value="Añadir Amigo">
        </form>
        </div>

        <?php 

        echo "<ul>";
        foreach($_SESSION['listaNombre'] as $amigo){
            echo "<li>Nombre: ".$amigo->getNombre()." 📱Teléfono: ".$amigo->getNumero();

        }
        echo "</ul>";

        ?>



    </div>
</body>
</html>
