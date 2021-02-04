<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campañas | Fundación Violines Por la  Paz</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">
    <link rel = "stylesheet" href = "styles/generalStyles.css">
    <link rel = "stylesheet" href = "styles/navBarStyles.css">
    <link rel = "stylesheet" href = "styles/campaigns.css">
    <script>
        window.sessionStorage.setItem("select", "campaigns-link");
    </script>
    <script src="scripts/navBar.js"></script>
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