<?php
// Incluimos la clase amigo
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
            echo "<hr>";
            
            echo "<ul>";
            foreach($_SESSION['listaNombre'] as $amigo){
                echo "<li>Nombre: ".$amigo->getNombre()." 📱 Numero de teléfono: ".$amigo->getNumero();
 
            }
            echo "</ul>";

        // Verifica si $_SESSION["listaNombre"] existe y verifica tambien si esta vacío
        // if (isset($_SESSION["listaNombre"]) && !empty($_SESSION["listaNombre"])) {
        //     echo "<ul>";
        //     foreach ($_SESSION["listaNombre"] as $amigo) {
        //         if (isset($amigo["nombre"]) && isset($amigo["numero"])) { //muestra si el objeto amigo existe y si esta vacío
        //             echo "<li>Nombre: " . $amigo["nombre"] . ", Teléfono: " . $amigo["numero"] . "</li>";
        //         }
        //     }
        //     echo "</ul>";
        // } else {
        //     echo "<div class='vacia'>La lista de amigos está vacía.</div>";
        // }
        ?>

    </div>
</body>
</html>
