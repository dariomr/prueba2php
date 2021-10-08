<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Concesionario pirámide</h1>
        <nav><a href="/">Coches</a> <a href="nuevo.php">Nuevo</a></nav>
    </header>
    <form action="index.php" method="GET">
        <input type="text" name="matricula" placeholder="Introduce aquí la matrícula">
        <input type="submit" value="Buscar">
    </form>
    <?php

        include('Coche.php');
        include('coches.php');

        $matricula = $_GET['matricula'];
        
        $matricula1 = $_POST['matricula'];
        $marca1 = $_POST['marca'];
        $modelo1 = $_POST['modelo'];
        $km1 = $_POST['km'];

        if (!($matricula1 == ""))
        {
            $coche1 = new Coche($matricula1, $marca1, $modelo1, $km1);
            array_push($arrayCoches, $coche1);
        }

        echo '<ul>';

       /*  foreach($arrayCoches as $coche)
        {
            echo '<li>' . '<p>Matrícula: ' . $coche->getMatricula() . '</p>'
            . '<p>Marca: ' . $coche->getMarca() . '</p>'
            . '<p>Modelo: ' . $coche->getModelo() . '</p>'
            . '<p>Km: ' . $coche->getKm() . '</p>' . '</li>'; 
        } */

        foreach($arrayCoches as $coche)
        if ($matricula == $coche->getMatricula())
        {
           echo '<li>' . '<p>Matrícula: ' . $coche->getMatricula() . '</p>'
                       . '<p>Marca: ' . $coche->getMarca() . '</p>'
                       . '<p>Modelo: ' . $coche->getModelo() . '</p>'
                       . '<p>Km: ' . $coche->getKm() . '</p>' . '</li>'; 
        } else if ($matricula == "")
        {
            echo '<li>' . '<p>Matrícula: ' . $coche->getMatricula() . '</p>'
                       . '<p>Marca: ' . $coche->getMarca() . '</p>'
                       . '<p>Modelo: ' . $coche->getModelo() . '</p>'
                       . '<p>Km: ' . $coche->getKm() . '</p>' . '</li>';
        }

        echo '</ul>';

        
    ?>
</body>
</html>