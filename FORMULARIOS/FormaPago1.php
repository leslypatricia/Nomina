<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
//-----------------------------------código_css-------------------------------------------------------------------------------/
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
	/*width:1000px;
		padding:40px;*/
		background:black;
	/*  background: -webkit-linear-gradient(right, #000000, #ffffff, #000000, #ffffff);
  background: -o-linear-gradient(right, #ffffff, #000000, #ffffff, #000000);
  background: -moz-linear-gradient(right,#ffffff, #ffffff,#000000, #000000);
  background: linear-gradient(right,  #ffffff, #000000,  #ffffff, #000000);*/
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
	margin-bottom:16px
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
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
.button{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
		.btn-btn-dangers{
	width:180PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:20px;}
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
<?php
//-----------Código para Eliminar-------------------------------------------------------------------------//

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["Eliminar"])){
$CE=$_POST["CE"];

$registros=mysqli_query($conexion,"SELECT FROM  empleados WHERE Cod_empleados='$CE'");
$row=mysqli_fetch_array($registros);
if ($row){ 
	echo "desea eliminar";
	echo "";echo $row['Cod_empleados'];
	echo "";echo $row['Primer_Nombre'];
	echo "";echo $row['Segundo_Apellido'];
	echo "";echo $row['Telefono'];
	echo "";echo $row['Fecha_ingreso'];
	echo "";echo $row['Sueldo_base'];
	echo "";echo $row['Cod_FormPago'];
	echo "";echo $row['Cod_Depto'];
	echo "?";
	/*echo "";echo"<script>
 alert ('Registro Eliminado Correctamente!!!');
	  window.location='Empleados1.php';
	  </script>";*/
} else {
/*echo "<script>
     
	     alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Empleados1.php';
	  </script>";*/
}

}
?>
<input type="hidden" id="CE" value="<?php echo $codigo;?>">

<?php
//-----------------Código del bontón actualizar-----------//

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

if (isset($_POST["Actualizar"])){
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre)
or die ("error en la conexion");

mysqli_set_charset($conexion,"utf8");

$CE=$_POST['CE'];
$id=$_POST['id'];
$PN=$_POST['PN'];
$SN=$_POST['SN'];
$PA=$_POST['PA'];
$SA=$_POST['SA'];
$FN=$_POST['FN'];
$CORRE=$_POST['correo'];
$DIR=$_POST['Dire'];
$TELE=$_POST['tele'];
$S=$_POST['sexo'];
$CB=$_POST['CB'];
$FI=$_POST['FI'];
$NAC=$_POST['Nac'];
$FD=$_POST['FD'];
$SB=$_POST['SB'];
$FP=$_POST['FP'];
$CD=$_POST['CD'];


$registro=mysqli_query($conexion,"update empleados set Identidad='$id', Primer_Nombre='$PN' ,Segundo_Nombre='$SN',Primer_Apellido='$PA',Segundo_Apellido='$SA',
Fecha_nacimiento='$FN',Correo='$CORRE',Direccion='$DIR',Telefono='$TELE',Sexo='$S',Cuenta_Bancaria='$CB',Fecha_ingreso='$FI',
Nacionalidad='$NAC',Fecha_Deduccion='$FD',Sueldo_base='$SB',Cod_FormaPago='$FP',Cod_Depto='$CD'    
where Cod_empleados='$CE'")
or die ("error al actualizar");


if ($registro){

echo" <script>
  alert ('Registro Actualizado Correctamente!!!');
	  window.location='Empleados.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro NO Actualizado ERROR!!!');
	  window.location='Empleados.php';
	  </script>";
}
}
?>
<?php
if (isset($_POST["Regresar"])){
header("location:estructura.php");
}
?>
<?php
if (isset($_POST["Insertar"])){
header("location:FormaPago.php");
}
?>
<form class="from"  id="form1" action= "" method="POST" >
<button name="Regresar"><i class="fas fa-reply"></i></button>
	<center>
<div class="form-group">
	<center>
	<h1>Tabla Forma Pago</h1>

	<button name="Insertar"><i class="fas fa-plus"></i></button>
	<div class="form">
		<label for="caja">Buscar</label>
		<input type="text" name="caja" id="caja"></input>
	</div>
	
	</center><br/><br/>
<table border="1">
    <tr>
       <td>Codigo_FormaPago</td> 
       <td>Descripcion</td>
	</tr>
	
	<?php
$sql="SELECT * from formapago" ;

/*if(isset($_POST['consulta'])){
	$q=$mysqli->real_escape_string($_POST['consulta']);
	$sql= "SELECT ep.Cod_empleados,ep.Primer_Nombre,ep.Segundo_Apellido,ep.Telefono,
	ep.Fecha_ingreso,ep.Sueldo_base,fp.Cod_FormaPago,dep.Cod_Depto from empleados   ";
}*/

	$res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
		echo'
		<tr>
		<td>'.$mostrar['Cod_FormaPago'].'</td>
		<td>'.$mostrar['Descripcion'].'</td>
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
</form>

    </body>
    </html>
