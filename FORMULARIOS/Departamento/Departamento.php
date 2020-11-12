<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
body {
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

.fa-edit{
color:green;


}
.from{
padding:110px;
/*background:black;*/ /*color negro de fondo 
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
	/*box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	/*background:#00ced1;*/ /*es del color azul*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Time New Roman";
	font-size:18px;
	color:white;
	
	}
	/*color-tabla ; para la letra*/
	/*.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	/*font-family:Times New Roman ;   }*/




</style>
</head>


<body>
<?php
$codigo="0";
$Descripcion="";
$jefe="";

include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  departamento");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_Depto'];

}
$codigo=$codigos + 1;

?>

<?php
include("../conexion.php");
if (isset($_POST["crs"])){
$CD=$_POST['CD'];
$D=$_POST['D'];
$CF=$_POST['CJ'];

$consulta="insert into departamento(Cod_Depto,Descripcion,Cod_Jefe)
 VALUES($CD,'$D','$CF')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Departamento1.php';
	  </script>";
} else {
	echo "<script>   
	alert ('Registro NO Ingresado Correctamente!!!');
 window.location='Departamento.php';
 </script>";
    /*  echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
}
 mysqli_close($conexion);

}

?>

<?php
include("../conexion.php");
if (isset($_POST["buscar"])){

$CD=$_POST["CD"];

$registros=mysqli_query($conexion,"SELECT * FROM  departamento WHERE Cod_Depto='$CD'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Depto'];
$Descripcion=$registro['Descripcion'];
$Porcentaje=$registro['Cod_Jefe'];

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
$jefe="";

include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  departamento");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_Depto'];

}
$codigo=$codigos + 1;

}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:Departamento1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Departamento</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<center>
<tr><td><label>Código Departamentos:</label></td><td><input type="text"   aling="center"  name="CD" value="<?php echo $codigo?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Descripción:</label></td><td><input type="text" name="D" value="<?php echo $Descripcion?>" size="15" maxlength="15" /></td></tr>

<tr><td><label>Código Jefe:</label></td><td><input type="text" name="CJ" value="<?php echo $jefe?>" size="20" maxlength="20"/></td></tr>
</center>
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