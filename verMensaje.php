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
          <a class="navbar-brand" href="#">Mensajes</a>
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
        <h3>Ver Mensajes</h3>
        <p> Revisar Notificaciones, Sugerencias.</p>
        </div>
    </div>
    </div>

<form method="POST" action=""> 

<input type=button value="Actualizar" onClick="window.location.reload()"> 
</form> 


 <?php 
$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion);
$result = mysql_query("SELECT * FROM mensajes");
$result = mysql_query("SELECT usuario, mail, asunto, mensaje FROM mensajes"); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'height=70 width=700> \n"; 
   echo "<tr><td>Usuario</td><td>Mail</td><td>Asunto</td><td>Mensaje</td></tr> \n";
     do {
         echo "<tr><td>".$row["usuario"]."</td><td>".$row["mail"]."</td><td>".$row["asunto"]."</td><td>".$row["mensaje"]."</td>
         </tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo"<script type=\"text/javascript\">alert('No Hay mensajes'); window.location='menu.php';</script>";

 
} 
?>

  </body>
  </html>