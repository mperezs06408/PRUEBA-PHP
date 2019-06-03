<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>


<?php
    $nombre=$_POST['nombre'];
    echo $nombre;
    $con=$_POST['contrasena'];
    echo $con;

    $q=mysqli_query($conexion,$q);
    $result=mysql_result($q,0);
    echo $result;
?>




<?php include('../Templantes/footer.php')?>
