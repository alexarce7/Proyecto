<?php
session_start();
session_destroy();
echo 'Cerraste Sesion';
echo '<script> window.location=index.php; </script>';
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Saliendo</title>
</head>
<body>
    <script language="javascript">location.href = "index.php";</script>
</body>
</html>