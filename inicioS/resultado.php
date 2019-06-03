<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>


 <?php
    $nombre=$_POST['nombre'];
    $contra=$_POST['contrasena'];

    $sql="SELECT * FROM USUARIO WHERE nombre='".$nombre."' AND contrasena='".$contra."'";
    echo $sql;
    if ($conexion->query($sql) === TRUE) {
        echo "alguna mk";
    } else {
        echo "joder";
    }
    ?>




<?php include('../Templantes/footer.php')?>
