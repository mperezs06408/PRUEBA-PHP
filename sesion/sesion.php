<?php include('../Templantes/header.php'); ?>
<div class="margen">
 <form action="resultado.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input  class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input  class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" placeholder="Apellido">
  </div><div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include('../Templantes/footer.php'); ?>
