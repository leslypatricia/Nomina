<?php
$con=consulta($_GET['CN']);
function consulta($CN){
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

		$sentencia="SELECT nd.Cod_NominaD,e.Cod_empleados,
		nd.Total_Deducciones FROM nominadeducciones as nd
		JOIN empleados as e on nd.Cod_Empleados=e.Cod_empleados
		 where nd.Cod_NominaD='".$CN."'";
	/*	$sentencia="SELECT Primer_Nombre,Segundo_Apellido,Telefono,
        Fecha_ingreso,Sueldo_base,Cod_FormaPago,Cod_Depto
        FROM empleados WHERE Cod_empleados='".$cod."' " ;*/

$res=$conexion->query($sentencia)or die ("error al consultar ".mysqli_error($conexion));
$mostrar=$res->fetch_assoc();
		return[	
			$mostrar['Cod_NominaD'],
			$mostrar['Cod_empleados'],
			$mostrar['Total_Deducciones']
		];
	}

/*}*/
?>
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
	color:white;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	/*background:#00ced1;*/ /*color azul*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Times New Roma";
	font-size:18px;
	
	}
.btn-btn-primary {
		width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;
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
		label{
			color: whitesmoke;
		}
</style>
</head>

<body>
<?php
//---------------------------------------------Código para limpiar -------------------------------------------------------------//
	$nomina="";
	$dedu="";
	$emlea="";
	$to="";

?>
<?php

//------Código para el botón Limpiar------//
if (isset($_POST["limpiar"])){	
$nomina="";
$dedu="";
$emlea="";
$to="";
}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:NominaDeduccion/NominaDeduccion1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Formulario ND</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<tr><td><label>Codigo Nominas:</label></td>
<td><input type="text" name="CN" value="<?php echo $con[0]; echo $nomina ?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Codigo empleado:</label></td>
<td><input type="text" name="CEE" value="<?php echo $con[1]; echo $emlea?>" size="15" maxlength="15" /></td></tr>

<tr><td><label>Total Deducciones:</label></td>
<td><input type="text" name="IHSS" value="<?php echo $con[2]; echo $to?>" size="15" maxlength="15" /></td></tr>

</table>

<button name="Regresar"><i class="fas fa-reply"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button type="submit" name="guardar" value="guardar"><i class="fas fa-save"></i></button>
</div>
</form>
</body>

</html>