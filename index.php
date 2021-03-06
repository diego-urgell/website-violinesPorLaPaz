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
    <title> Violines Por La Paz </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://use.typekit.net">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">

    <link rel="preload" href="styles/generalStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/navBarStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/indexStyles.css" as="style" onload="this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="styles/generalStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/navBarStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/indexStyles.css"></noscript>
    <script>
        window.sessionStorage.setItem("select", "home-link");
        function loadBtn(){
            document.getElementById("labor-button").onclick = () => window.location.pathname = "modeloDeAprendizaje.php";
            document.getElementById("historia-button").onclick = () => window.location.pathname = "comunidad.php";
        }
        window.addEventListener("load", loadBtn);
    </script>
    <script src="scripts/navBar.js" async></script>
    <script src="scripts/lazyLoading.js" async></script>
</head>
<body>

    <div class="content">
        <section id="main-name">
            <div>
                <img class="image" src="images/violinesPorLaPaz.png" alt="Comunidad de Violines">
            </div>
            <p id="slogan"> ¡Todos tenemos talento, solo falta encontrarlo! </p>
        </section>

        <section id="labor">
            <div id="labor-text">
                <h2 id="labor-header"> Nuestra labor </h2>
                <p>
                    Violines Por La Paz A.C es una escuela del talento, donde ayudamos a nuestros alumnos a desarrollar sus
                    propias herramientas para salir adelante en el futuro. Proporcionamos una formación basada en los valores,
                    el arte y la comunicación, por medio de talleres poco comunes en las escuelas.
                </p>
                <span class="btn" id="labor-button">
                    Conoce el modelo
                </span>
            </div>
            <div id="labor-image-container">
                <img data-src="images/labor.jpg" id="labor-image" class="image lazy" alt="Niños pintando">
            </div>
        </section>

        <section id="historia">
            <div class="comp-header-container">
                <h2 class="comp-header-1"> Nuestra &nbsp;</h2>
                <h2 class="comp-header-2"> historia </h2>
            </div>
            <br>
            <div id="historia-container">
                <div id="historia-image-container">
                    <img data-src="images/historia.jpg" class="image lazy" id="historia-image" alt="Niños jugando">
                </div>
                <div id="historia-text">
                    <p>
                        Violines Por la Paz A.C. es una asociación civil sin fines de lucro que inició labores en el 2015 como
                        grupo estudiantil del Tecnológico de Monterrey Campus Tampico.
                    </p>
                    <p>
                        Desde entonces, nuestro objetivo es brindar herramientas de aprendizaje a niños de escasos recursos de
                        entre seis y trece años a fin de que encuentren su pasión y su talento y lo desarrollen.
                    </p>
                    <p>
                        Fue hasta el año 2018 que fue constituida como asociación civil contando actualmente con presencia en
                        Tampico, Madero, Altamira y Ciudad de México.
                    </p>
                    <span id="historia-button" class="btn"> Conoce la comunidad </span>
                </div>
            </div>
        </section>

        <section id="mision">
            <div id="mision-text">
                <div id="mision-text-inner-wrapper">
                    <h2> Misión </h2>
                    <p>
                        Formar y guiar a nuestros niños, niñas y adolescentes del país a encontrar su pasión y su talento a través
                        del arte, la cultura, los deportes y el desarrollo de habilidades desconocidas para ellos, mismas que les
                        permitan sobresalir en los ámbitos estudiantil, académico, laboral y sobre todo como seres humanos de
                        excelencia.
                    </p>
                </div>
            </div>
            <div id="mision-image-container">
                <img id="mision-image" data-src="images/ninos-salon.png" class="lazy" alt="Niños en clase">
            </div>
        </section>

        <section id="vision">
            <div id="vision-text">
                <h2> Visión </h2>
                <p>
                    Ser una institución formadora líder de jóvenes, niñas y niños con talento, pasión y humanidad.
                </p>
            </div>
            <div id="vision-image">
                <img data-src="images/visionImage.png" class = "lazy" alt="Disciplinas variadas">
            </div>
        </section>
    </div>
    <div class="curtain"></div>
    <div id="navBar">
        <?php require $_SERVER['DOCUMENT_ROOT']."/navBar.php";?>
    </div>
    <?php require $_SERVER['DOCUMENT_ROOT']."/footer.php";?>

</body>
</html>