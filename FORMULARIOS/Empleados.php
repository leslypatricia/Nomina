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
	width:750px;
	background:#00ced1;
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
<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario General</h1>


<div class="form-group">
<label>Cod_Empleado:</label>
<input type="text" name="CE" value="" size="5" maxlength="5" />
<label>Cod_Departamento:</label>
<select name="CD">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>
<br/><br/>
<left>
<label>N Identidad:</label>
<input type="text" name="id" value="" size="15" maxlength="15" />
</left>
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
<label>Fecha Nacimiento:</label>
<input type="date" name="FN" value="" size="20" maxlength="30" />
<label>Fecha Ingreso:</label>
<input type="date" name="FI" value="" size="20" maxlength="30" />
<br/>
<br/>
<label>Correo:</label>
<input type="text" name="correo" value="" size="20" maxlength="30" />
<label>Direccion:</label>
<input type="text" name="Dire" value="" size="20" maxlength="30" />
<label>Telefono:</label>
<input type="text" name="tele" value="" size="20" maxlength="30" />
<br/>
<br/>
<label>Sexo:</label>
 <input type="radio" name="sexo"value="mujer" id="mujer">F</>
   <input type="radio"  name="sexo" value="hombre" id="hombre">M</>

<label>Nacionalidad:</label>
<select name="Nac">
   <option value="Hondureña">Hondureña</option>
   <option value="Extrajero">Extrajero</option>
</select>
<br/>
<br/>
<label>Sueldo Base:</label>
<input type="text" name="SB" value="" size="15" maxlength="15" />
<label>Cuenta Bancaria</label>
<input type="text" name="CB" value="" size="20" maxlength="30" />
<br/><br/>
<label>Fecha Devolucion:</label>
<input type="date" name="FD" value="" size="20" maxlength="30"  />
<label>Codigo Forma Pago:</label>
<select name="FP">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>

<br/>
<br/>
<center>
<a href="bd/Menu_Admin.php" class="btn btn-default">Regresar</a>
<a onClick="Windows.location='Actualizar.php'" class="btn btn-default">listar</a>
<span class="icon-floppy-disk"></span>
<input type="submit" name="btn-guardar" value="Guardar" class="btn-btn-success" >

<span class="icon-spinner11"></span>
<input type="submit" name="btn-actualizar" value="Actualizar" class="btn-btn-info">

<span class="icon-bin"></span>
<input type="submit" name="btn-eliminar" value="Eliminar" class="btn-btn-danger">
<br/>
<br/>


<label>Cod_Empleado:</label>
<input type="text" name="CE" value="" size="5" maxlength="5" />
<span class="icon-search">
<input type="submit" name="btn-buscar" value="Buscar" class="btn-btn-primary"></span>
<br/>
<br/>
<?php

/*
include("conexion.php");
$CE="";
$id="";
$PN="";
$SN="";
$PA="";
$SA="";
$FN="";
$CORRE="";
$DIR="";
$TELE="";
$S="";
$CB="";
$FI="";
$NAC="";
$FD="";
$SB="";
$FP="";
$CD="";

if(isset($_POST['btn-guardar'])){

/*$CE=$_POST["CE"];*/
/*$CE= rand(1,150);
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

if($CE=="" || $id=="" || $PN=="" || $SN==""|| $PA=="" || $SA=="" || $FN=="" || $CORRE=="" || $DIR=="" || $TELE=="" || $S=="" || $CB=="" || $FI=="" || $NAC=="" || $FD=="" || $SB=="" || $FP=="" || $CD==""){
	echo "los campos son obligatorio";
}else{
$INSERTAR="INSERT INTO empleados VALUES('$id',$PN,'$SN','$PA','$SA','$FN','$CORRE','$DIR','$TELE','$S','$CB','$FI','$NAC','$FD','$SB','$FP','$CD') ";

$EJECUTAR=mysqli_query($conexion,$INSERTAR);
IF(!$EJECUTAR){
ECHO "ERROR EN LA LINEA";
}
/*(Cod_empleados,Identidad,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,FechaNacimiento,Correo,Direccion,Telefono,Sexo,CuentaBancaria,Fechaingreso,Nacionalidad,FechaDeduccion,SueldoBase,Cod_FormaPago,Cod_Depto)*/
/*}
}


//buscar
if(isset($_POST['btn-buscar']))
{	

$CE=$_POST["CE"];
$existe=0;
if($CE==""){
	echo "el Codigo empleado es obligatorio";
}else{
$resul=mysqli_query($conexion,"SELECT * FROM  empleados WHERE Cod_empleados='$CE'");
/*var_dump($consulta);exit;*/
/*while ($consulta=$resul->fetch_array())
{
	
echo $consulta['Identidad'] . "<br/>";	
echo $consulta['PrimerNombre'] . "<br/>";	
echo $consulta['SegundoNombre'] . "<br/>";	
echo $consulta['PrimerApellido'] . "<br/>";	
echo $consulta['SegundoApellido'] . "<br/>";	
echo $consulta['FechaNacimiento'] . "<br/>";	
echo $consulta['Correo'] . "<br/>";	
echo $consulta['Direccion'] . "<br/>";	
echo $consulta['telefono'] . "<br/>";	
echo $consulta['Sexo'] . "<br/>";	
echo $consulta['CuentaBancaria'] . "<br/>";	
echo $consulta['Fechaingreso'] . "<br/>";	
echo $consulta['Nacionalidad'] . "<br/>";	
echo $consulta['FechaDeduccion'] . "<br/>";	
echo $consulta['SueldoBase'] . "<br/>";	
echo $consulta['Cod_FormaPago'] . "<br/>";	
echo $consulta['Cod_Depto'] . "<br/>";	
	$existe++;
	}
	if($existe==0){echo "el codigo no existe";}
	  
}
}

//actializar
if(isset($_POST['btn-actualizar'])){
$CE=$_POST["CE"];
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

if($CE=="" || $id=="" || $PN=="" || $SN==""|| $PA=="" || $SA=="" || $FN=="" || $CORRE=="" || $DIR=="" || $TELE=="" || $S=="" || $CB=="" || $FI=="" || $NAC=="" || $FD=="" || $SB=="" || $FP=="" || $CD==""){
	echo "los campos son obligatorio";
}else{
$resul=mysqli_query($conexion,"SELECT * FROM empleados where Cod_empleados LIKE '$CE'");
/*var_dump($consulta);exit;*/
/*while ($consulta=$resul->fetch_array())
{
$existe++;
	}
if($existe==0){echo "el codigo no existe";
}else{	
$_UPDATE_SQL="UPDATE  empleados Set
Cod_empleados='$CE',
Identidad='$id',
PrimerNombre='$PN',
SegundoNombre='$SN',
PrimerApellido='$PA',
SegundoApellido='$SA',
FechaNacimiento='$FN',
Correo='$CORRE',
Direccion='$DIR',
Telefono='$TELE',
Sexo='$S',
CuentaBancaria='$CB',
Fechaingreso='$FI',
Nacionalidad='$NAC',
FechaDeduccion='$FD',
Sueldobase='$SB',
Cod_FormaPago='$FP',
Cod_Depto='$CD'
WHERE Cod_empleados='$CE'";

mysqli_query($conexion,$_UPDATE_SQL);
echo "actualizacion con exito";
	}

}
}

//eliminar
if(isset($_POST['btn-eliminar'])){
$CE=$_POST["CE"];
$existe=0;
if($CE==""){
echo "el Codigo empleado es obligatorio";
}else{
$resul=mysqli_query($conexion,"SELECT * FROM empleados WHERE Cod_empleados= '$CE'");
while ($consulta=$resul->fetch_array())
{
$existe++;
}
if($existe==0){echo "el codigo no existe";
}else {
$_DELETE_SQL="DELETE FROM empleados WHERE Cod_empleados='$CE' ";	
mysqli_query($conexion,$_DELETE_SQL);
	
	}
}

}
include("bd/logout.php");
*/
?>

</center>
</div>
</form>



</body>
</html>