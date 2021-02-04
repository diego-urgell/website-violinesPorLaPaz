<?php

echo <<< 'end'
    <nav>
        <div id="nav-control">
            <span id="donate-btn"> <a> Donar </a> </span>
            <img id="small-navbar-button" src="images/navBarButton.png">
        </div>
        <div id="large-navbar" data-state="closed">
            <a id="home-link" href="index.php" class="menuLink"> Quiénes somos? </a>
            <a id="model-link" href="modeloDeAprendizaje.php" class="menuLink"> Modelo de aprendizaje </a>
            <a id="community-link" href="comunidad.php" class="menuLink"> Comunidad </a>
            <a id="campaigns-link" href="campaigns.php" class="menuLink"> Campañas </a>
            <a id="contact-link" href="participa.php" class="menuLink"> Participa </a>
        </div>
    </nav>
    <img src="images/banner_f.png" id="logo">
end;