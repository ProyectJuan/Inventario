
<?php 


$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion); 

$id = $_GET['id'];
$tipo=$_POST['tipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serial=$_POST['serial'];
$valor=$_POST['valor'];
$orden=$_POST['orden'];
$caracteristicas=$_POST['caracteristicas'];
$estado=$_POST['estado'];
$ubicacion=$_POST['ubicacion'];
$responsable=$_POST['responsable'];
	
	
   $sql = mysql_query("SELECT * FROM inventario WHERE id = '$id'");
   
   while($f = mysql_fetch_array($sql)){

	$query =mysql_query("UPDATE inventario SET `tipo`='$tipo',`marca`='$marca',`modelo`='$modelo',`serial`='$serial',`valor`='$valor' ,`orden`='$orden',`caracteristicas`='$caracteristicas',`estado`='$estado',`ubicacion`='$ubicacion' ,`responsable`='$responsable' where Id ='$id' ");
	
	}
	
	if ($query = true){

	echo "<script type='text/javascript'>
		alert('Modificacion lista');
		 window.location='modificar.php';
		</script>";
		
		}else{
		
		
		"<script type='text/javascript'>
		alert('error al modificar');
		window.location='modificar.php';
		</script>";
		
		}

?> 

