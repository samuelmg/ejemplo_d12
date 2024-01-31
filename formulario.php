<!DOCTYPE html>
<?php require 'conexion.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fromulario</h1>
    <form action="store.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" placeholder="Correo">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>