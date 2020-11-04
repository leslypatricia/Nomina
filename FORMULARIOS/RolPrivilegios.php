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
}
.from{
padding:110px;
background:black;
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

</style>
</head>

<body>

<?php
if (isset($_POST["Regresar"])){
header("location:estructura.php");
}
?>
<?php
if (isset($_POST["Insertar"])){
header("location:empleados.php");
}
?>
<?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>
<br/>
<form class="from"  id="form1" action="#" method="POST">
<center>
<section>
<div class="form-group">
<h1>Tabla Rol_Privilegio</h1>
	<table border="1" >
		<tr>
<th>Codigo Privilegio:</th>
<th> Rol:</th>
	</tr>
	<button name="Insertar"><i class="fas fa-plus"></i></button>
	<?php
$sql="SELECT cod.Cod_rol,pri.Cod_privilegios,RP.Cod_privilegios from rol as cod 
JOIN rolprivilegios as RP on Cod.Cod_rol=RP.Cod_rol
JOIN privilegios as pri on pri.Cod_privilegios=RP.Cod_privilegios" ;

	$res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
		echo'
		<tr>
		<td>'.$mostrar['Cod_privilegios'].'</td>
		<td>'.$mostrar['Cod_rol'].'</td>
		
		<td><button name="Eliminar" class=""><i class="far fa-trash-alt"></i></button></td>
		
';
	?>

<?php
}
?>
	</table>
</section>
</center>
</div>
<button name="Regresar"><i class="fas fa-reply"></i></button>
</form>
</body>
</html>