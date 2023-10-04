<?php
session_start();
include('Amigo.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreABorrar = $_POST["nombre"];

    // Supongamos que $_SESSION["listaNombre"] es un array de objetos Amigo
    if (isset($_SESSION["listaNombre"]) && !empty($_SESSION["listaNombre"])) {
        borrarAmigo($_SESSION["listaNombre"], $nombreABorrar);
    }

    // Redirigir de nuevo a mostrar.php o a donde desees
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
        <hr>
        <div id="añadirHeader"><h2>Borrar Amigo</h2></div>
        <div id="add-friend-form">
        <h2>Nombre del amigo a <strong class="borrar">BORRAR</strong></h2>
            <form action="mostrar.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            <input type="submit" value="BORRAR">
        </form>
        </div>
        <?php 
        if (isset($_SESSION["listaNombre"]) && !empty($_SESSION["listaNombre"])) {
            echo "<ul>";
            foreach ($_SESSION["listaNombre"] as $amigo) {
                if (isset($amigo["nombre"]) && isset($amigo["numero"])) {
                    echo "<li>Nombre: " . $amigo["nombre"] . ", Teléfono: " . $amigo["numero"] . "</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "La lista de amigos está vacía.";
        }
        var_dump($_SESSION['listaNombre']);
        ?>
        
    </div>
</body>
</html>
