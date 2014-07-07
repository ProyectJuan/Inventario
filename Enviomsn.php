<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>

	<title></title>
  <script type="text/javascript" src="../ajax/ajax.js"></script>
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="stylelogin.css" rel="stylesheet">
	
	<style type="text/css">
	.form-horizontal{

	max-width: 500px;
padding: 15px;
margin: 0 auto;
	}
	</style>
	<title>Formulario</title>
</head>
<body>

	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Estado</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Contacto</a>
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
        <h3>Contactar al Administrador </h3>
        <p> Ingrese la informacion requerida, junto con su mensaje.</p>
        </div>
    </div>


<form class="form-horizontal" role="form" method="POST" action="mensaje.php">
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Usuario</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="usuario" id=""
             placeholder="Usuario" required="required">
    </div>
  </div>
   
   <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="email" class="form-control"  name="mail" 
             placeholder="Email" required="required">
    </div>
  </div>
   <div class="form-group">
    <label for="" class="col-lg-2 control-label">Asunto</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="asunto" id=""
             placeholder="Asunto" required="required">
    </div>
  </div>
    <div class="form-group">
    <label for="" class="col-lg-2 control-label">Mensaje </label>
    <div class="col-lg-10">
      <textarea class="form-control" name="mensaje" id="" placeholder="Escriba su Mensaje" required="required"></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit"  value="registar" class="btn btn-default">Enviar</button>
          
    </div>
  </div>
</form>


  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>