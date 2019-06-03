<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<div>
<h1>hola</h1>
 <?php
    $nombre=$_POST['nombre'];
    $contra=$_POST['contrasena'];

    $sql="SELECT COUNT(*) FROM USUARIO WHERE nombre='".$nombre."' AND contrasena='".$contra."'";
    $q=mysql_query($sql,$conexion);
    $result=mysql_result($q,0,'COUNT');
    echo $result;
    ?>

</div>


<?php include('../Templantes/footer.php')?>
