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
$Porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";
?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CA=$_POST['CA'];
$PA=$_POST['PA'];
$ANNO=$_POST['ANNO'];
$D=$_POST['D'];
$A=$_POST['A'];


$consulta="INSERT INTO aumento (Cod_Aumento,Porcentaje_aumento,Año,Descripcion,aplicado)
 VALUES($CA,'$PA','$ANNO','$D','$A')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Aumento.php';
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
$CA=$_POST["CA"];

$registros=mysqli_query($conexion,"delete FROM  aumento WHERE Cod_Aumento='$CA'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Aumento.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='Aumento.php';
	  </script>";
}
$codigo="";
$Porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";


}

?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CA=$_POST["CA"];

$registros=mysqli_query($conexion,"SELECT * FROM  aumento WHERE Cod_Aumento='$CA'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Aumento'];
$Porcentaje=$registro['Porcentaje_aumento'];
$año=$registro['Año'];
$Descripcion=$registro['Descripcion'];
$Aplicado=$registro['aplicado'];

mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
$codigo="";
$Porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";


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
$CA=$_POST['CA'];
$PA=$_POST['PA'];
$ANNO=$_POST['ANNO'];
$D=$_POST['D'];
$A=$_POST['A'];


$registro=mysqli_query($conexion,"update aumento set Porcentaje_aumento='$PA', 
Año='$ANNO' ,Descripcion='$D',aplicado='$A'
where Cod_Aumento='$CA'")
or die ("error al actualizar");

if ($registro){

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='Empleados.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='Empleados.php';
	  </script>";
}
}
mysqli_close($conexion);


?>








<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Aumentol</h1>
<div class="form-group">
<label>Codigo Aumento:</label>
<input type="text" name="CA" value="<?php echo $codigo?>" size="5" maxlength="5" />
<left>
<label>Porcentage Aumento:</label>
<input type="text" name="PA" value="<?php echo $Porcentaje?>" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Año:</label>
<input type="date" name="ANNO" value="<?php echo $ANNO?>" size="20" maxlength="20"/>

<label>Descripcion:</label>
<input type="text" name="D" value="<?php echo $Descripcion?>" size="20" maxlength="20" />
<br/>
<br/>
<label>Aplicado:</label>
<input type="text" name="A" value="<?php echo $Aplicado?>" size="20" maxlength="30" />
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
</form>
</body>
</html>