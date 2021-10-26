<?php $message = $_GET['message'] ?? ''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link rel="shortcun icon" href="../img/inicio-de-sesion.png">

  <!-- LINKS CSS -->
  <link rel="stylesheet" href="../css/login.css">

</head>
<body>
  <main>
    <form class="form-login" method="post" action="validar_login.php">
      <img class="logo" src="../img/usuario.png" alt="Icono Check In">
      <h1>Iniciar sesion</h1>
      <?php echo $message ?>
      <!-- Email -->
      <div class="form-floating">
        <label for="floatingEmail">Correo:</label>
        <input type="email" id="imputEmail" name="email" class="form-control txtEmail" placeholder="nombre@ejemplo.com" autofocus>
      </div>
      <!-- password -->
      <div class="form-floating">
        <label class="cate" for="floatingPassword">Contraseña:</label>
        <input type="password" id="imputPassword" name="password" class="form-control txtPass" placeholder="Contraseña">
      </div>
      <!-- Botones de acciones -->
      <input class="btnInicio" type="button" onclick="location.href='../index.php';" value="Inicio">
      <button class="btnIngre" name="submit" type="submit">Ingresar</button>
      <p class="copy">&copy; 2021–2021</p>
    </form>
  </main>
</body>
</html>