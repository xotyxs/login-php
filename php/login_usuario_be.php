<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

    if (msqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("Location: ../bienvenido.php");
        exit;
    }
    else {
        echo '
            <script>
                alert("Los datos intriducidos son incorrectos");
                window.location = "../index.php";            
            </script>
        ';
        exit;
    }

?>