<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>


 <?php
    $nombre=$_POST['nombre'];
    $contra=$_POST['contrasena'];

    $sql="SELECT * FROM USUARIO WHERE nombre='".$nombre."' AND contrasena='".$contra."'";
    echo $sql;
    $q= mysql_query($sql,$conexion);
    echo $q;
    if (!$q) {
        echo "usuario no existe";
    } else {
        echo"bienvenido";
    }
    ?>




<?php include('../Templantes/footer.php')?>
