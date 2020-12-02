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
	background-image: url("../../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
	
}
.from{
padding:110px;
/*background:black;*/
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Times New Roman";
	color:white;
/*	box-shadow:7px 13px 37px #000;*/
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
.fa-calculator{
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
.fa-calcular{
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
if(!isset($_POST["crs"])){
$CE=$_GET["CE"];
}

$Bonos="";
$Comisiones="";
$CH="0";
include("../../conexion.php");
$registros=mysqli_query($conexion,"SELECT Cod_NominaPC  FROM  nominaspagoscomplementarios");
while ($registro= mysqli_fetch_array($registros)){
$CH=$registro['Cod_NominaPC'];

}
$CD=$CH + 1;
$TOTALPC="";

?>
<?php


if (isset($_POST["calcular"])){

//if(
include("../../conexion.php");
$CE=$_POST["CEE"];
$B=$_POST["1"];
$C=$_POST["2"];
$sueldo="0";
$TOTALPC="0";
$registros=mysqli_query($conexion,"SELECT Sueldo_base  FROM  empleados WHERE Cod_empleados='$CE'");

while ($registro= mysqli_fetch_array($registros)){
$sueldo=$registro['Sueldo_base'];

}
//$CHE=$_POST["CHE"];
if(isset($_POST["1"])){
$Bono=1000;

}
if(isset($_POST["2"])){

$Comision=$sueldo * 0.10;

}
$TOTALPC=$Bono + $Comision;
}

 ?>
 <?php


if (isset($_POST["crs"])){
include("../../conexion.php");
$CN=$_POST["CHE"];
$CE=$_POST["CEE"];
$TOTALP=$_POST["TOTALPC"];
$DE=1;
$consulta="insert into nominaspagoscomplementarios (Cod_NominaPC,Cod_Empleados,Cod_PagoC,Total_PagosC)
 VALUES('$CN','$CE','$DE','$TOTALP')";
 $registros=mysqli_query($conexion,"SELECT Total_Devengado,Total_Deducciones,Total_Aumento  FROM  nominageneral WHERE Cod_Empleados='$CE'");

while ($registro= mysqli_fetch_array($registros)){
$totald=$registro['Total_Devengado'];
$totaldeduc=$registro['Total_Deducciones'];
$totalA=$registro['Total_Aumento'];
}

$totalpagar=$totald - $totaldeduc + $TOTALP + $totalA;

 if (mysqli_query($conexion, $consulta)) {
 	$registro=mysqli_query($conexion,"update nominageneral set Total_PagosComplementarios='$TOTALP',SUELDO_NETO_Pagar='$totalpagar' 
where Cod_empleados='$CE'")
or die ("error al actualizar");
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
		 		 window.location='../NominaAumento/NominaAumento.php?CE=$CE';

	  </script>";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
 mysqli_close($conexion);

}

?>

<?php
if (isset($_POST["Regresar"])){
header("location:NominaPagComplementarios1.php");
}
?>
<?php
if(!isset($_POST["crs"])){
$CO=$_GET["CE"];
}
if (isset($_POST["Siguiente"])){
header("location:../NominaAumento/NominaAumento.php?CE=$CO");
}
?>

<form class="from"  id="form1" action= "" method="POST" >
<center>
<h1>Nómina Pagos Complementarios</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" >


	<tr><td><label>Código<br/></label> </td>
	<td><input type="text" class="form" name="CHE" value="<?php echo $CD ?>"size="20" maxlength="20" readonly="readonly" /><br/></td></tr>
	
	
	</td></tr>
	<tr><td>Código Empleado<br/> </td>
	<td><input type="text" class="form"  name="CEE"  value="<?php echo $CE ?>" size="20" maxlength="20" /><br/>
 </td></tr>


  <tr><td><label>Pagos Complementarios</label></td>
<td>
<?php
include("../../conexion.php");
$registros=mysqli_query($conexion,"SELECT *  FROM  PagoComplementario");
?>
<?php 

 while ($valores = $registros->fetch_assoc()) {

    
      echo '<input  type="checkbox"  name="'.$valores["Cod_PagoC"].'">'.$valores["Descripcion"].'';


  
   } 
  ?>
  <br/></td></tr>
	<tr><td><label>Total Pagos Complementarios<br/></label> </td>
	<td><input type="text" class="form" name="TOTALPC" value="<?php echo $TOTALPC?>"size="20" maxlength="20" readonly="readonly"/><br/></td></tr>
  	
</table>
<br>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="calcular"><i class="fas fa-calculator"></i></button>
<button name="Siguiente"><i class="fas fa-share-square"></i></button>
<br>



<br/>
</div>
</form>
</body>
</html>