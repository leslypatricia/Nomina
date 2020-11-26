<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../../codigo.js"></script>
<script>
//Validaciones con Javascrip
	function SoloNumeros(evt){
if(window.event){

	keynum= evt.keyCode;
}else{
	keynum=evt.which;
}

if(keynum > 47 && keynum<58 || keynum==8 || keynum==13){
	return true;
}else{
	return false;
}

	}
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
.from{
padding:110px;
/*background:black;*/

	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Times New Roman";
	color:White;
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
</style>


</head>
<body>
<?php
$Porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";
$CH="0";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT Cod_Aumento  FROM  Aumento");
while ($registro= mysqli_fetch_array($registros)){
$CH=$registro['Cod_Aumento'];

}
$codigo=$CH + 1;

?>

<?php
include("../conexion.php");
if (isset($_POST["crs"])){
$CA=$_POST['CA'];
$PA=$_POST['PA'];
$ANNO=$_POST['ANNO'];
$D=$_POST['D'];
$A=$_POST['A'];
if($ANNO == $fcha){
	echo "<script>
     
	alert ('La fecha debe ser igual a la del Sistema!!!');
 window.location='Aumento.php';
 </script>";

}elseif($PA=="" Or $ANNO=="" Or $D=="" Or $A==""){
echo "<script>
alert ('Debe llenar todos los campos!!!');
window.location='Aumento.php'
</script>";
}else{
$consulta="INSERT INTO aumento (Cod_Aumento,Porcentaje_aumento,Año,Descripcion,aplicado)
 VALUES($CA,'$PA','$ANNO','$D','$A')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Aumento1.php';
	  </script>";
} else {
	echo "<script>
     
	alert ('Registro NO Ingresado Correctamente!!!');
 window.location='Aumento1.php';
 </script>";
	/*
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
}
 mysqli_close($conexion);

}
}
?>

<?php
include("../conexion.php");
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
if (isset($_POST["Regresar"])){
header("location:Aumento1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action="" method="POST">
<center>
<h1>Nuevo Aumento</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Código Aumento:</label></td>
<td><input type="text" name="CA" size="5" maxlength="5" value="<?php echo $codigo?>"></td></tr>

<tr><td><label>Porcentaje Aumento:</label></td>
<td><input type="text" name="PA" size="15" maxlength="15" value="<?php echo $Porcentaje?>"onKeyPress=" return SoloNumeros (event)" onpaste="return false"></td></tr>

<tr><td><label>Año:</label></td>
<td><input type="date" id="date" name="ANNO" size="20" maxlength="20" value="<?php echo $año?>"></td></tr>

<tr><td><label>Descripción:</label></td>
<td><input type="text" name="D" size="20" maxlength="20"  value="<?php echo $Descripcion?>"></td></tr>

<tr><td><label>Autorizado por:</label></td>
<td><input type="text" name="A" size="20" maxlength="30" value="<?php echo $Aplicado?>"></td></tr>
<br/>
<br/>
</table>
<br/>
<br/>
<center>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="buscar"><i class="fas fa-search"></i></button>
<br/><br/></center>

</div>
</form>

</body>
</html>