<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Menu Administrador</title>

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
          <a class="navbar-brand" href="#">Sistema de Inventario Web</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="menu.php">Menu</a></li>
            
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="jumbotron">
      <div class="container">
        <h3>Administrador</h3>
        <p> Como administrador tiene los privilegios maximos dentro de este sistema, por lo que se recomienda guardar de forma inmediata cualquier tipo de modificacion realizada.</p>
        </div>
    </div>

    <div class="container">
   
      <div class="row">
        <div class="col-md-4">
          <h3>Ver Inventario</h3>
          <p>Acceso total a toda la informacion de Inventario, puede realizar busqueda de productos especificos.</p>
          <p><a class="btn btn-default" href="Vista1.php" role="button">Ver &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h3>Agregar usuario</h3>
          <p>Para agregar un nuevo usuario al sistema, debe completar este formulario </p>
          <p><a class="btn btn-default" href="Registro.php" role="button">Continuar &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h3>Editar Informacion Inventario</h3>
          <p>Al momento de actualizar, agregar informacion, asegure guardar todos los cambios realizados</p>
          <p><a class="btn btn-default" href="modificar.php" role="button">Continuar &raquo;</a></p>
        </div>
      </div>
      <div class="row">
      <div class="col-md-4">
          <h3>Agregar nuevo Producto</h3>
          <p>Para agregar un nuevo producto al sistema de inventario debe completar el sigueinte formulario con la informacion requerida</p>
          <p><a class="btn btn-default" href="Formulario.php" role="button">Continuar &raquo;</a></p>
        </div>
      <div class="col-md-4">
          <h3>Generar Reportes</h3>
          <p></p>
          <p><a class="btn btn-default" href="Reportes.php" role="button">Continuar &raquo;</a></p>
        </div>
         <div class="col-md-4">
          <h3>Mensajes</h3>
          <p></p>
          <p><a class="btn btn-default" href="verMensaje.php" role="button">Ver &raquo;</a></p>
        </div>
      </div>
      <div>
              <div class="col-md-4">
          <h3>Ver Reportes</h3>
          <p></p>
          <p><a class="btn btn-default" href="Vreportes.php" role="button">Ver &raquo;</a></p>
        </div>
          <div class="col-md-4">
          <h3>Editar Perfir de Usuarios</h3>
          <p></p>
          <p><a class="btn btn-default" href="modificaruser.php" role="button">Ver &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h3>Ver Perfiles de Usuarios</h3>
          <p></p>
          <p><a class="btn btn-default" href="VistaPerfil.php" role="button">Ver &raquo;</a></p>
        </div>
      </div>  
      <div>
      </div>
      
         
     <hr>

      
    </div> <!-- /container -->
<div>
    <footer>
        <p>&copy; Sebastian </p>
      </footer>
</div>

    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>