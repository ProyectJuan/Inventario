<!DOCTYPE html>
<html lang="en">
<head>

    <title>Eliminar Perfil </title>
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
          <a class="navbar-brand" href="#">Sistema Inventario Web - Eliminar </a>
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
        <h3>Eliminar</h3>
        <p> Ingrese la ID del perfil de usuario a eliminar.</p>
        </div>
    </div>


<div align="center"> 
    <table border="0" width="600" style="font-family: Verdana; font-size: 8pt" id="table1"> 
        <tr> 
            <td colspan="2"><h3 align="center">Eliminar Perfil</h3></td> 
        </tr> 
        <form method="POST" action="borrar.php"> 
        <tr> 
            <td width="50%">&nbsp;</td> 
            <td width="50%">&nbsp;</td> 
        </tr> 
        <tr> 
            <td width="50%"> 
            <p align="center"><b>ID del registro a eliminar: </b></td> 
            <td width="50%"> 
            <p align="center"><input type="text" name="id" size="20"></td> 
        </tr> 
        <tr> 
            <td width="50%">&nbsp;</td> 
            <td width="50%">&nbsp;</td> 
        </tr> 
        <tr> 
            <td width="100%" colspan="2"> 
            <p align="center"> 
            <input type="submit" value="Eliminar" name="B1"></td> 
        </tr> 
        </form> 
    </table> 
</div> 

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

</body> 

</html> 
