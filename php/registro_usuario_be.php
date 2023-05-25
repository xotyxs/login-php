<?php 

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    $ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario registrado correctamente.");
            window.location = "../index.php";
        </script>
    '
}
else{
    echo '
    <script>
        alert("Ocurrio un error al registrar el usuario, intentelo de nuevo por favor.");
        window.location = "../index.php";
    </script>
'
}

?>