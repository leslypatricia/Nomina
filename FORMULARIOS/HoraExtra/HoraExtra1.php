<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
/*-----------------------------------código_css-------------------------------------------------------------------------------*/
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
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
	width:1350px;
	background:#00ced1;
	padding:50px;
	border-radius:6px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	
	}

.button{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.form-group1 {	width:750px;
	background:#00ced1;
	padding:10px;
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

$conexion=mysqli_connect('localhost','root','','nominas')
?>

<input type="hidden" id="CE" value="<?php echo $codigo;?>">


<?php
if (isset($_POST["Regresar"])){
header("location:../estructura.php");
}
?>
<?php
if (isset($_POST["Insertar"])){
header("location:HoraExtra.php");
}
?>
<form class="from"  id="form1" action= "" method="POST" >
	<center>
<div class="form-group">
	<center>
	<h1>Tabla Hora Extra</h1>

	<button name="Insertar"><i class="fas fa-plus"></i></button>
	<div class="form">
		<label for="caja">Buscar</label>
		<input type="text" name="caja" id="caja"></input>
	</div>
	
	</center><br/><br/>
<table border="1">
    <tr>
       <td>Cod_HE</td> 
       <td>Cod_Jornada</td>
	   <td>Cod_Empleado</td>
	   <td>Sueldo_Ordinario</td>
	   <td>Sueldo_Diario</td>
	   <td>Sueldo_Hora</td>
	   <td>Porce_HE</td>
	   <td>Pago_Hora</td>
	   <td>Numero_Horas</td>
       <td>Total_HE</td>
       <td>Fecha</td>
	</tr>
	
	<?php
$sql="SELECT ex.Cod_HExtra,j.Cod_Jornada,ep.Cod_empleados
,ex.Sueldo_Ordinario,ex.Sueldo_Diario,ex.Sueldo_Hora,
ex.Porce_Hora_Extra,ex.Pago_Hora,ex.Numero_Horas,ex.Total_HE,ex.fecha from horaextra as ex 
JOIN jornada as j on ex.Cod_Jornada=j.Cod_Jornada
JOIN empleados as ep on ex.Cod_empleados=ep.Cod_empleados " ;

	$res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
		echo'
		<tr>
		<td>'.$mostrar['Cod_HExtra'].'</td>
		<td>'.$mostrar['Cod_Jornada'].'</td>
		<td>'.$mostrar['Cod_empleados'].'</td>
		<td>'.$mostrar['Sueldo_Ordinario'].'</td>
		<td>'.$mostrar['Sueldo_Diario'].'</td>
		<td>'.$mostrar['Sueldo_Hora'].'</td>
		<td>'.$mostrar['Porce_Hora_Extra'].'</td>
		<td>'.$mostrar['Pago_Hora'].'</td>
		<td>'.$mostrar['Numero_Horas'].'</td>
		<td>'.$mostrar['Total_HE'].'</td>
		<td>'.$mostrar['fecha'].'</td>
		<td><button name="Eliminar" class=""><i class="far fa-trash-alt"></i></button></td>
		<td><button name="Actualizar"><i class="fas fa-edit"></i></button></td>
		</tr>
		
';
	?>

<?php
}
?>
   </table>
</div>
	</center>
	<button name="Regresar"><i class="fas fa-reply"></i></button>
</form>

    </body>
    </html>
