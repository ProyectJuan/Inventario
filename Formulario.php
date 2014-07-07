
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
          <a class="navbar-brand" href="#">Formulario de Inventario</a>
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
        <h3>Registro Nuevo </h3>
        <p> Complete los datos a continuacion</p>
        </div>
    </div>


<form class="form-horizontal" role="form" method="POST" action="regisform.php">
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Tipo Producto</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="tipo" id=""
             placeholder="Tipo de Producto" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Marca</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="marca" id=""
             placeholder="Ingrese marca del Producto" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Modelo</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="modelo" id=""
             placeholder="Ingrese modelo del producto" required="required">
    </div>
  </div>


  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Serial</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="serial" id=""
             placeholder="Ingrese serial del producto" required="required">
    </div>
</div>
<div class="form-group">
    <label for="" class="col-lg-2 control-label">valor</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="valor" id=""
             placeholder="Ingrese costo de producto" required="required">
    </div>
  </div>
   <div class="form-group">
    <label for="" class="col-lg-2 control-label">Orden de compra</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="orden" id=""
             placeholder="Codigo de compra" required="required">
    </div>

  </div>
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Caracteristicas </label>
    <div class="col-lg-10">
      <textarea class="form-control" name="caracteristicas" id="" placeholder="Caracteristicas" required="required"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Estado</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="estado" id=""
             placeholder="Estado actual del producto" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Ubicacion</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="ubicacion" id=""
             placeholder="Ingrese ubicacion del producto" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-lg-2 control-label">Responsable</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="responsable" id=""
             placeholder="Ingrese nombre del usuario" required="required">
    </div>
  </div>
   <div class="form-group">
    <label for="" class="col-lg-2 control-label">Fecha</label>
    <div class="col-lg-10">
      <input type="text" class="form-control"  name="fecha" id=""
             placeholder="Ingrese Fecha Actual para el registro" required="required">
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit"  value="registar" class="btn btn-default">Agregar</button>
     </div>
  </div>
   <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <p><a class="btn btn-default" href="Vista1.php" role="button">Ver &raquo;</a></p> 
    </div>
  </div>
</form>


  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>