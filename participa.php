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
    <title>Violines Por la  Paz | Participa </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://use.typekit.net">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">

    <link rel="preload" href="styles/generalStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/navBarStyles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="styles/participa.css" as="style" onload="this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="styles/generalStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/navBarStyles.css"></noscript>
    <noscript><link rel="stylesheet" href="styles/participa.css"></noscript>

    <script>
        window.sessionStorage.setItem("select", "contact-link");
    </script>
    <script src="scripts/navBar.js" async></script>
    <script src="scripts/lazyLoading.js" async></script>
</head>
<body>
    <script>
        function loadContact(){
            let insta = document.getElementById("insta-link");
            let fb = document.getElementById("facebook-link");
            insta.onclick = () => window.open("https://www.instagram.com/vfpmexico/");
            fb.onclick = () => window.open("https://www.facebook.com/vfpmexico");
        }
        window.addEventListener("load", loadContact);
    </script>
    <div class="content">
        <section>
            <div class="comp-header-container" id="contacto-header">
                <h2 class="comp-header-1"> Nuestro &nbsp;</h2>
                <h2 class="comp-header-2"> contacto</h2>
            </div>
            <div id="contacto-container">
                <img src="images/contactoImage.jpg" id="contacto-image" alt="Comunidad Violines">
                <div id="contacto-row">
                    <div id="social-net" class="contact-region">
                        <div>
                            <img src="images/instagram.png" id="insta-link" alt="Instagram">
                            <img src = "images/facebook.png" id="facebook-link" alt="Facebook">
                        </div>
                        <span>@vfpmexico</span>
                    </div>
                    <div id="mail" class="contact-region">
                        <img src="images/email.png" alt="Mail">
                        <span>vfpmexico@gmail.com</span>
                    </div>
                    <div id="phone" class="contact-region">
                        <img src="images/telefono.png" alt="Teléfono">
                        <span>5555555555</span>
                    </div>
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