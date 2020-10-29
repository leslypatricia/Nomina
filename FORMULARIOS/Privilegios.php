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
$CPR="";
$Descripcion="";

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CP=$_POST['CP'];
$D=$_POST['D'];



$consulta="insert into privilegios(Cod_privilegios,Descripcion)
 VALUES('$CP','$D')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Privilegios.php';
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
$CP=$_POST["CP"];

$registros=mysqli_query($conexion,"delete FROM privilegios WHERE Cod_privilegios='$CP'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Privilegios.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='Privilegios.php';
	  </script>";
}
$CPR="";
$Descripcion="";
}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CP=$_POST["CP"];

$registros=mysqli_query($conexion,"SELECT * FROM  privilegios WHERE Cod_privilegios='$CP'");


while ($registro= mysqli_fetch_array($registros)){


$CPR=$registro['Cod_privilegios'];
$Descripcion=$registro['Descripcion'];




mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>

<?php
if (isset($_POST["limpiar"])){
$CPR="";
$Descripcion="";



}

?>
<?php

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

if (isset($_POST["buscar"])){
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre)
or die ("erro en la conexion");

mysqli_set_charset($conexion,"utf8");

$CP=$_POST['CP'];
$D=$_POST['D'];


$registro=mysqli_query($conexion,"update privilegios set Descripcion='$D'
where Cod_privilegios='$CP'")
or die ("error al actualizar");


if ($registro){

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='privilegios.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='privilegios.php';
	  </script>";
}
}
mysqli_close($conexion);


?>



<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Privilegio</h1>
<div class="form-group">
<label>Codigo Privilegios:</label>
<input type="text" name="CP" value="<?php echo $CPR?>" size="5" maxlength="5" />
<br/><br/>
<label>Descripcion</label>
<input type="text" name="D" value="<?php echo $Descripcion?>" size="25" maxlength="25" />


<br/><br/>
<center>
<a href="LOG/Menu_Admin.php" class="btn btn-default">Regresar</a>
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