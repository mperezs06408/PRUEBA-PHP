<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>
<h1>hola</h1>
 <?php
        $sql= "INSERT INTO USUARIO (nombre,apellido,email,contrasena) VALUES (";
        $sql=$sql."'"$_POST['nombre']."',";
        $sql=$sql."'"$_POST['apellido']."',";
        $sql=$sql."'"$_POST['email']."',";
        $sql=$sql."'"$_POST['contrasena']."')";

    ?>

</div>


<?php include('../Templantes/footer.php')?>
