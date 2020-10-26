<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<style>
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
	/*width:1000px;
		padding:40px;*/
	background:#0CF;
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:white;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	}
	
.form-group{
	width:750px;
	background:#24303c;
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
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
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
if (isset($_POST["crs"])){
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

$consulta="INSERT into empleados (Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Fecha_nacimiento,Correo,Direccion,Telefono,Sexo,Cuenta_Bancaria,Fecha_ingreso,Nacionalidad,Fecha_Deduccion,Sueldo_base,Cod_FormaPago,Cod_Depto)
 VALUES('$CE','$id','$PN','$SN','$PA','$SA','$FN','$CORRE','$DIR','$TELE','$S','$CB','$FI','$NAC','$FD','$SB','$FP','$CD')";
 if (mysqli_query($conexion, $consulta)) {
      echo "Registro Ingresado Correctamente";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
}
?>


<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Empleado</h1>


<div class="form-group">
<label>Cod_Empleado:</label>
<input type="text" name="CE" value="" size="5" maxlength="5" />
<span class="icon-search">
<br/><br/>

<label>N Identidad:</label>
<input type="text" name="id" value="" size="15" maxlength="15" />
<br/><br/>
<label>Primer Nombre:</label>
<input type="text" name="PN" value="" size="20" maxlength="20"/>
<label>Segundo Nombre:</label>
<input type="text" name="SN" value=""/>
<br/>
<br/>

<label>Primer Apellido:</label>
<input type="text" name="PA" value="" size="20" maxlength="20" />
<label>Segundo  Apellido:</label>
<input type="text" name="SA" value="" size="20" maxlength="30"/>

<br/>
<br/>
<label>Correo:</label>
<input type="text" name="correo" value="" size="20" maxlength="30" />
<label>Direccion:</label>
<input type="text" name="Dire" value="" size="20" maxlength="30" />
<br/>
<br/>

<label>Telefono:</label>
<input type="text" name="tele" value="" size="20" maxlength="30" />

<label>Sexo:</label>
 <input type="radio" name="sexo"value="mujer" id="mujer">F</>
   <input type="radio"  name="sexo" value="hombre" id="hombre">M</>
<br/>
<br/>
<label>Cuenta Bancaria</label>
<input type="text" name="CB" value="" size="20" maxlength="30" />
<label>Nacionalidad:</label>
<input type="text" name="Nac" value="" size="20" maxlength="30"  />
<br/>
<br/>
<label>Sueldo Base:</label>
<input type="text" name="SB" value="" size="15" maxlength="15" />

<label>Fecha Nacimineto:</label>
<input type="date" name="FN" value="" size="20" maxlength="30" />
<br/><br/>
<label>Fecha Ingreso:</label>
<input type="date" name="FI" value="" size="20" maxlength="30" />
<label>Fecha Devolucion:</label>
<input type="date" name="FD" value="" size="20" maxlength="30"  />

<br/>
<br/>
<label>Codigo Forma Pago:</label>
<select name="FP">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>
<label>Cod_Departamento:</label>
<select name="CD">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>
<br/>
<br/>
<center>



<span class="icon-floppy-disk"></span>
<input type="submit" name="crs" value="Guardar" class="btn-btn-success" >

<span class="icon-spinner11"></span>
<input type="submit" name="btn-actualizar" value="Actualizar" class="btn-btn-info">

<span class="icon-bin"></span>
<input type="submit" name="btn-eliminar" value="Eliminar" class="btn-btn-danger">
<br/>
<br/>
<label>Cod_Empleado:</label>
<input type="text" name="Codigo" value="" size="5" maxlength="5" />
<span class="icon-search">
<input type="submit" name="buscar" value="Buscar" class="btn-btn-primary"></span>
<br/><br/>



</center>
</div>
</form>

</body>
</html>