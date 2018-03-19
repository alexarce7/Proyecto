<?php
    session_start();
    include 'conexion.php';
    $conexion;
    if(isset($_SESSION['usuario'])){
        echo '<script> window.location="panel.php"; </script>';
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario General</title>
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet"/>    
    <link href="bootstrap/bootstrap-theme.css" rel="stylesheet"/>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/paraiconos.css" rel="stylesheet" />
    <link href="fonts/OleoScript-Regular.ttf" rel="stylesheet" />
    <link rel="stylesheet" href="css/paraicono.css">
    <link rel="stylesheet" href="alertaschidas/sweetalert.css"/>
    <script src="alertaschidas/sweetalert-dev.js"></script>
        
</head>

<style>
@font-face{
font-family:Fuentechida;
src:url(fonts/OleoScript-Regular.ttf);

}
    body{
        background-image: url(imagenes/Black.jpg);
        background-size:cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment:fixed;
    }
    .formulario{
        transition: 2s;
        margin-top: 100px;
        width: 30%;
        box-shadow: 0px 0px 40px red,0px 0px 80px white;
    }

    .formulario:hover{
        transition: .8s;
        background-color: rgba(0,0,0,.5);
    }


.logo{
        height: 75px;
        margin-top: 40px;
    }
    
 .espaciado{
        margin-top: 40px;
    }

    fieldset{
        transition: 2s;
        margin-bottom: 50px;
        border-color: rgba(213,0,0 ,1);
        border-style: groove;
        border-width: 5px;
        border-radius: 20px;
    }
    


   h3,h4{
        
        color:white;
        text-align: center;
        font-family: fuentechida;
    }
  
    .Input{
        transition: .8s;
        background-color: rgba(0,0,0,.5);
        color: white;
        border-color:#006;
	    border-bottom-color:white;
        border-bottom-style:groove;
	    border-left:none;
	    border-right:none;
	    border-top:none;
        border-width: 4px;
        
    }

    .Input:hover{
        transition: .8s;
	    background-color:rgba(55,71,79 ,.5);
	    box-shadow:inset;
        border-bottom-color:red;
	}
    
    .Input:focus{
        transition: .8s;
	    border-bottom-color:red;
    }



    @media screen and (max-width:750px) {
        
        .logo{
            height: 50px;

        }
        .formulario{
            transition: 2s;
            width: 95%;
            margin-top: 10px;
        }
    }
</style>

<body>

<div class="container formulario">
         <div class="row">
               <div class="col-xs-4 col-xs-offset-4  ">
                <img src="imagenes/ini.jpg" class="logo center-block">
                </div>
            
        </div>
         <div class=" espaciado">
                
                </div>
        <div class="row">
          <fieldset class="col-xs-10 col-xs-offset-1">
            

                <legend class="hidden-xs"><h3>Inicio de Sesi&oacute;n</h3></legend>
                   		 
    
    		<form class="form-horizontal" action="validar.php">

    			<div class="form-group">
                    <label class="col-xs-12" for="usuario"><h4>Usuario</h4></label>
                 	<div class="col-xs-10 col-xs-offset-1">                        
                    		<input type="text" class="form control Input center-block" name="usuario" autocomplete="off">                       
                	</div>
        		</div>


		<div class="form-group">
                    <label class="col-xs-12" for="Password"><h4>Password</h4></label>
                 	<div class="col-xs-10 col-xs-offset-1">                        
                    <input type="Password" class="form control Input center-block" name="Password" autocomplete="off">                       
                </div>
        </div>

         <div class="form-group">
                        <button type="submit" name="entrar" class="btn btn-danger  center-block" name="entrar">Aceptar</button>
                    
         </div>     
    		</form>

           </fieldset>
        
   		</div>
 </div>
</body>
</html>