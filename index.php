<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agenda App</title>
    <link href="estilos.css" rel="stylesheet">
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
    </div>
</body>
</html>
