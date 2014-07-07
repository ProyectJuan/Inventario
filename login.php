<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="stylelogin.css" rel="stylesheet">
	
	<style type="text/css">

	</style>
	<?php include_once('conexion.php');?>
</head>
<body>
	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistema Inventario Web - Login </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
                 
      
          </ul>
        </div>
      </div>
    </div>
    
    <div class="jumbotron">
      <div class="container">
        <h3>Ingresar</h3>
        <p> Ingrese Nombre de usuario y Contrase&ntilde;a para poder ingresar al Inventario.</p>
        </div>
    </div>

			<form class="form-signin" name="login" action="privilegios.php" method="post" accept-charset="utf-8">  
			        <h3 class="form-signin-heading">Ingrese su cuenta</h3>
			        <input type="text" class="form-control" name="usuario" placeholder="usuario" required autofocus>  
			        <input type="password" class="form-control" name="password" placeholder="clave" required> 
			        <label class="checkbox">
         			<input type="checkbox" value="remember-me"> Recordar
       				</label>
       				<button class="btn btn-lg btn-primary btn-block" type="submit" value="ingresar">Ingresar</button>
		    </form> 
		</div> 
</div>

</body>
</html>

  <head>
  
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">

    
  </head>

  <body>

    