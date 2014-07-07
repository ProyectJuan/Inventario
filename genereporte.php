<?php

include_once("conexion.php");


		$tema = $_POST['tema'];
		$tiporeporte = $_POST['tiporeporte'];
		$reporte = $_POST['reporte'];
		


                 $dbQuery=mysql_query("INSERT INTO Reportes (tema, tiporeporte, reporte) VALUES ('".$tema."','".$tiporeporte."','".$reporte."');");
   	             
   	             echo"<script type=\"text/javascript\">alert('Reporte Generado y Almacenado Exitosamente'); window.location='menu.php';</script>";
				


?>