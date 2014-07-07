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
      <title>Inventario</title>
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
          <a class="navbar-brand" href="#">Inventario -Buscar</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="menu.php">Menu</a></li>
             <li class=""><a href="buscar.php">Volver</a></li>
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>

       <div class="jumbotron">
      <div class="container">
        <h3>Inventario</h3>
        <p> Resultado Busqueda</p>
        </div>
    </div>
    </div>
    <form> 
            <input type=button value="Realizar Nueva Busqueda" onClick= "window.location='buscar.php'"> 
     </form>

<?php 
include_once('conexion.php');
if (!isset($_POST["buscar"])){ 
      echo "Debe especificar una cadena a buscar"; 
      echo "</html></body> \n"; 
      exit; 
} 
//$conexion = mysql_connect("localhost","root","");
//mysql_select_db("login", $conexion);
$dbQuery=mysql_query("SELECT * FROM inventario WHERE id LIKE '$_POST[buscar]' OR tipo LIKE '$_POST[buscar]' OR marca LIKE '$_POST[buscar]' OR modelo LIKE '$_POST[buscar]' OR serial LIKE '$_POST[buscar]' OR valor LIKE '$_POST[buscar]' OR orden LIKE '$_POST[buscar]' OR caracteristicas LIKE '$_POST[buscar]' OR estado LIKE '$_POST[buscar]' OR ubicacion LIKE '$_POST[buscar]' OR responsable LIKE '$_POST[buscar]' OR fecha LIKE '$_POST[buscar]'  ", $conexion) or die("Error en: $: " . mysql_error());
if ($row = mysql_fetch_array($dbQuery)){ 
      echo "<table border = '1'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($dbQuery)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["id"]."</td> \n"; 
            echo "<td>".$row["tipo"]."</td> \n"; 
            echo "<td>".$row["marca"]."</td> \n"; 
            echo "<td>".$row["modelo"]."</td> \n"; 
            echo "<td>".$row["serial"]."</td> \n"; 
            echo "<td>".$row["valor"]."</td> \n"; 
            echo "<td>".$row["orden"]."</td> \n"; 
            echo "<td>".$row["caracteristicas"]."</td> \n"; 
            echo "<td>".$row["estado"]."</td> \n"; 
            echo "<td>".$row["ubicacion"]."</td> \n"; 
            echo "<td>".$row["responsable"]."</td> \n"; 
            echo "<td>".$row["fecha"]."</td> \n";
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($dbQuery)); 
            echo "</table> \n"; 
} else { 

echo"<script type=\"text/javascript\">alert('No se ha encontrado ningun registro '); window.location='buscar.php';</script>";

} 
?> 
</body> 
</html> 