<!DOCTYPE html >
<html lang="es">
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
$codigo="";
$empleado="";
$aumento="";
$tot="";
$fecha="";

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


if (isset($_POST["crs"])){
	$CN=$_POST['CN'];
	$CE=$_POST['CE'];
	$CA=$_POST['CA'];
	$T=$_POST['T'];
	$FG=$_POST['FG'];



$consulta="insert into nominageneral(Cod_Nomina,Cod_empleados,Cod_Aumento,Total,Fecha_Generada)
 VALUES($CN,'$CE','$CA','$T','$FG')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='NominaGeneral.php';
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
$CN=$_POST["CN"];

$registros=mysqli_query($conexion,"DELETE FROM  nominageneral; WHERE Cod_Nomina='$CN'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='NominaGeneral.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='NominaGeneral.php';
	  </script>";
}
$codigo="";
$empleado="";
$aumento="";
$tot="";
$fecha="";

}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CN=$_POST["CN"];

$registros=mysqli_query($conexion,"SELECT * FROM  nominageneral WHERE Cod_Nomina='$CN'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Nomina'];
$empleado=$registro['Cod_empleados'];
$aumento=$registro['Cod_Aumento'];
$tot=$registro['Total'];
$fecha=$registro['Fecha_Generada'];


mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
	$codigo="";
	$empleado="";
	$aumento="";
	$tot="";
	$fecha="";


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
$CN=$_POST['CN'];
$CE=$_POST['CE'];
$CA=$_POST['CA'];
$T=$_POST['T'];
$FG=$_POST['FG'];


$registro=mysqli_query($conexion,"update nominageneral set Cod_empleados='$CE',Cod_Aumento='$CA',
Total='$T',Fecha_Generada='$FG' 
where CCod_Nomina='$CN'")
or die ("error al actualizar");

if ($registro){

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='NominaGeneral.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='NominaGenerada.php';
	  </script>";
}
}
mysqli_close($conexion);


?>


<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Nomina General</h1>
<div class="form-group">
<label>Codigo Nomina:</label>
<input type="text" name="CN" value="<?php echo $codigo ?>" size="5" maxlength="5" />
<left>
<label>Codigo Empleado:</label>
<input type="text" name="CE" value="<?php echo $empleado ?>" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Codigo Aumento:</label>
<input type="text" name="CA" value="<?php echo $aumento ?>" size="20" maxlength="20"/>
<label>Total:</label>
<input type="text" name="T" value="<?php echo $tot ?>" size="20" maxlength="20"/>
<br/><br/>
<label>Fecha Generada:</label>
<input type="date" name="FG" value="<?php echo $fecha ?>" size="20" maxlength="20"/>
<br/><br/>
<center>
<a href="estructura.php" class="btn btn-default">Regresar</a>

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