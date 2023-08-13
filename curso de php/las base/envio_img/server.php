<?php

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];



$basename = $_FILES['foto']['name'] ;
$imagen = $_FILES['foto']['tmp_name'] ;

$ruta_a_subir = "contenedor/$basename";

move_uploaded_file($imagen,$ruta_a_subir);


// echo $basename;


// var_dump($_FILES);

// echo "El usuario $nombre tiene $edad años.";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?=$ruta_a_subir?>" alt="" srcset="">
</body>
</html>