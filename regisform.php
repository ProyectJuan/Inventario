<?php

include_once("conexion.php");






$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serial = $_POST['serial'];
$valor = $_POST['valor'];
$orden = $_POST['orden'];
$caracteristicas = $_POST['caracteristicas'];
$estado = $_POST['estado'];
$ubicacion = $_POST['ubicacion'];
$responsable = $_POST['responsable'];
$fecha = $_POST['fecha'];


$dbQuery=mysql_query("INSERT INTO inventario (tipo, marca, modelo, serial, valor, orden, caracteristicas, estado, ubicacion, responsable, fecha ) VALUES ('".$tipo."','".$marca."','".$modelo."','".$serial."','".$valor."','".$orden."','".$caracteristicas."','".$estado."','".$ubicacion."' ,'".$responsable."','".$fecha."');");

echo"<script type=\"text/javascript\">alert('Producto Agregado Correctamente'); window.location='Formulario.php';</script>";








?>