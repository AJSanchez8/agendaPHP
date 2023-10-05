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
     $amigoAñadir = new Amigo($nombre, $numero); //Aqui metemos amigo dentro del array
    // array_push($_SESSION["listaNombre"],$amigoAñadir); // Otro metodo con pushpara meter en el array
    $_SESSION["listaNombre"][] =$amigoAñadir;
}



    // // Método para borrar un amigo por su nombre
    // function borrarAmigo(&$listaAmigos, $nombre) {
    //     foreach ($listaAmigos as $indice => $amigo) {
    //         if ($amigo["nombre"]== $nombre) {
    //             unset($listaAmigos[$indice]); // Elimina el amigo de la lista SPOILER: NO ELIMINA A NADIE DE NINGUN SITIO.
    //         }
    //     }
    // }

    function eliminarAmigo(&$lista, $nombre) {
        foreach ($lista as $indice => $amigo) { // Se agrega la flecha => para obtener el índice y el objeto
            if ($amigo->getNombre() == $nombre) {
                unset($lista[$indice]); // Se utiliza $indice para eliminar el elemento correcto
            }
        }
    }

    

?>