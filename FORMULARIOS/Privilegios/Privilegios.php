<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<script>
//Validaciones con Javascrip
function SoloLetras(e){
key=e.keyCode || e.which;
tecla= String.fromCharCode(key).toLowerCase();
letras= " abcdefghijklmnopqrstuvwxyz";

especiales="8-37-38-46-164";
tecla_especial=false;
for(var i in especiales){
if(key==especiales[i]){
tecla_especial= true;break;

}
}

if (letras.indexOf(tecla) == -1  && !tecla_especial){

return false;
}
}

</script>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}
.from{
padding:110px;
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Times New Roman";
	color:white;
	/*box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	/*background:#00ced1;*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Times New Roman";
	font-size:18px;
	
	}
	
/*iconos*/
.fa-search{
color:blue;
background:white;
border:none;
font-weight:bold;

}
.fa-times
{
color:red;
background:white;
border:none;
font-weight:bold;

}
.fa-save
{
color:purple;
background:white;
border:none;
font-weight:bold;

}
.fa-database{
color:green;
background:white;
border:none;
font-weight:bold;

}

.Boton-Regresar
{
	
    color:#346BFB;
	/* */
	

}
</style>
</head>

<body>
<?php
$CPR="";
$Descripcion="";
$CH="0";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT Cod_privilegios  FROM  privilegios");
while ($registro= mysqli_fetch_array($registros)){
$CH=$registro['Cod_privilegios'];

}
$CHE=$CH + 1;
?>


<?php
include("../conexion.php");
if (isset($_POST["crs"])){
$CP=$_POST['CP'];
$D=$_POST['D'];
if($D == ""){
	echo "<script>
     
	alert ('Debe llenar los campos!!!');
 window.location='Privilegios.php';
 </script>";	

}else{
$consulta="insert into privilegios(Cod_privilegios,Descripcion)
 VALUES('$CP','$D')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Privilegios1.php';
	  </script>";
} else {
	echo "<script>
     
	alert ('Registro NO Ingresado Correctamente!!!');
 window.location='Privilegios.php';
 </script>";
   /*   echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
}
 mysqli_close($conexion);

}
}
?>

<?php
include("../conexion.php");
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
if (isset($_POST["Regresar"])){
header("location:Privilegios1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Nuevo Privilegio</h1>
<div class="form-group">

<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Código Privilegio:</label></td>
<td><input type="text" name="CP" value="<?php echo $CHE?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Descripción</label></td>
<td><input type="text" name="D" value="<?php echo $Descripcion?>" size="25" maxlength="25"onKeyPress=" return SoloLetras (event)" onpaste="return false"requered /></td></tr>

<br/>
</table>
<center>
<br/><br/>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<br/><br/></center>
</div>
</center>
</form>
</body>
</html>