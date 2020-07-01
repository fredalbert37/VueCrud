<?php
include_once 'conexion.php';
$objeto = new conexion();
$conexion = $objeto->conectar();

//necesario para recibir parametros con axios
$_POST = json_decode(file_get_contents("php://input"), true);

//Recepcion de los datos enviados mediante POST desde main.js
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
$modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
$stock = (isset($_POST['stock'])) ?  $_POST['stock'] : '';

switch($opcion){
    case 1://alta
        $consulta = "INSERT INTO moviles (marca, modelo, stock)"
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 2://modificar
        $consulta = "UPDATE moviles SET marca='$marca', modelo='$modelo', stock='$stock' WHERE id='$id'"
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3://borrar
        $consulta = "DELETE FROM moviles WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 4://listar
        $consulta = "SELECT * FROM moviles"
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}



