<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="calculadora.php" method="POST">
        <label>Número 1:</label>
        <input type="number" name="n1"required>

        <br><br>

        <label>Número 2:</label>
        <input type="number" name="n2"required>


        <br><br>

        <label>Operación:</label>
        
        <select name="op">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicación</option>
            <option value="/">División</option>
        </select>

        
        <br><br>

        <input type="submit" value="Calcular">

    </form>
</body>
</html>