<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<style>
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
padding:110px;
background:black;
	/*  background: -webkit-linear-gradient(right, #000000, #ffffff, #000000, #ffffff);
  background: -o-linear-gradient(right, #ffffff, #000000, #ffffff, #000000);
  background: -moz-linear-gradient(right,#ffffff, #ffffff,#000000, #000000);
  background: linear-gradient(right,  #ffffff, #000000,  #ffffff, #000000);*/
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	background:#00ced1;
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	
	}
.btn-btn-primary {
		width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;
}
.btn-btn-success{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.btn-btn-info{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.btn-btn-danger{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
</style>
</head>

<body>
<?php
$CRO="";
$Descripcion="";

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CR=$_POST['CR'];
$D=$_POST['D'];



$consulta="insert into rol(Cod_rol,Descripcion)
 VALUES('$CR','$D')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='rol.php';
	  </script>";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
 mysqli_close($conexion);

}

?>

<?php

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["Eliminar"])){
$CR=$_POST["CR"];

$registros=mysqli_query($conexion,"delete FROM rol WHERE Cod_rol='$CR'");
if ($registros){ 
	echo"<script>
  alert ('Registro Eliminado Correctamente!!!');
	  window.location='rol.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro NO Eliminado ERROR!!!');
	  window.location='rol.php';
	  </script>";
}




}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CR=$_POST["CR"];

$registros=mysqli_query($conexion,"SELECT * FROM  rol WHERE Cod_rol='$CR'");


while ($registro= mysqli_fetch_array($registros)){


$CRO=$registro['Cod_rol'];
$Descripcion=$registro['Descripcion'];




mysqli_close($conexion);
}
}
 ?>


<?php
if (isset($_POST["limpiar"])){
$CRO="";
$Descripcion="";



}

?>
<?php
//-----------------Código del bontón actualizar-----------

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

if (isset($_POST["Actualizar"])){
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre)
or die ("error en la conexion");

mysqli_set_charset($conexion,"utf8");

$CR=$_POST['CR'];
$D=$_POST['D'];


$registro=mysqli_query($conexion,"update rol set Descripcion='$D'
where Cod_rol='$CR'")
or die ("error al actualizar");


if ($registro){

	echo" <script>
	  alert ('Registro Actualizado Correctamente!!!');
		  window.location='Empleados.php';
		  </script>";
	} else {
	echo "<script>
		 
			 alert ('Registro NO Actualizado ERROR!!!');
		  window.location='Empleados.php';
		  </script>";
	}
	}


?>



<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Rol</h1>
<div class="form-group">
<label>Codigo Rol:</label>
<input type="text" name="CR" value="<?php echo $CRO?>" size="5" maxlength="5" />
<left>
<label>Descripcion:</label>
<input type="text" name="D" value="<?php echo $Descripcion?>" size="15" maxlength="15" />
</left>
<br/><br/>

<center>
<span class="icon-floppy-disk"></span>
<input type="submit" name="crs" value="Guardar" class="btn-btn-success" >
<span class="icon-floppy-disk"></span>
<input type="submit" name="Actualizar" value="Actualizar" class="btn-btn-success" >
<span class="icon-floppy-disk"></span>
<input type="submit" name="Eliminar" value="Eliminar" class="btn-btn-success" >
<span class="icon-floppy-disk"></span>
<input type="submit" name="limpiar" value="Limpiar" class="btn-btn-success" >
<br>
<br>
</CENTER>
<span class="icon-search">
<input type="submit" name="buscar" value="Buscar" class="btn-btn-primary"></span>
<br/>
</div>
</center>
</form>
</body>
</html>