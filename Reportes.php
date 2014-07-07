<html>
<head>

	<title></title>
  <script type="text/javascript" src="../ajax/ajax.js"></script>
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="stylelogin.css" rel="stylesheet">
	<title>Generar Reporte</title>
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
          <a class="navbar-brand" href="#">Generacion Reporte</a>
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
        <h3>Nuevo Reporte</h3>
        <p> Reporte los eventos relevantes </p>
        </div>
    </div>
    </div>

    <form class="form-horizontal" role="form" method="POST" action="genereporte.php">
             <div class="form-group"> 
                 <label for="" class="col-lg-2 control-label">Tema</label>
            <div class="col-lg-10">
                   <input type="text" class="form-control"  name="tema" id=""
                     placeholder="Ingrese modelo del producto" required="required">
            </div>
        </div>

        <div class="form-group">
                 <label for="" class="col-lg-2 control-label">Periodo Reporte</label>
            <div class="col-lg-10">
                   <select class="form.control" name="tiporeporte" required="required">
                          <option value="semanal">Semanal</option>
                          <option value="mensual">Mensual</option>
                          <option value="semestral">Semestral</option>
                          <option value="Anual">Anual</option>
                  </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-lg-2 control-label">Reporte</label>
                <div class="col-lg-10">
                     <textarea class="form-control" name="reporte" id="" placeholder="Escriba el Reporte" required="required"></textarea>
                </div>
         </div>

          <div class="form-group">
               <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit"  value="registar" class="btn btn-default">Agregar</button>
              </div>
         </div>

    </form>
  </body>
  </html>