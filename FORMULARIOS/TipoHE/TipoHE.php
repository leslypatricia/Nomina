<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
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
	color:White;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
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
$sueldo="";



?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (isset($_POST["crs"])){
$CTHE=$_POST['CTHE'];
$D=$_POST['D'];
$SH=$_POST['SH'];


$consulta="insert into tipohoraextra(Cod_Tipo_HE,Descripcion,SueldoHora)
 VALUES('$CTHE','$D','$SH')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='TipoHE1.php';
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

if (isset($_POST["buscar"])){

$CTHE=$_POST["CTHE"];

$registros=mysqli_query($conexion,"SELECT * FROM  tipohoraextra WHERE Cod_Tipo_HE='$CTHE'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Tipo_HE'];
$Descripcion=$registro['Descripcion'];
$sueldo=$registro['SueldoHora'];


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
$sueldo="";


}

?>

<?php
if (isset($_POST["Regresar"])){
header("location:TipoHE1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Tipo de Hora Extra</h1>
<div class="form-group">

<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->


<tr><td><label>Codigo Tipo Hora Extra:</label></td>
<td><input type="text" name="CTHE" value="<?php echo $codigo?>" size="5" maxlength="5" /></td></tr>
<td><label>Descripcion:</label></td>
<td><input type="text" name="D" value="<?php echo $Descripcion?>" size="15" maxlength="15" /></td></tr>

<tr><td><label>Sueldo Hora:</label></td>
<td><input type="text" name="SH" value="<?php echo $sueldo?>" size="20" maxlength="20"/></td></tr>
<br/>
</table>
<center>
<br/><br/>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="BD"><i class="fas fa-database"></i></button>
<button name="buscar"><i class="fas fa-search"></i></button>
<br/><br/></center>

</div>
</center>
</form>
</body>
</html>