<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Menu Usuario</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">

    
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
          <a class="navbar-brand" href="#">Sistema de Inventario Web - Vista</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="menuser.php">Menu</a></li>
            
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="jumbotron">
      <div class="container">
        <h3>Hola!</h3>
        <p> Como usuario solo puede ver la informacion contenida aquí, no tiene permitido hacer modificacione, de  necesitar mas informaicion contactar con el Administrador.</p>
        </div>
    </div>

    <div class="container">
   
      <div class="row">
        <div class="col-md-4">
          <h3>Ver Inventario</h3>
          <p>Acceso total a toda la informacion de Inventario, privilegio solo de vista.</p>
          <p><a class="btn btn-default" href="Vista2.php" role="button">Ver &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h3>Contactar Administrador</h3>
          <p> </p>
          <p><a class="btn btn-default" href="Enviomsn.php" role="button">Continuar &raquo;</a></p>
       </div>
       
       <div class="col-md-4">
          <h3>Exportar Inventario</h3>
          <p>  Exportar de forma directa el inventario completo</p>
          <p><a class="btn btn-default" href="exportar.php" role="button">Continuar &raquo;</a></p>
         
       </div> </br>
       
       
       <hr>

      <footer>
        <p>&copy; Sebastian </p>
      </footer>
    </div> <!-- /container -->


    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>