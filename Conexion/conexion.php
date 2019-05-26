<?php

$host='localhost';
$user='santiago';
$password='santiago';
$db='PRUEBA';

$conexion= new msqli($host,$user,$password,$db);

if($conexion -> connect_errno){
    echo '<h1>no hay conexion</h1>';
} else {
    echo '<h1>conectado</h1>';
}

?>
