<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <link rel="shortcun icon" href="../img/garrapata.png">

  <!-- LINKS CSS -->
  <link rel="stylesheet" href="../css/checkin.css">

</head>
<body>
<main class="form-checkin">
  <form>
    <img class="logo" src="../img/logo-checkin.png" alt="Icono Check In">
    <h1>Registrate</h1>

    <div class="form-floating">
      <label for="floatingName">Nombre:</label>
      <input type="text" class="txtName" placeholder="Tu nombre">
    </div>
    <div class="form-floating">
      <label for="floatingEmail">Ingresa un correo:</label>
      <input type="email" class="txtEmail" placeholder="nombre@ejemplo.com">
    </div>
    <div class="form-floating">
      <label for="floatingSelect">Categoria del negocio:</label>
      <select name="Categoria" class="slcCateg">
        <option selected>Selecciona una categoria</option>
        <option value="1">Bar</option>
        <option value="2">Restaurante</option>
        <option value="3">Restauran-Bar</option>
        <option value="4">Puesto de comida</option>
      </select>
    </div>
    <div class="form-floating">
      <label class="cate" for="floatingPassword">Ingresa una contraseña:</label>
      <input type="password" class="txtPass" placeholder="Contraseña">
    </div>
    <div class="form-floating">
      <label for="floatingConfPassword">Confirmar contraseña:</label>
      <input type="password" class="txtPass" placeholder="Contraseña">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" class="check"> <a href="../terminos.html">Acepto terminos <br> y condiciones</a>
      </label>
    </div>
    <input class="btnInicio" type="button" onclick="location.href='../index.php';" value="Inicio" />
    <button class="btnRegis" type="submit">Registrar</button>
    <p class="copy">&copy; 2021</p>
  </form>
</main>
</body>
</html>