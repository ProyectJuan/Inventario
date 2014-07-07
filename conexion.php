<?Php

 
///Conectamos a la DB
 session_start();
$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion);

if (!$conexion)
   {
///Error por si pasa algo...
 
echo "Ocurrio un error al realizar al conexion
contacte con el administrador.\n";
exit; }
?>
