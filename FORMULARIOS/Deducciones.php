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
$Descripcion="";
$Porcentaje="";
$valor="";
$fijo="";
?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CD=$_POST['CD'];
$D=$_POST['D'];
$P=$_POST['P'];
$V=$_POST['V'];
$F=$_POST['F'];


$consulta="insert into deducciones(Cod_Deducciones,Descripcion,Porcentaje,Valor,fijo)
 VALUES($CD,'$D','$P','$V','$F')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Deducciones.php';
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
$CD=$_POST["CD"];

$registros=mysqli_query($conexion,"DELETE FROM  deducciones WHERE Cod_Deducciones='$CD'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Deducciones.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='Deducciones.php';
	  </script>";
}
$codigo="";
$Descripcion="";
$Porcentaje="";
$valor="";
$fijo="";


}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CD=$_POST["CD"];

$registros=mysqli_query($conexion,"SELECT * FROM  deducciones WHERE Cod_Deducciones='$CD'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Deducciones'];
$Descripcion=$registro['Descripcion'];
$Porcentaje=$registro['Porcentaje'];
$valor=$registro['Valor'];
$fijo=$registro['fijo'];

mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
$codigo="";
$Descripcion="";
$Porcentaje="";
$valor="";
$fijo="";


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
$CD=$_POST['CD'];
$D=$_POST['D'];
$P=$_POST['P'];
$V=$_POST['V'];
$F=$_POST['F'];


$registro=mysqli_query($conexion,"update deducciones set Descripcion='$D', 
Porcentaje='$P' ,Valor='$V',fijo='$F'
where Cod_Deducciones='$CD'")
or die ("error al actualizar");

if ($registro){

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='Deducciones.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='Deducciones.php';
	  </script>";
}
}
mysqli_close($conexion);


?>



<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Deducciones</h1>
<div class="form-group">
<label>Codigo Deducciones:</label>
<input type="text" name="CD" value="<?php echo $codigo?>" size="5" maxlength="5" />
<left>
<label>Descripcion:</label>
<input type="text" name="D" value="<?php echo $Descripcion?>" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Porcentaje:</label>
<input type="text" name="P" value="<?php echo $Porcentaje?>" size="20" maxlength="20"/>

<label>Valor:</label>
<input type="text" name="V" value="<?php echo $valor?>" size="20" maxlength="20" />
<br/>
<br/>
<label>Fijo:</label>
<input type="text" name="F" value="<?php echo $fijo?>" size="20" maxlength="30" />
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