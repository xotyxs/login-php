<?php 

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor inicie sesión");
                window.location = "index.php";
            </script>        
        ';
        session_destroy();
        die();
    }
    session_destroy();
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
    <h1>bienvenido hola mundo</h1>
    <a href="php/cerrar_sesion_be.php>Cerrar sesion</a>
</body>
</html>