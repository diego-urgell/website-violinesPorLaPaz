<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participa | Fundación Violines por la Paz</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/iwj8rkr.css">
    <link rel = "stylesheet" href = "styles/generalStyles.css">
    <link rel = "stylesheet" href = "styles/navBarStyles.css">
    <link rel = "stylesheet" href = "styles/participa.css">
    <script>
        window.sessionStorage.setItem("select", "contact-link");
    </script>
    <script src="scripts/navBar.js"></script>
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
                <img src="images/contactoImage.jpg" id="contacto-image" >
                <div id="contacto-row">
                    <div id="social-net" class="contact-region">
                        <div>
                            <img src="images/instagram.png" id="insta-link" >
                            <img src = "images/facebook.png" id="facebook-link" >
                        </div>
                        <span>@vfpmexico</span>
                    </div>
                    <div id="mail" class="contact-region">
                        <img src="images/email.png">
                        <span>vfpmexico@gmail.com</span>
                    </div>
                    <div id="phone" class="contact-region">
                        <img src="images/telefono.png">
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