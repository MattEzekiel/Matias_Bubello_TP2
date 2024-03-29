<?php
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$sexo = $_POST ['sexo'];
$mensaje = $_POST ['mensaje'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Gracias</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="estilo.css" />
    <link rel="shortcut icon" type="image/x-icon" href="img/icono-logo-foz.ico" />
</head>

<body>
    <header>
        <nav>
           <a class="burguer-nav"></a>
            <a class="weatherwidget-io" href="https://forecast7.com/en/n25d52n54d59/foz-do-iguacu/" data-label_1="FOZ DO IGUAÇU" data-label_2="WEATHER" data-theme="original">FOZ DO IGUAÇU WEATHER</a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://weatherwidget.io/js/widget.min.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'weatherwidget-io-js');

            </script>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="informacion.html">Información</a></li>
                <li><a href="historia.html">Historia</a></li>
                <li><a href="turismo.html">Turismo</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>¡Gracias!</h1>
        <div class="grcs">
            <img class="titulares" src="img/Grandes/gracias-cataratas-noche.jpg" alt="Gracias">
        </div>
    </main>
    <footer>
      <span class="center" id="reservados"><!-- Dise;ado y desarrollado por -->Matías Ezequiel Bubello - Diseño y Desarrollo Web - Profesora Mabel García - TP3</span>
      <span class="center" id="brasil">¡Brasil Sensacional!</span>
        <ol>
            <li><b>Lugares a conocer</b></li>
            <li><a href="turismo.html#macuco">Macuco Safari</a></li>
            <li><a href="turismo.html#aves">Parque De Las Aves</a></li>
            <li><a href="turismo.html#paracaidas">Salto de paracaídas</a></li>
            <li><a href="turismo.html#usina">Usina de Itaipu</a></li>
            <li><a href="turismo.html#lago">Lago de Itaipu</a></li>
            <li><a href="turismo.html#compras">Foz de las Compras</a></li>
            <li><a href="turismo.html#casino">Casinos</a></li>
            <li><a href="turismo.html#noche">Vida Nocturna</a></li>
            <li><a href="turismo.html#cognopolis">Cognópolis</a></li>
            <li><a href="turismo.html#park">Foz do Iguaçu Park Show</a></li>
        </ol>
        <h3>Nuestra ubicación</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115220.4213646135!2d-54.617004352985866!3d-25.517111233276893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f690ebae530a43%3A0x21979473b4c4a952!2sFoz+do+Igua%C3%A7u%2C+Estado+de+Paran%C3%A1%2C+Brasil!5e0!3m2!1ses-419!2sar!4v1560724706493!5m2!1ses-419!2sar" style="border:0" allowfullscreen></iframe>
        <span class="center"><a target="_blank" href="https://web.archive.org/web/20100418130607/http://www.fozdoiguacu.pr.gov.br/portal2/home_turismo/" id="municipio">Municipio</a></span>
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="menu.js"></script>
</body>

</html>