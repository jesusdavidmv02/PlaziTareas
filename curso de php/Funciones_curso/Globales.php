<!-- $GLOBALS: Nos brinda información de todas las variables globales que existen.

$_SERVER: Nos brinda información del servidor.

$_GET: Nos brinda información de todas las variables o parámetros que son pasadas por URL.

$_POST: Nos brinda información de las variables que son enviadas a través del método POST de HTTP.

$_FILES: Nos brinda información de variables de subida de ficheros HTTP con el método POST.

$_COOKIE: Nos brinda información de todas las cookies.

$_SESSION: Nos brinda información de todas las variables de sesiones.

$_REQUEST: Por defecto contiene el contenido o valores de las variables superglobales $_GET, $_POST y $_COOKIE.

$_ENV: Nos brinda información del entorno en el que se está ejecutando PHP. -->

<?php
$michi = "Mr. Michi";

echo "<pre>";
    var_dump($GLOBALS);
echo "</pre>";

// function local_scope(){
//     echo $_GET["michi"];
//  }

// local_scope();

?>