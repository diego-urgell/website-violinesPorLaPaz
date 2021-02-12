<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En Violines por La Paz A.C buscamos que todos los niños de México tengan una eduación
                                        integral y balanceada. Ofrecemos talleres de arte, deportes, idiomas y valores.
                                        Únete a la causa, juntos podemos mejorar el futuro de nuestro país.">
    <meta name="keywords" content="Violines Por La Paz, México, niños, educación, arte, cultura, vfpmexico, deportes, valores">
    <meta name="author" content="vfpmexico">
    <title>Violines Por la  Paz | Comunidad </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://use.typekit.net">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">

    <link rel="preload" href="styles/generalStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/navBarStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/comunidad.css" as="style" onload="this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="styles/generalStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/navBarStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/comunidad.css"></noscript>

    <script>
        window.sessionStorage.setItem("select", "community-link");
    </script>
    <script src="scripts/navBar.js" async></script>
    <script src="scripts/lazyLoading.js" async></script>
</head>
<body>

    <div class="content">
        <section>
            <!-- Sección de Comunidad -->
            <div id="community">
                <span>
                    <h2 class="titulo gris">Comunidad</h2>
                </span>
                <p class="p-centro gris" id="apoyos-desc">
                    La labor de Violines Por La Paz es solo posible gracias al apoyo de instituciones y voluntarios, que colaboran con nosotros para llevar oportunidades de aprendizaje únicas a los niños mexicanos.
                </p>
            </div>

            <!-- Sección de tipos de apoyo -->
            <div id="apoyos" class="fondo">
                <span>
                    <h3 class="subtitulo blanco pad-top">¿Deseas ayudar?</h3>
                    <h3 class="subtitulo blanco marg-btm">¡Aquí te decimos <sup>cómo formar parte</sup>!</h3>
                </span>
                <span id="tipos-apoyo" class="cel-flex">
                    <div class="columna-de3">
                        <img class="im" src="images/corazon.png" alt="Corazón sobre mano">
                        <h4 class="corto blanco bordes">Voluntariado</h4>
                    </div>
                    <div class="columna-de3">
                        <img class="im" src="images/empresa.png" alt="Edificio de empresa">
                        <h4 class="corto blanco marg-btm2 bordes">Empresa</h4>
                    </div>
                    <div class="columna-de3">
                        <img class="im" src="images/colegio.png" alt="Edificio de escuela">
                        <h4 class="corto blanco bordes">Escuela</h4>
                    </div>
                </span>
            </div>

            <!-- Sección de explicación de apoyo -->
            <div id="apoyos-exp">
                <p class="gris borde-izq-p">
                        Como voluntario puedes desempeñarte a manera de docente en alguno de nuestros talleres, ayudarnos a expandir el proyecto o incluso tener un rol administrativo!
                </p>
                <p class="gris borde-izq-p">
                        Si representas a una escuela primaria puede contactarnos para expandir el alcance de nuestros talleres con sus alumnos; o si es una Universidad, ser nuestro nexo para que sus alumnos realicen servicio social!
                </p>
            </div>
        </section>

        <!-- Sección de Alianzas -->
        <section>
            <span>
                <h2 class="titulo gris">Nuestras alianzas</h2>
            </span>
            <span id="alianzas-row" class="cel-flex marg-top marg-btm">
                <div class="columna-de3">
                    <img id="logo_tec" class="im2 lazy" data-src="images/logo_tec.png"  alt="Logo del Tec de Monterrey">
                </div>
                <div class="columna-de3">
                    <img class="im2 lazy" data-src="images/UP_Logo.png" alt="Logo de la Uni Panamericana">
                </div>
                <div class="columna-de3">
                    <img class="im2 lazy" data-src="images/ebc_logo.png" alt="Logo de la Esc Bancaria y Comercial">
                </div>
            </span>


        <!-- Sección de Alianzas 2: Escuelas y emprendedores -->

            <div id="alianzasOrg-row">
                <div id="primarias">
                    <h3 id="primarias-title" class=" subtitulo blanco">Instituciones Primarias</h3>
                    <div id="primariasLista">
                        <ul class="p-centro blanco">
                            <li>Escuela Matin Torres Padilla</li>
                            <li>Henry Ford Tampico</li>
                        </ul>
                    </div>
                    <div id="primariasImg">
                        <img class="im lazy" id="im-der" data-src="images/mochilaComunidad.png" alt="Mochila y útiles escolares">
                    </div>
                </div>
                <div id="emprendedores">
                    <h3 class=" subtitulo blanco">Emprendedores</h3>
                    <ul class="p-centro blanco">
                        <li>Tórrela</li>
                        <li>Obleas amarea</li>
                        <li>Mat pincel green</li>
                        <li>The succulentt house</li>
                        <li>Viennetam</li>
                        <li>The Stickylab Tampico</li>
                        <li>Salsa Romacil</li>
                        <li>Torinos boneless</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sección de imágenes sobrepuestas -->
        <section id="collage">
            <div id="vol-image">
                <img data-src="images/voluntarios.png" class="lazy" alt="Fotografía de miembros del Tec de Monterrey">
            </div>
            <div id="class-image">
                <img data-src="images/clases.png" class="lazy" alt="Fotografía de niños en clase">
            </div>
        </section>

        <!-- Sección de Testimonios -->
        <section>
            <h2 class="titulo gris">Testimonios</h2>
            <div id="test1" class="test">
                <div class="test-text">
                    "Yo tomo el taller de inglés para poder
                    llegar a la NASA y convertirme en astronauta."
                    <br><br>
                    - Rommel
                </div>
                <div class="test-img">
                    <img data-src="images/rommel.png" class="lazy" alt="Testimonio alumno">
                </div>
            </div>
            <div id="test2" class="test">
                <div class="test-img">
                    <img data-src="images/zoom.png" class="lazy" alt="Testimonio padre">
                </div>
                <div class="test-text">
                    "He visto un cambio muy bueno en mi hijo,
                     ahora se concentra mucho más y ha
                    Encontrado una actividad para hacer
                    después de clase que en verdad le gusta."
                    <br><br>
                    - Mamá de Víctor
                </div>
            </div>

        </section>
    </div>

    <div class="curtain"></div>
    <div id="navBar">
        <?php require $_SERVER['DOCUMENT_ROOT']."/navBar.php";?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php";?>

</body>
</html>