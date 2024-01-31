<?php
    require 'conexion.php';
    if (!empty($_POST['nombre']) && !empty($_POST['correo'])) {
        // echo "Nombre: " . $_POST['nombre'] . "<br>";
        // echo "Correo: " . $_POST['correo'] . "<br>";

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        //Sanitizar

        // Insertar a DB
        $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('".$nombre."', '".$correo."')";
        
        // Utilizar exec() dado que no se regresan resultados
        $conn->exec($sql);

        header('Location: index.php');
    }
?>