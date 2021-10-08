<?php

    require('Coche.php');
    require('coches.php');

    $array = array();

    foreach ($arrayCoches as $coche)
    {
        array_push($array, array('matricula'=>$coche->getMatricula(),
                                 'marca'=>$coche->getMarca(),
                                 'modelo'=>$coche->getModelo(),
                                 'km'=>$coche->getKm()));
    }

    echo json_encode($array);