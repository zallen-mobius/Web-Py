<!DOCTYPE html>
<!--          Programación Web         -->
<!--          -Proyecto WebPy-         -->
<!-- López Carranza - Medina Sifuentes -->
<!--            (Grupo 14)             -->

<html lang="en">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Project </title>
        <!-- links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">     <!-- uso de Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Cabin+Sketch&family=Rubik&family=Rubik+Bubbles&family=Rubik+Puddles&display=swap" rel="stylesheet">    <!-- Esta es la que se va a cambiar con cada nueva fuente. -->
        <link rel="stylesheet" href="../src/styles/style.css">        <!-- Se carga el archivo de estilos general -->
        <link rel="stylesheet" href="../src/styles/inicio_sesion.css">     <!-- Nuestro archivo de estilos propio de esta página. -->
    </head>
    <body>
        <header class="barra" id="menu">      <!--La sección del menu superior, usamos nav porque se usa para navegar en el sitio.-->
            <a href="../en/index.html"> <img src="../src/img/icon.png" alt="Aqui debería ir el logo" id="menu-logo"> </a>      <!-- Flaticon -->
            <ul id="menu-opciones">
                <li>
                    <a href="../en/four_o_four.html"> Play </a>     <!-- Esta pestaña llevara a un formulario que pedira un codigo -->
                </li>       <!-- li -->
                <li>
                    <a href="../en/four_o_four.html"> Create </a>     <!-- Esta pestaña llevara a una pagina que pedira iniciar sesión. -->
                </li>       <!-- li -->
                <li>
                    <a href="../en/four_o_four.html"> Schools </a>     <!-- Esta pestaña llevara a un formulario que pedira un codigo -->
                </li>       <!-- li -->
                <li>
                    <a href="../en/about_us.html"> About us </a>     <!-- Esta pestaña llevara a un formulario que pedira un codigo -->
                </li>       <!-- li -->
            </ul>       <!-- ul menu-opciones -->
            <a href="../en/access.html"> <img src="../src/img/account_2.png" alt="Aqui deberia ir la imagen de cuenta" id="menu-cuenta"> </a>    <!-- Flaticon -->
        </header>      <!-- nav barra menu -->
        
        <div id="contenido">
            <div id="aviso-bienvenida">
                <div id="aviso-bienvenida-objetos">
                    <h1> ¡Bienvenido de nuevo! </h1>
                    <div>
                        <img src="/src/img/avatares/ava_2.png"/>
                    </div>
                    <input type="button" value="Continuar" onclick="location.href='index.html'" id="boton">
                </div>      <!-- div aviso-falta-objetos -->
            </div>      <!-- aviso-falta -->
        </div>      <!-- div contenido -->

        <footer class="barra" id="pie">
            <div id="titulo">
                <h2> Schooly dot com </h2>
            </div>      <!-- div titulo -->
            <div>
                <ul id="scl-logos">
                    <li>
                        <a href="https://www.facebook.com/Py-web-106771222048009"><img src="../src/img/scl-facebook.png" class="scl-logo">
                    </li>
                    <li>
                        <a href="#"> <img src="../src/img/scl-instagram.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/webp2814"> <img src="../src/img/scl-twitter.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCvUPNPBSCsdwcJmB18eZpEg"> <img src="../src/img/scl-youtube.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com.mx/webp2814/"> <img src="../src/img/scl-pinterest.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="four_o_four.html"> <img src="../src/img/scl-googleplay.png" class="scl-logo"> </a>
                    </li>
                </ul>       <!-- ul scl-logos --> 
            </div>      <!-- div -->
        </footer>       <!-- footer barra pie -->

        <!-- - - - - Scripts - - - - -->
        

    </body>
</html>