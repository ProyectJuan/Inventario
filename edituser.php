
<?php 


$conexion = mysql_connect("localhost","root","");
mysql_select_db("login", $conexion); 

$id = $_GET['id'];
$tipouser=$_POST['tipouser'];
$usuario=$_POST['usuario'];
$apellido=$_POST['apellido'];
$password=$_POST['password'];
$descripcion=$_POST['descripcion'];
$email=$_POST['email'];

	
   $sql = mysql_query("SELECT * FROM usuarios WHERE id = '$id'");
   
   while($f = mysql_fetch_array($sql)){
	$query =mysql_query("UPDATE usuarios SET `tipouser`='$tipouser',`usuario`='$usuario',`apellido`='$apellido',`password`='$password',`descripcion`='$descripcion' ,`email`='$email' where Id ='$id' ");
	
	}
	
	if ($query = true){

	echo "<script type='text/javascript'>
		alert('Perfil Editado Exitosamente');
		 window.location='modificaruser.php';
		</script>";
		
		}else{
		
		
		"<script type='text/javascript'>
		alert('error al modificar');
		window.location='modificar.php';
		</script>";
		
		}

?> 

