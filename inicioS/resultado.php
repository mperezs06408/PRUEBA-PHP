<?php include('../Templantes/header.php')?>

<?php include('../Conexion/conexion.php')?>

<table>
    <tr>
        <td>nombre</td>
        <td>apellido</td>
        <td>email</td>
        <td>contraseña</td>
    </tr>
 <?php

    $sql="SELECT * FROM USUARIO";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['apellido'] ?></td>
        <td><?php echo $mostrar['email'] ?></td>
        <td><?php echo $mostrar['contrasena'] ?></td>
    </tr>
<?php
    }
    ?>
</table>




<?php include('../Templantes/footer.php')?>
