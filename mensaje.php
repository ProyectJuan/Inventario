<?php

include_once("conexion.php");


		$usuario = $_POST['usuario'];
		$mail = $_POST['mail'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];





		if ($_POST['usuario']== $_POST['usuario']) {
	
				$dbQuery=mysql_query("INSERT INTO mensajes(usuario, mail, asunto, mensaje ) VALUES ('".$usuario."','".$mail."','".$asunto."','".$mensaje."');");
   	             
   	             echo"<script type=\"text/javascript\">alert('Mensaje Enviado Exitosamente!'); window.location='Enviomsn.php';</script>";
				

					}else{
							


							header("location: Enviomsn.php");
						}

?>