<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/icono-empresa.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- LINKS CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body> 

    <?php 
        require ('header.php');
    ?>

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
    <section class="social">
        <h2>Follow Pages</h2>
        <div class="link">
            <a href="https://www.facebook.com/SomosKudasai" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
            </a>
            <a href="https://www.youtube.com/c/Kudasai/featured" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="3" y="5" width="18" height="14" rx="4" />
                <path d="M10 9l5 3l-5 3z" />
            </svg>
            </a>
            <a href="https://www.instagram.com/somoskudasai/?fbclid=IwAR15-uYntmnjaokx0qpTTEY6WbMJjdf_2RtQuXOv6sK53z8wwLVSw0H5Av0" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <rect x="4" y="4" width="16" height="16" rx="4" />
                <circle cx="12" cy="12" r="3" />
                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg>
            </a>
            <a href="https://open.spotify.com/playlist/1QcsybeUidDJIrPQTHS6dD?si=N1e7Gk-5Qf6KCWmr4MkcBg&nd=1" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-spotify" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M8 11.973c2.5 -1.473 5.5 -.973 7.5 .527" />
                <path d="M9 15c1.5 -1 4 -1 5 .5" />
                <path d="M7 9c2 -1 6 -2 10 .5" />
            </svg>
            </a>
            <a href="https://twitter.com/somoskudasai?fbclid=IwAR068svo2J6VkqtcJBmYOLTVglCwmMJMkCDz7CPxW6J6aPlZd_vXAS40uYU" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00bfd8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg>
            </a>
        </div>
    </section>
</div>

    <?php require('footer.php') ?>

    <!-- SCRIPS JS -->
    <script src="js/index.js"></script>
</body>
</html>