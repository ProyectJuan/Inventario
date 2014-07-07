<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARQUITERRA</title>

<link rel="stylesheet" href="css/estilo.css" media="screen">
</head>

<body>		

<fieldset>
<legend align="center">modificar</legend>


				
				 <table align="center">
				 
			<form action="modificar.php">
          
				<tr>
					<td>ID
					</td>
					<td>
					   <input type="number" name="id" >
					</td>
				</tr>
				
			
					  <td>
					<input type="submit" name="btnenviar" id="btnenviar" value="MOSTRAR DATOS" >
					</td>
				</form>
					
			  <form action="edit.php" method="post" enctype="multipart/form-data">
			  
					<?php 

					$conexion = mysql_connect("localhost","root","");
					mysql_select_db("login", $conexion); 
					
					$id=$_POST['id'];
					
					$sql=mysql_query("select * from inventario where id = '$id'");

					while($array=mysql_fetch_array($sql)){
	
					 $marca=$array['marca']; 
					 $modelo=$array['modelo'];
					 $serial=$array['serial'];
					 $valor=$array['valor'];
					 $ordencompra=$array['orden'];
					 $caracteristicas=$array['caracteristicas'];
					 $estado=$array['estado'];
					 $ubicacion=$array['ubicacion'];
					 $responsable=$array['responsable'];
					 
					 
					 if(mysql_num_rows($sql)>0) { 
				

	echo "<tr>";
	echo "<td>marca</td>";
	echo "<td>";
	echo "<input type='name' name='marca' value='".$marca."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>modelo</td>";
	echo "<td>";
	echo "<input type='name' name='modelo' value='".$modelo."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>serial</td>";
	echo "<td>";
	echo "<input type='name' name='serial' value='".$serial."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>valor</td>";
	echo "<td>";
	echo "<input type='name' name='valor' value='".$valor."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>Orden Compra</td>";
	echo "<td>";
	echo "<input type='name' name='ordencompra' value='".$ordencompra."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>caracteristicas</td>";
	echo "<td>";
	echo "<input type='name' name='caracteristicas' value='".$caracteristicas."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>Estado</td>";
	echo "<td>";
	echo "<input type='name' name='estado' value='".$estado."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>Ubicacion</td>";
	echo "<td>";
	echo "<input type='name' name='ubicacion' value='".$ubicacion."'/>"; 
	echo "</td >";
	echo "</tr>";
	
	   echo "<tr>";
	echo "<td>Responsble</td>";
	echo "<td>";
	echo "<input type='name' name='responsable' value='".$responsable."'/>"; 
	echo "</td >";
	echo "</tr>";		
				
				
				}
				}
				
	?>
	</form>
	</table>

</fieldset>		
        </div>

</body>
</html>