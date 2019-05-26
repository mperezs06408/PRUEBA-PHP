<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>

    <?php
        if (isset($_POST['nombre'] && isset($_POST['apellido'] && isset($_POST['email'] && isset($_POST['contraseña'])){
            $sql= "INSERT INTO USUARIO (nombre,apellido,email,contrasena) VALUES (";
            $sql=$sql."'"$_POST['nombre']."',";
            $sql=$sql."'"$_POST['apellido']."',";
            $sql=$sql."'"$_POST['email']."',";
            $sql=$sql."'"$_POST['contrasena']."')";

            if ($conexion ->query($sql) == TRUE) {
                echo 'Usuario creado';
            } else {
                echo 'error';
            }

        }
    ?>

</div>


<?php include('../Templantes/footer.php')?>
