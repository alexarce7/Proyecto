<?php
    session_start();
    include 'conexion.php';
    $tipo = $_POST["tipo"];
    $serie = $_POST["serie"];
    $modelo = $_POST["modelo"];
    $contrato = $_POST["contrato"];

    $insertar = "INSERT INTO equipo (tipo, serie, modelo, contrato) VALUES ('$tipo',
    '$serie', '$modelo','$contrato')";

    $verificar_serie = mysqli_query($conexion, "SELECT * FROM equipo WHERE serie = '$serie'");
    if (mysqli_num_rows($verificar_serie) > 0){
        echo '<script> 
        alert("El numero de serie ya esta registrado");
        window.history,go(-1); 
        </script>';
        exit;
    }

    
    $resultado = msqli_query($conexion, $insertar);
    if (!$resultado){
        echo 'Error al registar el equipo, verificar que todos los campos esten llenos';
    }else{
        echo 'El registro se ha guardado';
    }

    mysqli_close($conexion);
?>



