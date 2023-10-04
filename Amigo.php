<?php
class Amigo {
    private $nombre;
    private $numero;

    function __construct($nombre, $numero) {
        $this->nombre = $nombre;
        $this->numero = $numero;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getNumero() {
        return $this->numero;
    }
}

// Método para agregar amigos a la lista y guardarla en la sesión
function agregarAmigo($nombre, $numero) {
    if (!isset($_SESSION["listaNombre"])) {
        $_SESSION["listaNombre"] = [];
    }
    $_SESSION["listaNombre"][] = ["nombre" => $nombre, "numero" => $numero];
}

    // Método para borrar un amigo por su nombre
    function borrarAmigo(&$listaAmigos, $nombre) {
        foreach ($listaAmigos as $indice => $amigo) {
            if ($amigo["nombre"]== $nombre) {
                unset($listaAmigos[$indice]); // Elimina el amigo de la lista
            }
        }
    }


?>