<?php
include('Amigo.php');
session_start();


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
                <a class='button' href='borrar.php'>Borrar amigos</a>
                <a class='button' href='editar.php'>Editar amigos</a>"
            );
        ?> 
        <hr>
    <div id="añadirHeader"><h2>Editar Amigo</h2></div>
        <div id="add-friend-form">
        <h2>Nombre del amigo a <strong class="editar">EDITAR</strong></h2>
            <form action="procesar_formulario.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            <input type="submit" value="Añadir Amigo">
        </form>
        </div>
        <?php 
        echo "<ul>";
        if (empty($_SESSION['listaNombre'])) {
            echo "<li class='vacia'>Lista vacía</li>";
        } else {
            foreach ($_SESSION['listaNombre'] as $amigo) {
                echo "<li class='amigoBorrar'>👥: " . $amigo->getNombre() . " -->📱: " . $amigo->getNumero() . "
                      <form method='post' action='botonBorrar.php'> 
                          <input type='hidden' name='nombre' value='" . $amigo->getNombre() . "'>
                          <input class='botonBorrar' type='submit' value='Eliminar' >
                      </form>
                      </li>";
            }
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>
