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
$tipo="";
$horas="";
$sueldo="";
$SHo="";
$Porcentaje="";
$emple="";
?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CJ=$_POST['CJ'];
$TJ=$_POST['TJ'];
$NH=$_POST['NH'];
$SB=$_POST['SB'];
$SH=$_POST['SH'];
$PHE=$_POST['PHE'];
$CE=$_POST['CE'];


$consulta="insert into jornada(Cod_Jornada,Tipo_Jornada,Numero_horas,Sueldo_Base,Sueldo_Hora,Porce_Hora_Extra,Cod_empleados)
 VALUES('$CJ','$TJ','$NH','$SB','$SH','$PHE','$CE')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Jornada.php';
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
$CJ=$_POST["CJ"];

$registros=mysqli_query($conexion,"DELETE FROM  jornada WHERE Cod_Jornada='$CJ'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Jornada.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='Jornada.php';
	  </script>";
}
$codigo="";
$tipo="";
$horas="";
$sueldo="";
$SHo="";
$Porcentaje="";
$emple="";


}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CJ=$_POST["CJ"];

$registros=mysqli_query($conexion,"SELECT * FROM  jornada WHERE Cod_Jornada='$CJ'");


while ($registro= mysqli_fetch_array($registros)){


$codigo=$registro['Cod_Jornada'];
$tipo=$registro['Tipo_Jornada'];
$horas=$registro['Numero_horas'];
$sueldo=$registro['Sueldo_Base'];
$SHo=$registro['Sueldo_Hora'];
$Porcentaje=$registro['Porce_Hora_Extra'];
$emple=$registro['Cod_empleados'];

mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
	$codigo="";
	$tipo="";
	$horas="";
	$sueldo="";
	$SHo="";
	$Porcentaje="";
	$emple="";


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
$CJ=$_POST['CJ'];
$TJ=$_POST['TJ'];
$NH=$_POST['NH'];
$SB=$_POST['SB'];
$SH=$_POST['SH'];
$PHE=$_POST['PHE'];
$CE=$_POST['CE'];


$registro=mysqli_query($conexion,"UPDATE jornada set Tipo_Jornada='$TJ',Numero_horas='$NH', 
Sueldo_Base='$SB',Sueldo_Hora='$SH',Porce_Hora_Extra='$PHE',Cod_empleados='$CE'
where Cod_Jornada='$CJ'")
or die ("error al actualizar");

if ($registro){

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='Jornada.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='Jornada.php';
	  </script>";
}
}
mysqli_close($conexion);


?>



<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Jornada</h1>
<div class="form-group">
<label>Codigo Jornada:</label>
<input type="text" name="CJ" value="<?php echo $codigo ?>" size="5" maxlength="5" />
<left>
<label>Tipo Jornada:</label>
<input type="text" name="TJ" value="<?php echo $tipo?>" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Numero Horas:</label>
<input type="text" name="NH" value="<?php echo $horas ?>" size="20" maxlength="20"/>

<label>Sueldo Base:</label>
<input type="text" name="SB" value="<?php echo $sueldo ?>" size="20" maxlength="20" />
<br/>
<br/>
<label>Sueldo Hora:</label>
<input type="text" name="SH" value="<?php echo $SHo ?>" size="20" maxlength="30" />
<label>Porcentaje por Hora Extra:</label>
<input type="text" name="PHE" value="<?php echo $Porcentaje ?>" size="20" maxlength="30" />
<br/>
<br/>
<label>Codigo Empleados:</label>
<input type="text" name="CE" value="<?php echo $emple ?>" size="20" maxlength="30" />
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