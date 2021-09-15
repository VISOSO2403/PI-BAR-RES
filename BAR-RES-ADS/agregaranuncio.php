<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Anuncio</title>

  <!-- LINKS CSS -->
  <link rel="stylesheet" href="css/checkin.css">

</head>
<body>
<main class="form-checkin">
  <form>
    <img class="logo" src="img/iconoCheckIn2.png" alt="Icono Check In">
    <h1>Agregar Anuncio</h1>

    <div class="form-floating">
      <label for="floatingName">Titulo:</label>
      <input type="text" class="txtName" placeholder="Tu nombre">
    </div>
    <div class="form-floating">
      <label for="floatingEmail">Descripción:</label>
      <input type="email" class="txtEmail" placeholder="nombre@ejemplo.com">
    </div>
    <div class="form-floating">
      <label for="floatingSelect">Categoria del anuncio:</label>
      <select name="Categoria" class="slcCateg">
        <option selected>Selecciona una categoria</option>
        <option value="1">Bar</option>
        <option value="2">Restaurante</option>
        <option value="3">Restauran-Bar</option>
        <option value="4">Puesto de comida</option>
      </select>
    </div>
    <div class="form-floating">
      <label for="floatingSelect">Duración del anuncio:</label>
      <select name="Categoria" class="slcCateg">
        <option selected>Selecciona una duración</option>
        <option value="1">8hrs</option>
        <option value="2">3 dias</option>
        <option value="3">10 dias</option>
        <option value="4">28 dias</option>
      </select>
    </div>
    <!-- subir archivo agregar Imagen -->
    <div class="form-group">
        <label for="exampleInputFile"><b>Imagen</b></label>
        <input name="user-file" type="file" id="exampleInputFile">
    </div><br>

    <button class="btnRegis" type="submit">Publicar anuncio</button>

    <p class="copy">&copy; 2021–2021</p>
  </form>
</main>
</body>
</html>