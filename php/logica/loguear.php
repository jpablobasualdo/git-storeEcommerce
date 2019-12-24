<?php
include "../../include/config.php";
session_start();

$email = $_POST['email'];
$password = $_POST['clave'];

$con = conectar();
$sel = "select * from usuarios where email= '".$email."' and clave= '".$password."'";
$datos = $con->query($sel);
var_dump($sel);

if (!$datos->num_rows){

    echo "Datos incorrectos";
    header("location: ../index.php");

} else {

    $row = $datos->fetch_assoc();
    $_SESSION['usuario'] = $row['nombre'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['tipo'] = $row['tipo'];
    $_SESSION['id'] = $row['id'];
    
    
    if ($row['tipo'] == 'admin' ){

        header("location: administrar.php");

    } else {

        header("location: ../index.php");
    }
    
}