<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Validar</title>
 
</head>
<body>
    <?php
        include'conexion.php';
        if(isset($_POST['aceptar'])){
            $usuario = $_POST['usuario'];
            $Password = $_POST['Password'];
            $log = mysql_db_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND Password='$Password'");
            if (mysql_num_rows($log)>0) {
                $row = mysql_fetch_array($log);
                $_SESSION["usuario"] = $row['usuario'];
                echo '<script> window.location="panel.php"; </script>';
            }
            else{
                echo '<script> alert("Usuario o Password incorrectos.");</script>';
                echo '<script> window.location"index.php"; </script>';
            }
        }
    ?>
</body>
</html>