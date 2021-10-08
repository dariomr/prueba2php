<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <header>
        <h1>Concesionario pirámide</h1>
        <nav><a href="/">Coches</a> <a href="nuevo.php">Nuevo</a></nav>
    </header>
    <form action="index.php" method="GET">
        <input type="text" name="matricula">
        <input type="submit" value="Buscar">
    </form>

    <form action="index.php" method="POST">
        Matrícula: <input type="text" name="matricula"><br>
        Marca: <input type="text" name="marca"><br>
        Modelo: <input type="text" name="modelo"><br>
        Km: <input type="text" name="km"><br>
        <input type="submit" value="Añadir">
    </form>

    <?php
        include ('Coche.php');
        include ('coches.php');

    ?>
</body>
</html>