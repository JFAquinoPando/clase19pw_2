<?php
    include("conexion.php");

    //var_dump($mysqli);

    $sql = "INSERT INTO agenda (nombre, apellido, domicilio, telefono) 
        values ";
    $sql_i = "";
    for ($i=0; $i < 1000; $i++) { 
        $sql_i .= "('A{$i}', 'B{$i}', 'C{$i}', 'D{$i}'), ";

    }
    echo strlen($sql_i);
    //$sql_i[strlen($sql_i)-2];
    $sql_i = substr($sql_i,0,-2);
    $mysqli->query($sql."".$sql_i);
    echo "Todos los textos insertados";