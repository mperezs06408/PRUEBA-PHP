<?php

$host='localhost';
$user='santiago';
$password='santiago';
$db='PRUEBA';

$conexion= new msqli($host,$user,$password,$db);

if($conexion -> connect_errno){
    echo 'no hay conexion';
} else {
    echo 'conectado';
}

?>
