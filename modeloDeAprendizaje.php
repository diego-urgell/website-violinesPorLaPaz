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
    <title> Violines Por la  Paz | Modelo de Aprendizaje </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://use.typekit.net">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">

    <link rel="preload" href="styles/generalStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/navBarStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/modeloDeAprendizaje.css" as="style" onload="this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="styles/generalStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/navBarStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/modeloDeAprendizaje.css"></noscript>
    <script>
        window.sessionStorage.setItem("select", "model-link");
    </script>
    <script src="scripts/navBar.js" async></script>
    <script src="scripts/lazyLoading.js" async></script>
</head>
<body>

    <div class="content">
        <!-- Sección de El Modelo -->
        <section id="modelo">
            <h1 class="titwulo gris">El Modelo</h1>
            <div class="break"></div>
            <p id="modelo-desc" class="p-centro gris">
                En Violines Por La Paz A.C. contamos con un modelo de aprendizaje único y de alto impacto, que busca desarrollar al máximo el talento del estudiante. Se divide en dos fases: exploración y desarrollo.
            </p>
            <!-- Sección de Fases de modelo -->
            <div class="cel-flex">
                <!-- Lado izquierdo, Fase 1 -->
                <div class="columna-centrada" id="modelo-seccion-izq">
                    <h2 class="subtitulo azul"> Fase 1: Exploración </h2>
                    <img class="modelo-img" src="images/exploracion.jpg" alt="Fase de exploración">
                    <p class="p-small gris">
                        Los estudiantes tienen la oportunidad de experimentar los distintos talleres que se ofrecen. Esto les permite identificar los que más les llaman la atención y así encontrar su talento.
                    </p>
                </div>
                <!-- Lado derecho, Fase 2 -->
                <div class="columna-centrada" id="modelo-seccion-der">
                    <h2 class="subtitulo azul">Fase 2: Desarrollo</h2>
                    <img class="modelo-img" src="images/desarrollo.jpg" alt="Fase de desarrollo">
                    <p class="p-small gris">
                        Nuestros alumnos entran a una fase de desarrollo. Después de haber identificado su pasión y talentos, estos son cultividos a lo largo de un programa de tres semestres de duración.
                    </p>
                </div>
            </div>
        </section>

        <!-- Sección de Los Talentos -->
        <section>
            <h1 class="titulo gris">Los Talentos</h1>

            <!-- Sección de Idiomas -->
            <section id="language" class="cel-flex pad-top">
                <!-- Lado izquierdo, imagen -->
                <div class="columna-centrada">
                    <img class="im-lado lazy" id="circ-azul" data-src="images/idiomas.jpg" alt="Idiomas">
                </div>
                <!-- Lado derecho, texto -->
                <div class="columna-izq">
                    <h2 class="azul">Idiomas</h2>
                    <p class="p-centro gris">
                        En un mundo globalizado, es indespensable conocer otros lenguajes para ser capaz de comunicarse en distintas situaciones. Nuestros alumnos pueden aprender los siguientes idiomas:
                    </p>
                    <ul class="p-centro gris">
                        <li>Inglés</li>
                        <li>Francés</li>
                        <li>Alemán</li>
                        <li>Lenguaje de señas</li>
                    </ul>
                </div>
            </section>

            <!-- Sección de Deportes -->
            <section class="fondo cel-flex marg-btm" id="deportes-section">
                <!-- Lado izquierdo, texto -->
                <div class="columna-izq" id="deportes-left">
                    <h2 class="sub-border blanco marg-btm2">Deportes</h2>
                    <p class="p-centro blanco">
                        El ejercicio y la actividad física son fundamentales para el sano desarrollo de los niños. Por este motivo, ofrecemos a nuestros alumnas y alumnos los siguientes talleres:
                    </p>
                    <ul class="p-centro blanco" id="lista-deportes">
                        <li>Fútbol</li>
                        <li>Básquetbol</li>
                        <li>Voleibol</li>
                    </ul>
                </div>
                <!-- Lado derecho, imagen -->
                <div class="columna-centrada">
                    <img class="im-cuadro lazy" data-src="images/ninasDeportes.jpg" alt="Deportes">
                </div>
            </section>

            <!-- Sección de Desarrollo personal -->
            <section class="cel-flex" id="desarrollo">
                <!-- Lado izquierdo, imagen -->
                <div class="columna-centrada">
                    <img class="im-lado lazy" data-src="images/nina-dibujo.jpg" alt="Desarrollo personal">
                </div>
                <!-- Lado derecho, texto -->
                <span class="columna-izq">
                    <h2 id="desarrollo-sub" class="gris marg-btm3">Desarrollo personal</h2>
                    <img id="lin-cua" data-src="images/barra_cuadro.png" class="lazy" alt="Barra para resaltar título">
                    <p class="p-centro gris">
                        Para que nuestros alumnos tengan una formación integral, el programa incluye talleres que los invitan a reflexionar acerca de sus derechos y responsabilidades en la sociedad. Con este objetivo se imparten las siguientes clases:
                    </p>
                    <ul class="p-centro gris">
                        <li>Protección, derechos y valores</li>
                        <li>Inteligencia emocional</li>
                        <li>Medio ambiente</li>
                    </ul>
                </span>
            </section>

            <!-- Sección de Artes -->
            <section id="artes">
                <!-- Lado derecho, imagen -->
                <div id="artes-image-container">
                    <img id="artes-image" data-src="images/dibujo.jpg" class="lazy" alt="Dibujo">
                </div>
                <!-- Lado izquierdo, texto -->
                <div id="artes-container" class="columna-izq">
                    <div id="artes-inner-container">
                        <h2 class="sub-border blanco pad-top2">Artes</h2>
                        <p class="p-centro blanco pad-der pad-der2">
                            Las artes permiten desarrollar la sensibilidad de los niños, así como su creatividad, autoconocimiento y habilidades de expresión. Los talleres que se ofrecen dentro de esta área son:
                        </p>
                        <div id="artes-lista">
                            <ul class="p-centro blanco col-elementos marg-btm">
                                <li>Violín</li>
                                <li>Piano</li>
                                <li>Canto</li>
                                <li>Guitarra</li>
                            </ul>
                            <ul class="p-centro blanco col-elementos pmarg-btm">
                                <li>Baile</li>
                                <li>Pintura</li>
                                <li>Dibujo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <div class="curtain"></div>
    <div id="navBar">
        <?php require $_SERVER['DOCUMENT_ROOT']."/navBar.php";?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php";?>

</body>
</html>