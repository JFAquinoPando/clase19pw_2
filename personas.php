<?php
    header("Content-Type: application/json");

    include("conexion.php");

    $sql = "SELECT 
                nombre, apellido, domicilio, telefono 
            FROM agenda 
            GROUP BY nombre, apellido, domicilio, telefono
            ";

    $resultado = $mysqli->query($sql);

    $json = [];

    while ($fila =$resultado->fetch_assoc()) {

        $json[] = $fila;

        /* echo  $fila["nombre"]. " | ";
        echo  $fila["apellido"]. " | ";
        echo  $fila["domicilio"]. " | ";
        echo  $fila["telefono"]. " | ";
        echo "<br>"; */
    }
    //print_r($json);
    echo json_encode($json);
    //var_dump($resultado);
