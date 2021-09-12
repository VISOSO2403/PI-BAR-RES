<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>

  <!-- LINKS CSS -->
  <link rel="stylesheet" href="../css/checkin.css">

</head>
<body>
<main class="form-checkin">
  <form>
    <img class="logo" src="..//img/iconoCheckIn2.png" alt="Icono Check In">
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
        <input type="checkbox" class="check"> Acepto terminos <br> y condiciones
      </label>
    </div>
    <button class="btnRegis" type="submit">Registrar</button>
    <button class="btnInicio" type="submit">Inicio</button>
    <p class="copy">&copy; 2021–2021</p>
  </form>
</main>
</body>
</html>