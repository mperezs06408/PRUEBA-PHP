<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>


 <?php
    $nombre=$_POST['nombre'];
    $contra=$_POST['contrasena'];

    $sql="SELECT * FROM USUARIO WHERE nombre='".$nombre."' AND contrasena='".$contra."'";
    echo $sql;
    $q= $conexion->query($sql);
    echo mysql_result($q,0);
    ?>




<?php include('../Templantes/footer.php')?>
