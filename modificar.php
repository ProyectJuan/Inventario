<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="stylelogin.css" rel="stylesheet">
	
	<style type="text/css">

	</style>
	
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
          <a class="navbar-brand" href="#">Sistema Inventario Web - Editar </a>
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
        <h3>Modificar</h3>
        <p> Ingrese la ID del registro que desea modificar.</p>
        </div>
    </div>

	 <table align="center">
				 
			<form action="formmodificar.php" method="post" enctype="multipart/form-data">
          
				<tr>
					<td>ID
					</td>
					<td>
					   <input type="number" name="id" >
					   	<input type="submit" name="btnenviar" id="btnenviar" value="Mostrar Registro" >
					</td>
				</tr>		
		
	</form>
	</table>

  <?php 
$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion);
$result = mysql_query("SELECT * FROM inventario");
$result = mysql_query("SELECT id, tipo, marca, modelo, serial, valor, orden, caracteristicas, estado, ubicacion, responsable FROM inventario"); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr><td>ID</td><td>Tipo</td><td>Marca</td><td>Modelo</td><td>Serial</td><td>Valor</td><td>Orden</td><td>Caracteristicas</td><td>Estado</td><td>Ubicacion</td><td>Responsable</td></tr> \n"; 
     do { 
      echo "<tr><td>".$row["id"]."</td><td>".$row["tipo"]."</td><td>".$row["marca"]."</td><td>".$row["modelo"]."</td><td>".$row["serial"]."</td><td>".$row["valor"]."</td><td>".$row["orden"]."</td><td>".$row["caracteristicas"]."</td><td>".$row["estado"]."</td><td>".$row["ubicacion"]."</td><td>".$row["responsable"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>

	
        </div>

</body>
</html
