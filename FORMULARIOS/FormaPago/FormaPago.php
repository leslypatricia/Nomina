<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>

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
	/*font-family:"Arial Black", Gadget, sans-serif;*/
	font-family:"Times New Roman";
	font-size:18px;
	
	}

	body{
    margin:0;
    padding:0;
	box-sizing:border-box;
   /* background:black;*/
    height:100%;
	width:100%;
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

</style>
</head>

<body>
	
<?php
$codigo="0";
$Descripcion="";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  formapago");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_FormaPago'];

}
$codigo=$codigos + 1;
?>

<?php
include("../conexion.php");

if (isset($_POST["crs"])){
$FP=$_POST['FP'];
$D=$_POST['D'];

$consulta="insert into formapago(Cod_FormaPago,Descripcion)
 VALUES('$FP','$D')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='FormaPago1.php';
	  </script>";
} else {
	echo "<script>   
	alert ('Registro NO Ingresado Correctamente!!!');
     window.location='FormaPago.php';
 </script>";
     /* echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
}
 mysqli_close($conexion);

}

?>

<?php
include("../conexion.php");
if (isset($_POST["buscar"])){

$FP=$_POST["FP"];

$registros=mysqli_query($conexion,"SELECT * FROM  formapago WHERE Cod_FormaPago='$FP'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_FormaPago'];
$Descripcion=$registro['Descripcion'];


mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
$codigo="0";
$Descripcion="";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  formapago");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_FormaPago'];

}
$codigo=$codigos + 1;


}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:FormaPago1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Nueva Forma de Pago</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<tr><td><label>Código Forma de Pago:</label></td>
<td><input type="text" name="FP" value="<?php echo $codigo?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Descripción:</label></td>
<td><input type="text" name="D" value="<?php echo $Descripcion?>" size="15" maxlength="15" /></td></tr>
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