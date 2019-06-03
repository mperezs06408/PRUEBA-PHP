<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>
<h1>hola</h1>
 <?php
    $nombre=$_POST['nombre'];
    $contra=$_POST['contrasena'];

    $sql="SELECT * FROM USUARIO WHERE nombre='".$nombre."' AND contrasena='".$contra."'";
    echo $sql;
    $q= mysql_query($sql,$conexion);
    if (!$q) {
        echo "usuario no existe";
    } else {
        echo"bienvenido";
    }
    ?>

</div>


<?php include('../Templantes/footer.php')?>
