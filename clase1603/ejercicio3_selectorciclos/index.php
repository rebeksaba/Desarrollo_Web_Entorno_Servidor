<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <h2>Selecciona ciclos</h2>
    <form action="ciclos.php" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre">

        <label>Edad</label>
        <input type="number" name="edad">

        <label>Email</label>
        <input type="email" name="email">

        <select name="ciclo" >
            <option value="DAW">DAW</option>
            <option value="DAM">DAM</option>
            <option value="ASIR">ASIR</option>
            <option value="SMR">SMR</option>
        </select>
        
        <br><br>

        <input type="submit" value="Enviar">
    </form>   
        
</body>
</html>