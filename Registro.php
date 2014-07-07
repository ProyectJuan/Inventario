<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
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
          <a class="navbar-brand" href="#">Registro de Usuario</a>
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
        <h3>Registro Nuevo Usuario</h3>
        <p> Complete los datos a continuacion</p>
        </div>
    </div>


<form class="form-horizontal" role="form" action="ingreso.php" name="registro" method="post">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type=text class="form-control"  name="usuario" 
             placeholder="Nombre" required="required">
    </div>
  </div>

  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Apellido</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="apellido" 
             placeholder="Apellido" required="required">
    </div>
</div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" name="password"  
             placeholder="Contrase&ntilde;a" required="required">
    </div>

  </div>
    <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Verificar Contrase&ntilde;a</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" name="password1" 
             placeholder="Ingrese nuevamente la Contrase&ntilde;a" required="required">
    </div>

  </div>
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="descripcion" 
             placeholder="Descripcion" required="required">
    </div>
  </div>
  <div class="form-group">
                 <label for="" class="col-lg-2 control-label">Nivel Privilegios</label>
            <div class="col-lg-10">
                   <select class="form.control" name="tipouser" required="required">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                   </select>
            </div>
        </div>
   <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="email" class="form-control"  name="email" 
             placeholder="Email" required="required">
    </div>
  </div>
   

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" value= "registrar" class="btn btn-default">Registrar </button>
                 
    </div>
  </div>
</form>


  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>