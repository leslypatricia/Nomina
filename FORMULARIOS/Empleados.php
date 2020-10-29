<!DOCTYPE html >
<html lang="es">
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
.form-group1 {	width:750px;
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
$codigo="";
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";


?>


<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

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

$consulta="insert into empleados (Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Fecha_nacimiento,Correo,Direccion,Telefono,Sexo,Cuenta_Bancaria,Fecha_ingreso,Nacionalidad,Fecha_Deduccion,Sueldo_base,Cod_FormaPago,Cod_Depto)
 VALUES('$CE','$id','$PN','$SN','$PA','$SA','$FN','$CORRE','$DIR','$TELE','$S','$CB','$FI','$NAC','$FD','$SB','$FP','$CD')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Empleados.php';
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


 
if (isset($_POST["Eliminar"])){
$CE=$_POST["CE"];

$registros=mysqli_query($conexion,"delete FROM  empleados WHERE Cod_empleados='$CE'");

if ($registro){

echo"
  alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Empleados.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Eliminado Correctamente!!!');
	  window.location='Empleados.php';
	  </script>";
}
$codigo="";
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";


}

?>




<?php
$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){

$CE=$_POST["CEE"];

$registros=mysqli_query($conexion,"SELECT * FROM  empleados WHERE Cod_empleados='$CE'");


while ($registro= mysqli_fetch_array($registros)){


$codigo=$registro['Cod_empleados'];
$Identidad=$registro['Identidad'];
$PrimerN=$registro['Primer_Nombre'];
$SegundoN=$registro['Segundo_Nombre'];
$PrimerA=$registro['Primer_Apellido'];
$SegundoA=$registro['Segundo_Apellido'];
$fechan=$registro['Fecha_nacimiento'];
$correo=$registro['Correo'];
$direccion=$registro['Direccion'];
$tel=$registro['Telefono'];
$sexo=$registro['Sexo'];
$Cuenta=$registro['Cuenta_Bancaria'];
$ingreso=$registro['Fecha_ingreso'];
$nacionalidad=$registro['Nacionalidad'];
$fechad=$registro['Fecha_Deduccion'];
$sueldob=$registro['Sueldo_base'];
$formapago=$registro['Cod_FormaPago'];
$codigod=$registro['Cod_Depto'];


mysqli_close($conexion);
}
}
 ?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<h1>Formulario Empleado</h1>

<?php
if (isset($_POST["limpiar"])){
$codigo="";
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";

}

?>
<?php

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

if (isset($_POST["buscar"])){
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre)
or die ("erro en la conexion");

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

echo"
  alert ('Registro NO Actualizado ERROR!!!');
	  window.location='Empleados.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro Actualizado Correctamente!!!');
	  window.location='Empleados.php';
	  </script>";
}
}
mysqli_close($conexion);


?>

<div class="form-group">
<label>Cod_Empleado:</label>
<input type="text" name="CE" value="<?php echo $codigo?>" size="5" maxlength="5" />
<label>Cod_Departamento:</label>
<select name="CD">
   <option value="<?php echo  $codigod?>">1</option>
   <option value="<?php echo  $codigod?>">2</option>
   <option value="<?php echo  $codigod?>">3</option>
   <option  value="<?php echo  $codigod?>">4</option>
</select>
<br/><br/>
<left>
<label>N Identidad:</label>
<input type="text" name="id" value="<?php echo $Identidad?>" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Primer Nombre:</label>
<input type="text" name="PN" value="<?php echo $PrimerN?>" size="20" maxlength="20"/>
<label>Segundo Nombre:</label>
<input type="text" name="SN" value="<?php echo $SegundoN?>"/>
<br/>
<br/>

<label>Primer Apellido:</label>
<input type="text" name="PA" value="<?php echo $PrimerA?>" size="20" maxlength="20"/>

<label>Segundo  Apellido:</label>
<input type="text" name="SA" value="<?php echo $SegundoA?>" size="20" maxlength="30"/>
<br/>
<br/>
<label>Fecha Nacimiento:</label>
<input id="date" type="date" name="FN" value="<?php echo $fechan?>" size="20"  maxlength="30" />
<label>Fecha Ingreso:</label>
<input id="date" type="date" name="FI" value="<?php echo $ingreso?>" size="20" maxlength="30" />
<br/>
<br/>
<label>Correo:</label>
<input type="text" name="correo" value="<?php echo $correo?>" size="20" maxlength="30" />
<label>Direccion:</label>
<input type="text" name="Dire" value="<?php echo $direccion?>" size="20" maxlength="30" />
<label>Telefono:</label>
<input type="text" name="tele" value="<?php echo $tel?>" size="20" maxlength="30" />
<br/>
<br/>
<label>Sexo:</label>
 <input type="radio" name="sexo" value="" checkec="checked"  id="mujer">F</>
   <input type="radio"  name="sexo" value="" checked="checked" id="hombre">M</>

<label>Nacionalidad:</label>
<select name="Nac">
   <option value="<?php echo $nacionalidad?>">Hondure?a</option>
   <option value="<?php echo $nacionalidad?>">Extrajero</option>
</select>
<br/>
<br/>
<label>Sueldo Base:</label>
<input type="text" name="SB" value="<?php echo $sueldob?>" size="15" maxlength="15" />
<label>Cuenta Bancaria</label>
<input type="text" name="CB" value="<?php echo  $Cuenta?>" size="20" maxlength="30" />
<br/><br/>
<label>Fecha Deduccion:</label>
<input id="date" type="date" name="FD" value="<?php echo $fechad?>" size="20"  maxlength="30"  />
<label>Codigo Forma Pago:</label>
<select name="FP">
<option value="<?php echo $formapago?>">1</option>
<option value="<?php echo $formapago?>">2</option>
</select>


<br/>
<br/>
<center>

<span class="icon-floppy-disk"><span/>
<input type="submit" name="crs" value="Guardar" class="btn-btn-success" >
<span class="icon-floppy-disk"><span/>
<input type="submit" name="Actualizar" value="Actualizar" class="btn-btn-success" >
<span class="icon-floppy-disk"></span>
<input type="submit" name="Eliminar" value="Eliminar" class="btn-btn-success" >
<span class="icon-floppy-disk"></span>
<input type="submit" name="limpiar" value="Limpiar" class="btn-btn-success" >
<br>
<br>
<label>Cod_Empleado:</label>
<input type="text" name="CEE" value="" size="5" maxlength="5" />
<span class="icon-search">
<input type="submit" name="buscar" value="Buscar" class="btn-btn-primary"></span>
<br/>

</center>
</div>

</form>



</body>
</html>
