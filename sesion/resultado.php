<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>
<h1>hola</h1>
 <?php


        $sql= "INSERT INTO USUARIO (nombre,apellido,email,contrasena) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."','".$_POST['contrasena']."')";
        echo $sql;
        $conexion -> query($sql);


        $conexion ->close();

    ?>

</div>


<?php include('../Templantes/footer.php')?>
