<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>


<?php
    $nombre=$_POST['nombre'];
    echo $nombre;
    $con=$_POST['contrasena'];
    echo $con;

    $q=mysqli_query($conexion,$q);
    $result=mysqli_fetch_array($q);
    echo "nombre: ".$result['nombre'];
    echo "contra: ".$result['contrasena'];
?>




<?php include('../Templantes/footer.php')?>
