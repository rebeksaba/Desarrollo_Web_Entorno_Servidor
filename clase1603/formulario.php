<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo "Hola ". $nombre;
    echo "<br>";
    echo "Edad ". $edad;

    if(isset($_POST["nombre"])){
        $nombre = htmlspecialchars($_POST["nombre"]);
        if($nombre == " "){
            echo "El nombre no puede estar vacío";
        } else {
            echo "Hola " . $nombre;
        }
        
    }else{
        echo "Ha habido un error";
    }

?>