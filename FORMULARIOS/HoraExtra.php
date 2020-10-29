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
$codigo="";
$jornada="";
$extra="";
$empleado="";
$tipo="";
$fecha="";

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$HE=$_POST['HE'];
$CJ=$_POST['CJ'];
$NHE=$_POST['NHE'];
$CE=$_POST['CE'];
$THE=$_POST['CTHE'];
$F=$_POST['F'];

$consulta="insert into horaextra(Cod_HExtra,Cod_Jornada,Numero_horaextra,Cod_empleados,Cod_Tipo_HE,fecha)
 VALUES('$HE','$CJ','$NHE','$CE','$CTHE','$F')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='HoraExtra.php';
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
$HE=$_POST["HE"];

$registros=mysqli_query($conexion,"DELETE FROM  horaextra WHERE Cod_HExtra='$HE'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='HoraExtra.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='HoraExtra.php';
	  </script>";
}
$codigo="";
$jornada="";
$extra="";
$empleado="";
$tipo="";
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

$HE=$_POST["HE"];

$registros=mysqli_query($conexion,"SELECT * FROM  horaextra WHERE Cod_HExtra='$HE'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_HExtra'];
$jornada=$registro['Cod_Jornada'];
$extra=$registro['Numero_horaextra'];
$empleado=$registro['Cod_empleados'];
$tipo=$registro['Cod_Tipo_HE'];
$fecha=$registro['fecha'];


mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
	$codigo="";
	$jornada="";
	$extra="";
	$empleado="";
	$tipo="";
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
$HE=$_POST['HE'];
$CJ=$_POST['CJ'];
$NHE=$_POST['NHE'];
$CE=$_POST['CE'];
$THE=$_POST['CTHE'];
$F=$_POST['F'];


$registro=mysqli_query($conexion,"update horaextra set Cod_Jornada='$CJ', 
Numero_horaextra='$NHE',Cod_empleados='$CE',Cod_Tipo_HE='$CTHE',fecha='$F'
where Cod_HExtra='$HE'")
or die ("error al actualizar");

if ($registro){

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='HoraExtra.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='HoraExtra.php';
	  </script>";
}
}
mysqli_close($conexion);


?>



<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Hora Extra</h1>
<div class="form-group">
<label>Codigo Hora Extra:</label>
<input type="text" name="HE" value="<?php echo $codigo?>" size="5" maxlength="5" />
<left>
<label>Codigo Jornada:</label>
<input type="text" name="CJ" value="<?php echo $jornada?>" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Numero de Hora Extra:</label>
<input type="text" name="NHE" value="<?php echo $extra?>" size="20" maxlength="20"/>
<br/><br/>

<label>Codigo Empleado:</label>
<input type="text" name="CE" value="<?php echo $empleado?>" size="20" maxlength="20"/>

<label>Codigo de Tipo de Hora Extra:</label>
<input type="text" name="CTHE" value="<?php echo $tipo?>" size="20" maxlength="20" />
<br/>
<br/>
<label>Fecha:</label>
<input type="date" name="F" value="<?php echo $fecha?>" size="20" maxlength="30" />
<br/>
<br/>
<br/>
<br/>
<center>
<a href="LOG/Menu_Admin.php" class="btn btn-default">Regresar</a>


<span class="icon-floppy-disk"></span>
<input type="submit" name="crs" value="Guardar" class="btn-btn-success" / >

<span class="icon-floppy-disk"></span>
<input type="submit" name="Actualizar" value="Actualizar" class="btn-btn-success" />

<span class="icon-floppy-disk"></span>
<input type="submit" name="Eliminar" value="Eliminar" class="btn-btn-success" />

<span class="icon-floppy-disk"></span>
<input type="submit" name="limpiar" value="Limpiar" class="btn-btn-success" / >
<br/><br/></center>
<span class="icon-search">
<input type="submit" name="buscar" value="Buscar" class="btn-btn-primary"></span>

</div>
</center>
</form>
</body>
</html>