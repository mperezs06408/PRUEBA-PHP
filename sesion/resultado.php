<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>
<h1>hola</h1>
 <?php

    if (isset($_POST['nombre'] && isset($_POST['apellido'] && isset($_POST['email'] && isset($_POST['contrasena'])) {
        $sql= "INSERT INTO USUARIO (nombre,apellido,email,contrasena) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['email']."','".$_POST['contrasena']."')";
        echo $sql;
        if ($conexion -> query($sql) == TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error";
        }

        $conexion ->close();
    }
    ?>

</div>


<?php include('../Templantes/footer.php')?>
