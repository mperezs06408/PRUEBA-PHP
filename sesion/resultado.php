<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>
<h1>hola</h1>
 <?php

    if (isset($_POST['name'])){
        $sql= "INSERT INTO USUARIO (nombre,apellido,email,contrasena) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."','".$_POST['contrasena']."')";
        echo $sql;
        $conexion -> query($sql);


        $conexion ->close();
    } else {
        echo "no hay datos";
    }


    ?>

</div>


<?php include('../Templantes/footer.php')?>
