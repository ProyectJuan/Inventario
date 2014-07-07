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
          <a class="navbar-brand" href="#">Inventario - Editar Perfil</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="menu.php">Menu</a></li>
            <li><a href="modificaruser.php">Volver</a></li>
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div>
      </div>
    </div>

     <div class="jumbotron">
      <div class="container">
        <h3>Modificar Perfil</h3>
        <p> Realice los cambios que se requieran.</p>
        </div>
    </div>	


					<?php 
					
					$id=$_POST['id'];

					$conexion = mysql_connect("localhost","root","");
					mysql_select_db("login", $conexion); 
					if (empty($_POST["id"])) {

				    		echo"<script type=\"text/javascript\">alert('Ingrese una ID '); window.location='modificaruser.php';</script>";
					}else{

				
					
					$sql=mysql_query("select * from usuarios where id = '$id'");

					while($array=mysql_fetch_array($sql)){
					
					$usuario=$array['usuario']; 
					 $apellido=$array['apellido']; 
					 $password=$array['password'];
					 $descripcion=$array['descripcion'];
					 $tipouser=$array['tipouser'];
					 $email=$array['email'];
					
					 
					 
					 if(mysql_num_rows($sql)>0) { 
				?>
				
					<table align="center">
					
	 <form class="form-horizontal"  role="form" action="edituser.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">

 	 <tr>
	 <td>Nombre</td>
	 <td>
	 <input  type='name' name='usuario' value=<?php echo $usuario ?>>
	 </td >
	 </tr>
	 <tr>
	 <td>Apellido</td>
	 <td>
	 <input type='name' name='apellido' value=<?php echo $apellido ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Contraseña</td>
	 <td>
	 <input type='password' name='password' value=<?php echo $password ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Cargo</td>
	 <td>
	 <input type='name' name='descripcion' value=<?php echo $descripcion ?>>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Nivel de Privilegios</td>
	 <td>
	 <select  name="tipouser" value=<?php echo $tipouser ?>>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                   </select>
	 </td >
	 </tr>
	
	    <tr>
	 <td>Email</td>
	 <td>
	 	<input type='name' name='email' value=<?php echo $email ?>>
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