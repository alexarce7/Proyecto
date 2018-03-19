<?php
    //function conectar(){
      //  $user="root";
        //$pass="";
        //$server="localhost";
        //$db="bdprueba";
        //$con=mysqli_connect($server,$user);
        //if (!$con){
          //  die("Error al Conectar".mysql_error()); 
        //}
        //$db_selected = mysqli_select_db($con, $db);
        //if (!$db_selected){
          //  die("No hay base seleccionada".mysql_error());
        //}
        //return $con;
    //}
    $conexion = mysqli_connect("localhost", "root", "", "bdprueba");
?>