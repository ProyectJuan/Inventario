<html> 

<head> 
<title>Registro eliminado.</title> 
<META name='robot' content='noindex, nofollow'> 
</head> 

<body> 

<?php 
// Actualizamos en funcion del id que recibimos 

$id = $_POST['id']; 

include_once('conexion.php');   

$dbQuery=mysql_query("DELETE from usuarios where id = '$id'");

$result = mysql_query($dbQuery);  

   

echo"<script type=\"text/javascript\">alert('Registro Eliminado'); window.location='modificaruser.php';</script>";

?> 



</body> 

</html> 
