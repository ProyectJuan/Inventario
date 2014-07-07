<?php 
header("Content-type: application/vnd.ms-excel" ) ; 
header("Content-Disposition: attachment; filename=inventario.xls" ) ; 
$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion);
$result = mysql_query("SELECT * FROM inventario");

//mysql_select_db($login) ; 
$result = mysql_query("SELECT * FROM inventario");

$campos = mysql_num_fields($result) ; 
$i=0; 
echo "<table> <br> Inventario </br><tr>"; 
while($i<$campos){ 
echo "<td>". mysql_field_name ($result, $i) ; 
echo "</td>"; 
$i++; 
} 
echo "</tr>"; 
while($row=mysql_fetch_array($result)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 

?> 
<?php 
echo"<script type=\"text/javascript\">alert('Exportacion Realizada con Exito'); window.location='menuser.php';</script>";

?> 