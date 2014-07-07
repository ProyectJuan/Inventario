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
	<title>Vista Mensajes</title>
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
          <a class="navbar-brand" href="#">Vista Reporte</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="menuser3.php">Menu</a></li>
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>

       <div class="jumbotron">
      <div class="container">
        <h3>Lista de Reportes</h3>
        <p> Reportes generados hasta ahora.</p>
        </div>
    </div>
    </div>

<form method="POST" action=""> 

<input type=button value="Actualizar" onClick="window.location.reload()"> 
<input type=button value="Volver" onClick= "window.location='menuser3.php'">
<input type=button value="Descargar" onClick= "window.location='exportarR.php'">
</form> 


 <?php 
$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion);
$result = mysql_query("SELECT * FROM  reportes");
$result = mysql_query("SELECT NroReporte, tema, tiporeporte, reporte FROM reportes"); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'  height=70 width=700> \n"; 
   echo "<tr><td>Nro Reporte</td><td>Tema</td><td>Periodo del Reporte</td><td>Reporte</td></tr> \n";
     do {
         echo "<tr><td>".$row["NroReporte"]."</td><td>".$row["tema"]."</td><td>".$row["tiporeporte"]."</td><td>".$row["reporte"]."</td>
         </tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo"<script type=\"text/javascript\">alert('No Hay Reportes generados'); window.location='menu.php';</script>";

 
} 
?>

  </body>
  </html>