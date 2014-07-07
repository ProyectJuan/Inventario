
<?php
include_once("conexion.php");


$conexion = mysql_connect( "localhost", "root","");

mysql_select_db("login",$conexion);

$user=$_POST["usuario"];
$pass=$_POST["password"];	

$consulta="select password, tipouser from usuarios where usuario='".$user."'";

$respuesta=mysql_query($consulta,$conexion) or die(mysql_error());

$fila = mysql_fetch_assoc($respuesta);
$total=mysql_num_rows($respuesta);
if($total>0)
{
$password=  $fila["password" ];
$tipouser=$fila["tipouser"];




if($password==$pass)


{
	if($tipouser==1)
	
	{
	$_SESSION["validado"]="ok";
	$_SESSION['usuario'] = $_POST['usuario'];
    header("location:menu.php");
		
	}else
	{
		if($tipouser==2)
		
		{
			$_SESSION["validado"]="ok";
			$_SESSION['usuario'] = $_POST['usuario'];
              header("location:menuser.php");
		}
		else
		{
			if($tipouser==3)
			{
				$_SESSION["validado"]="ok";
				$_SESSION['usuario'] = $_POST['usuario'];
				header("location:menuser3.php");
			}
		}
}
	
	
}else
{
	 echo"<script type=\"text/javascript\">alert('LA CLAVE ES INCORRECTA'); window.location='login.php';</script>";

	
	
}
}else

{
		 echo"<script type=\"text/javascript\">alert('EL USUARIO ES INCORRECTO'); window.location='login.php';</script>";

	
	
}










?>
