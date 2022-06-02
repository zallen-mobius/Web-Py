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
        <title> Proyecto </title>
        <!-- links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">     <!-- uso de Google Fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Rubik&family=Rubik+Bubbles&family=Rubik+Puddles&display=swap" rel="stylesheet">    <!-- Esta es la que se va a cambiar con cada nueva fuente. -->
        <link rel="stylesheet" href="/src/styles/style.css">        <!-- Se carga el archivo de estilos general -->
        <link rel="stylesheet" href="/src/styles/nuevo_usuario.css">
    </head>
    <body>
        <header class="barra" id="menu">      <!--La sección del menu superior, usamos nav porque se usa para navegar en el sitio.-->
            <a href="/index.html"> <img src="src/img/icon.png" alt="Aqui debería ir el logo" id="menu-logo"> </a>      <!-- Flaticon -->
            <ul id="menu-opciones">
                <li>
                    <a href="cuatro_cero_cuatro.html"> Jugar </a>     <!-- Esta pestaña llevara a un formulario que pedira un codigo -->
                </li>       <!-- li -->
                <li>
                    <a href="cuatro_cero_cuatro.html"> Crear </a>     <!-- Esta pestaña llevara a una pagina que pedira iniciar sesión. -->
                </li>       <!-- li -->
                <li>
                    <a href="cuatro_cero_cuatro.html"> Escuelas </a>     <!-- Esta pestaña llevara a un formulario que pedira un codigo -->
                </li>       <!-- li -->
                <li>
                    <a href="nosotros.html"> Sobre nosotros </a>     <!-- Esta pestaña llevara a un formulario que pedira un codigo -->
                </li>       <!-- li -->
            </ul>       <!-- ul menu-opciones -->
            <a href="acceso.html"> <img src="src/img/account_2.png" alt="Aqui deberia ir la imagen de cuenta" id="menu-cuenta"> </a>    <!-- Flaticon -->
        </header>      <!-- nav barra menu -->
        
        <div id="contenido">
            
            <?php
                include("conectar.php");
            
                if($_POST){		//Si se ha enviado a trvés de POST
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $edad = $_POST['edad'];
                    $correo = $_POST['correo'];
                    $pass = $_POST['password'];
                    $usuario = $_POST['usuario'];
                    $avatar = $_POST['avatar'];
                    mysqli_query($conexion, "INSERT INTO usuarios(nombres, apellido, edad, correo, pass, usuario, avatar) values ('$nombre', '$apellido', $edad, '$correo', '$pass', '$usuario', $avatar)") or die(mysqli_error($conexion));
                }
                mysqli_close($conexion);
            ?>
            <div id="aviso-creada">
                <div id="aviso-creada-objetos">
                    <h1> ¡Ya eres parte de Schooly! </h1>
                    <div>
                        <img src="/src/img/valores.jpeg"/>
                    </div>
                    <input type="button" value="Continuar" onclick="location.href='index.html'" id="boton">
                </div>      <!-- div aviso-falta-objetos -->
            </div>      <!-- aviso-falta -->

        </div>      <!-- div contenido -->

        <footer class="barra" id="pie">
            <div id="titulo">
                <h2> Schooly punto com </h2>
            </div>      <!-- div titulo -->
            <div>
                <ul id="scl-logos">
                    <li>
                        <a href="https://www.facebook.com/Py-web-106771222048009"><img src="/src/img/scl-facebook.png" class="scl-logo">
                    </li>
                    <li>
                        <a href="#"> <img src="src/img/scl-instagram.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/webp2814"> <img src="/src/img/scl-twitter.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCvUPNPBSCsdwcJmB18eZpEg"> <img src="/src/img/scl-youtube.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com.mx/webp2814/"> <img src="/src/img/scl-pinterest.png" class="scl-logo"> </a>
                    </li>
                    <li>
                        <a href="#"> <img src="/src/img/scl-googleplay.png" class="scl-logo"> </a>
                    </li>
                </ul>       <!-- ul scl-logos --> 
            </div>      <!-- div -->
        </footer>       <!-- footer barra pie -->

        <!-- - - - - Scripts - - - - -->
        

    </body>
</html>