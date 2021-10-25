<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link rel="shortcun icon" href="img/inicio-de-sesion.png">

  <!-- LINKS CSS -->
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
<main class="form-login">
  <form>
    <img class="logo" src="img/usuario.png" alt="Icono Check In">
    <h1>Iniciar sesion</h1>

    <div class="form-floating">
      <label for="floatingEmail">Correo:</label>
      <input type="email" id="imputEmail" class="form-control" placeholder="nombre@ejemplo.com" required autofocus>
    </div>
    <div class="form-floating">
      <label class="cate" for="floatingPassword">Contraseña:</label>
      <input type="password" id="imputPassword" class="form-control" placeholder="Contraseña">
    </div>
    <button class="btnIngre" type="submit">Ingresar</button>
    <input class="btnInicio" type="button" onclick="location.href='index.php';" value="Inicio">
    <p class="copy">&copy; 2021–2021</p>
  </form>
</main>
</body>
</html>