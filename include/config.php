
<?php

function conectar(){
    $usuario = "root";
    $contrasena = "";  
    $servidor = "localhost";
    $basededatos = "store";

    $conn = new mysqli($servidor, $usuario, $contrasena, $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}


