<!-- LINKS CSS -->
<link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3">BAR-RES-ADS</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Cerrar Sesion</a>
            </div>
        </div>
    </header>
<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Nueva publicacion</h1>
      </div>
      <h2>New post</h2><br>
    </main>
  </div>
  <!-- Inician formularios -->
  <div class="row">
    <div class="col-md-9 ms-sm-auto col-lg-7 px-md-4">
      <form enctype="multipart/form-data" action="../functions/article/insert.php" method="POST">
        <div class="form-group">
          <label class="h5" for="title">titulo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="New title"><br>
        </div>
        <label class="h5" for="categorie">Categoria</label>
        <select name="categorie_id" class="form-control" id="categorie"></select>
        <label class="h5" for="content">Contenido</label><br>
        <textarea name="content" rows="4" cols="125" id="content"></textarea>
        <div class="form-group">
          <label for="exampleInputFile">Insertar imagen</label><br>
          <input name="user-file" type="file" id="exampleInputFile"><br><br>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
    <div class="col-md-9 col-lg-3 px-md-5">
      <form>
        <div class="form-group">
          <label class="h5" for="new_categorie">Introducir nueva categoria</label>
          <input type="text" name="new_categorie" class="form-control" id="new_categorie" placeholder="Escibe una categoria"><br>
        </div>
        <button type="submit" id="submit_categorie" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
</div>