<?php
$con=consulta($_GET['CA']);
function consulta($CA){
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

		$sentencia="SELECT * /*Cod_Aumento,Porcentaje_aumento,Año,Descripcion,aplicado */
		FROM aumento WHERE Cod_Aumento='".$CA."' " ;

$res=$conexion->query($sentencia)or die ("error al consultar ".mysqli_error($conexion));
$mostrar=$res->fetch_assoc();
		return[	
		    $mostrar['Cod_Aumento'],
			$mostrar['Porcentaje_aumento'],	
			$mostrar['Año'],	
			$mostrar['Descripcion'],	
			$mostrar['aplicado']

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
</style>
</head>

<body>
<?php
//---------------------------------------------Código para limpiar -------------------------------------------------------------//

$codigo="";
$porcentaje="";
$año="";
$Descripcion="";
$Aplicado="";


?>
<?php

//------Código para el botón Limpiar------//
if (isset($_POST["limpiar"])){	
	$codigo="";
	$porcentaje="";
	$año="";
	$Descripcion="";
	$Aplicado="";

}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:Aumento/Aumento1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Formulario Aumento</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Codigo Aumento:</label></td>
<td><input type="text" name="CA" size="5" maxlength="5"  value="<?php echo $con[0]; echo $codigo;?>"></td></tr>

<tr><td><label>Porcentage Aumento:</label></td>
<td><input type="text" name="PA" size="15" maxlength="15" value="<?php echo $con[1]; echo $porcentaje;?>"></td></tr>

<tr><td><label>Año:</label></td>
<td><input type="date" name="ANNO" size="20" maxlength="20" value="<?php echo $con[2]; echo $año;?>"></td></tr>

<tr><td><label>Descripcion:</label></td>
<td><input type="text" name="D"  size="20" maxlength="20" value="<?php echo $con[3]; echo $Descripcion;?>"></td></tr>

<tr><td><label>Aplicado:</label></td>
<td><input type="text" name="A" size="20" maxlength="30" value="<?php echo $con[4]; echo $Aplicado;?>"></td></tr>
<br/>
<br/>
</table>
<br/>
<button name="Regresar"><i class="fas fa-reply"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button type="submit" name="guardar" value="guardar"><i class="fas fa-save"></i></button>
</div>
</form>
</body>
</html>