<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/icono-empresa.png">

    <!-- LINKS CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body> 
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <!-- Espacio para ingresar categorias de forma desplegable -->
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Inicio</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Restaurantes</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Bar</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Puestos de comida</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Restaurant-bar</a></li>
                    <li><a href="/planes.htm" class="nav-link px-2 text-white">Planes</a></li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end">
                    <button onclick="location.href='checkin.php'" type="button" class="btn btn-outline-light me-2">Registrase</button>
                    <button onclick="location.href='login.php'" type="button"  class="btn btn-warning">Ingresar</button>
                </div>
            </div>
        </div>
    </header>
    <br>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Publicate con nosotros</h1>
                <p class="lead my-3">Solo aqui podras dar a conocer tus anuncios sin costo adicional, por un periodo de tiempo nosotros daremos a conocer tus promociones, ofertas o nuevas creaciones.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>
        
        <div class="row g-6">
        <div class="col-md-6">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">BAR-RES-ADS</h5>
                    <p class="card-text">Somos una empresa dedicada a la publicacion de anuncios, con la finalidad de dar a conocer
                        a las pequeñas empresas que van iniciando en el mundo de los restaurantes/bares.</p>
                    <p class="card-text"><small class="text-muted">Last updated just now</small></p>
                </div>
                <img src="img/anuncio-resbar-1.png" class="card-img-bottom" alt="BAR-RES-ADS">
                <!-- Inicio codigo de comentarios -->
                <div id="disqus_thread"></div>
                <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://bar-res-ads.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <!-- Termina codigo de comentarios -->
            </div><br>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tacos Tere</h5>
                    <p class="card-text">Nueva promocion en tacos, compra 5 tacos y llevate una coca gratis(600 ml)</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <img src="img/cafe.jpg" class="card-img-bottom" alt="Ejemplo anuncio cafe">
            </div><br>
        </div>

        
    </main>

    <div class="container">
    <footer class="p-3 bg-dark text-white">
        <div class="row">
        <div class="col-2">
            <h5>Creadores</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col-2">
            <h5>Roles</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col-2">
            <h5>Institucion</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>
    </footer>
    </div>
</body>
</html>