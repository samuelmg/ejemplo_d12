<!DOCTYPE html>
<?php require 'conexion.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INDEX</h1>
    <a href="formulario.php">Formulario</a>

    <ul>
        <?php
            $sql = "SELECT * FROM usuarios";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // Configura los resultados como un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>" . $row['nombre'] . " - " . $row['correo'] . "</li>";
            }
        ?>
    </ul>

</body>
</html>