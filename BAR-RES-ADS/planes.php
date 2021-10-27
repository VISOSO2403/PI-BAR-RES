<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Planes</title>
    <link rel="shortcut icon" href="img/list.png">

    <!-- LINKS CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

  <?php 
    require ("header.php")
  ?>

<div class="container py-3">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Planes</h1>
      <h2 class="fs-5 text-muted">Estos son unos de los paquetes que te ofrecemos para publicar tus anuncios y ofertas con nosotros</h2>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Gratuito</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>-Duración por anuncio max. 24hrs.</li>
              <li>-Subir max. 3 anuncios a la semana.</li>
              <br>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                Registrate gratis</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Clásico</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$25<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>-Duración por anuncio max. 3 días.</li>
              <li>-Subir max. 5 anuncios a la semana.</li>
              <li>-Atencion a clientes</li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Adquirir plan</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$35<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>-Duración por anuncio max. 7 días.</li>
              <li>-Subir max. 7 anuncios a la semana.</li>
              <li>-Atencion a clientes</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Adquirir plan</button>
          </div>
        </div>
      </div>
    </div>
</div>

<h1 class="display-5 text-center mb-4 fw-normal">Comparacion de planes</h1>
  <div class="container">
    <div class="table-responsive">
      <table class="table text-center bg-dark text-white">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Gratuito</th>
            <th style="width: 22%;">Clasico</th>
            <th style="width: 22%;">Pro</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Duracion</th>
            <td><p>24 Horas</p></td>
            <td><p>3 Dias</p></td>
            <td><p>5 Dias</p></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Anuncio c/semana</th>
            <td><p> 3 </p></td>
            <td><p> 5 </p></td>
            <td><p> 7 </p></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Atencion al cliente</th>
            <td></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br><br>
    <?php 
      require ('footer.php')
    ?>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
