<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En Violines por La Paz A.C buscamos que todos los niños de México tengan una eduación
                                        integral y balanceada. Ofrecemos talleres de arte, deportes, idiomas y valores.
                                        Únete a la causa, juntos podemos mejorar el futuro de nuestro país.">
    <meta name="keywords" content="Violines Por La Paz, México, niños, educación, arte, cultura, vfpmexico, deportes, valores">
    <meta name="author" content="vfpmexico">
    <title> Violines Por la Paz | Campañas </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://use.typekit.net">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">

    <link rel="preload" href="styles/generalStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/navBarStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/campaigns.css" as="style" onload="this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="styles/generalStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/navBarStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/campaigns.css"></noscript>

    <script>
        window.sessionStorage.setItem("select", "campaigns-link");
    </script>
    <script src="scripts/navBar.js" async></script>
    <script src="scripts/lazyLoading.js" async></script>
</head>
<body>
    <div class="content">
        <!-- Sección de campañas actuales -->
        <section id="actual">
            <h2 class="titulo ">Campañas</h2>
            <div class="cel-flex">
                <div class="columna">
                    <img class="im" src="images/producto_donacion.png" alt="Campaña de donaciones de producto o servicio">
                    <p class="p-centro">Ayúdanos a formar parte de este gran cambio. <br> #VFP</p>
                </div>
                <div class="columna">
                    <img class="im" src="images/celular_donacion.png" alt="Campaña de donaciones de dispositivos electrónicos">
                    <p class="p-centro">¡Necesitamos tu ayuda! <br> Muchos de nuestros niños tienen dificultad para conectarse a las clases por la falta de equipo, si tienes un celular, tablet o laptop en buen estado contáctanos o ayúdanos compartiendo.</p>
                </div>
            </div>
        </section>
        <!-- Sección de campañas pasadas -->
        <section>

            <h2 class="titulo">Campañas Pasadas</h2>

            <span class="cel-flex">
                <div class="columna">
                    <img class="im" src="images/navidad_campana.png" alt="Campaña y actividad de Navidad">
                    <p class="p-centro">Gracias por estos días, nos llevamos una gran experiencia. Violines Por La Paz les desea felices fiestas. &#x1f385; &#x1f381; <br> #NavidadPorLaPaz <br> #QuedateEnCasa</p>
                </div>
            </span>
        </section>
    </div>
    <div class="curtain"></div>
    <div id="navBar">
        <?php require $_SERVER['DOCUMENT_ROOT']."/navBar.php";?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php";?>

</body>
</html>