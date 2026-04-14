<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioSaludo</title>
</head>
<body>

    Introduce tu nombre:

    <form action= "saludo.php" method= "get">
        Nombre:<input type="text" name="nombre"><br>
        Contraseña:<input type="password" name="pass"><br>
        <input type="hidden" name="oculto" value="12345">

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>             
</body>
</html>