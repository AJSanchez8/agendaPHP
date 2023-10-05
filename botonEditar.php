<?php
include('Amigo.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos si se ha enviado una solicitud POST

    // Guardamos nombre de usuario en la variable
    $nombreAEliminar = $_POST['nombre'];

    // Existe la sesion con lista de amigos guardada
    if (isset($_SESSION['listaNombre'])) {
        // Recorremos la lista de amigos y eliminamos el amigo con el nombre correspondiente
        foreach ($_SESSION['listaNombre'] as $indice => $amigo) {
            if ($amigo->getNombre() === $nombreAEliminar) {
                unset($_SESSION['listaNombre'][$indice]);
                break; // Salimos del bucle una vez que encontramos y eliminamos al amigo
            }
        }
    }
}

// Redirigimos
header('Location: editar.php'); 
?>
