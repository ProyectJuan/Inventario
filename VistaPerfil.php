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
	<title>Vista Perfiles</title>
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
          <a class="navbar-brand" href="#">Perfiles - Vista</a>
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
        <h3>Perfil</h3>
        <p> Perfil Usuarios</p>
        </div>
    </div>
    </div>

<form method="POST" action="buscador.php"> 

<input type=button value="Actualizar" onClick="window.location.reload()"> 

<input type=button value="Modificar" onClick= "window.location='modificaruser.php'">
<input type=button value="Nuevo" onClick= "window.location='Registro.php'">

</form> 





  <?php 
$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion);
$result = mysql_query("SELECT * FROM usuarios");
$result = mysql_query("SELECT id, tipouser, usuario, apellido, password, descripcion, email FROM usuarios"); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>ID</td><td>Nivel Privilegios</td><td>Nombre</td><td>Apellido</td><td>Cargo</td><td>Email</td></tr> \n"; 
     do { 
      echo "<tr><td>".$row["id"]."</td><td>".$row["tipouser"]."</td><td>".$row["usuario"]."</td><td>".$row["apellido"]."</td><td>".$row["descripcion"]."</td><td>".$row["email"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>
        </div>

</body>
</html
