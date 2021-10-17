<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>

    <!-- LINKS CSS -->
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
  
<?php require 'navbar.php' ?>

<?php require 'savbar.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Empresas registradas</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
      </div>
    </div>
  </div>
</main>

  <!-- Tabla de publicaicones con php y mysql -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
