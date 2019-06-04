<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>


<?php
    $nombre=$_POST['nombre'];
    echo $nombre;
    $con=$_POST['contrasena'];
    echo $con;
    $sql="SELECT * FROM USUARIO WHERE nombre='".$nombre."' AND contrasena='".$con."'";
    $q=mysqli_query($conexion,$sql);
    $result=mysqli_fetch_array($q);
    echo "nombre: ".$result['nombre'];
    echo "contra: ".$result['contrasena'];
    if (mysqli_num_rows($q)==0) {
        echo "no existe el usuario";
    } else {
        echo "usuario existe";
    }
?>




<?php include('../Templantes/footer.php')?>
