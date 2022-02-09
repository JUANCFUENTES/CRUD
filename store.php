<?php
require ('conexion.php');

if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $apellidoP=$_POST['apellidoP'];
    $apellidoM=$_POST['apellidoM'];
    $codigo=$_POST['codigo'];
    $promedio=$_POST['promedio'];

    echo "$nombre <br>";
    echo "$codigo <br>";

    $sql = "INSERT INTO alumnos (nombre, apellidoP, apellidoM, codigo, promedio)
    VALUES ('$nombre', '$apellidoP', '$apellidoM', '$codigo', $promedio)";

    $conn->exec($sql);

    header("Location: index.php");
}

?>