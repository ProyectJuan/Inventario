<html>
<head>

	<title></title>
  <script type="text/javascript" src="../ajax/ajax.js"></script>
	<script type="text/javascript" src=""></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="stylelogin.css" rel="stylesheet">
	
	<style type="text/css">
	.form-horizontal{

	max-width: 500px;
padding: 15px;
margin: 0 auto;
	}
	</style>
	<title>Formulario</title>
</head>
<body>

	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Estado</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Inventario - Editar</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="menu.php">Menu</a></li>
            <li><a href="modificar.php">Volver</a></li>
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>

     <div class="jumbotron">
      <div class="container">
        <h3>Modificar</h3>
        <p> Realice los cambios que se requieran.</p>
        </div>
    </div>	


					<?php 
					
					$id=$_POST['id'];


					$conexion = mysql_connect("localhost","root","");
					mysql_select_db("login", $conexion); 
					
				    	if (empty($_POST["id"])) {

				    		echo"<script type=\"text/javascript\">alert('Ingrese una ID '); window.location='modificar.php';</script>";
					}else{


					
					
					$sql=mysql_query("select * from inventario where id = '$id'");

					while($array=mysql_fetch_array($sql)){
					
					$tipo=$array['tipo']; 
					 $marca=$array['marca']; 
					 $modelo=$array['modelo'];
					 $serial=$array['serial'];
					 $valor=$array['valor'];
					 $orden=$array['orden'];
					 $caracteristicas=$array['caracteristicas'];
					 $estado=$array['estado'];
					 $ubicacion=$array['ubicacion'];
					 $responsable=$array['responsable'];
					 
					 
					 if(mysql_num_rows($sql)>0) { 
				?>
				
					<table align="center">
					
	 <form class="form-horizontal"  role="form" action="edit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">

 	 <tr>
	 <td>Tipo Producto</td>
	 <td>
	 <input  type='name' name='tipo'  required="required"value=<?php echo $tipo ?>>
	 </td >
	 </tr>
	 <tr>
	 <td>Marca</td>
	 <td>
	 <input type='name' name='marca' required="required"value=<?php echo $marca ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Modelo</td>
	 <td>
	 <input type='name' name='modelo'required="required" value=<?php echo $modelo ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Serial</td>
	 <td>
	 <input type='name' name='serial' required="required"value=<?php echo $serial ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Valor</td>
	 <td>
	 <input type='name' name='valor'required="required" value=<?php echo $valor ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Orden Compra</td>
	 <td>
     <input type='name' name='orden'required="required" value=<?php echo $orden ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Caracteristicas</td>
	 <td>
	 	<textarea cols='18' type='text' rows='5'name='caracteristicas'><?php echo $caracteristicas ?></textarea>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Estado</td>
	 <td>
	 <input type='name' name='estado' value=<?php echo $estado ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Ubicacion</td>
	 <td>
	 <input type='name' name='ubicacion' value=<?php echo $ubicacion ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Responsble</td>
	 <td>
	 <input type='name' name='responsable' value=<?php echo $responsable ?>>
	 </td >
	 </tr>	
				
				<?php
				}
				}
		}
				
	?>

    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
	<input id="send" type ="submit" name ="submit" value="Modificar" />
	 </div>
  </div>
	</form>
	</table>

</body>
</html>