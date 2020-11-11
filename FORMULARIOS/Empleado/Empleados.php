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
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}
.from{
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
	color: blanchedalmond;
	font-family:Times New Roman;


	}
	
.form-group{
	width:750px;
	/*background:#00ced1;*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	/*font-family:"Arial Black", Gadget, sans-serif;*/
	font-family:Times New Roman;
	font-size:18px;
	
	}
.form-group1 {	width:750px;
	background:#00ced1;
	padding:10px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
}
 .form-group .form{
	background: rgb(red, green, blue);
	border: none;
	outline: none;
border-bottom: 2px solid #ff851b;
width: 250%;
padding: 05px;
margin-bottom: 08px;
border-radius: 2px;
font-size: 12px;
color: black;
font-family:"Arial Black", Gadget, sans-serif;
width: 100%;
/*style="width: 100%;*/
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
/*Estilos paginador*/
</style>
</head>

<body>
<?php
//---------------------------------------------Código para limpiar -------------------------------------------------------------//
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
$codigo="0";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  empleados");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_empleados'];

}
$codigo=$codigos + 1;
?>


<?php
//--------------------------------Bontón de Insertar----------------------------------------------------------//
//--conexion base de datos--/
include("../conexion.php");

if (isset($_POST["crs"])){
$CE=$_POST['CE'];//código de empleado
$id=$_POST['id'];//Identidad
$PN=$_POST['PN'];//Primer nombre
$SN=$_POST['SN'];//Segundo NOmbre
$PA=$_POST['PA'];//Primer Apellido 
$SA=$_POST['SA'];//Segundo Apellido
$FN=$_POST['FN'];//Fecha de nacimiento
$CORRE=$_POST['correo'];//correo
$DIR=$_POST['Dire'];//Dirrección
$TELE=$_POST['tele'];//Teléfono
$S=$_POST['SEXO'];//Sexo
$CB=$_POST['CB'];//Cuenta Bancaria
$FI=$_POST['FI'];//Fecha de Ingreso
$NAC=$_POST['Nac'];//Nacionalidad
$FD=$_POST['FD'];//Fecha de Deducción
$SB=$_POST['SB'];//Sueldo base 
$FP=$_POST['FP'];//forma de pago
$CD=isset($_POST['CD'])?$_POST['CD']:0;//código de depto

//------------consulta para insetar-----//
$consulta="insert into empleados (Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Fecha_nacimiento,Correo,Direccion,Telefono,Sexo,Cuenta_Bancaria,Fecha_ingreso,Nacionalidad,Fecha_Deduccion,Sueldo_base,Cod_FormaPago,Cod_Depto)
 VALUES('$CE','$id','$PN','$SN','$PA','$SA','$FN','$CORRE','$DIR','$TELE','$S','$CB','$FI','$NAC','$FD','$SB','$FP','$CD')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Empleados1.php';
	  </script>";
} else {
    /*  echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
	echo "<script>
     
	alert ('ERROR AL Ingresar un Usuario!!!');
 window.location='Empleados.php';
 </script>";

        }

		mysqli_close($conexion);
	
	
	}
?>

<?php
//---------------------código del botón buscar -------------------------------------------------------------------------
include("../conexion.php");

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
$CD=$registro['Cod_Depto'];


}

}

mysqli_close($conexion);

//----------------------finanlización de código botón buscar
 ?>

<?php

//------Código para el botón Limpiar------//
if (isset($_POST["limpiar"])){
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
if (isset($_POST["Regresar"])){
header("location:Empleados1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>

<form class="from"  id="form1" action= "" method="POST" >
<center>
<h1>Formulario Empleado</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Código Empleado<br/></label> </td>
	<td><input type="text" class="form" name="CE" value="<?php echo $codigo ?>" /><br/></td></tr>
	<tr><td>Departamento<br/> </td>
	<td> <select  name="CD" id="CD"  class="form"   maxlength="20">
        <?php
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT *  FROM  departamento");
         ?>
		    <?php
		 	if( $CD==1){
			
			   echo '<option value="1" >Administración</option>';
			}elseif( $CD==2){
			 echo '<option value="2" >Contabilidad</option>';
			
			}elseif( $CD==3){
			 echo '<option value="3" >Tecnología</option>';
			
			}else{
		
			 while ($valores = $registros->fetch_assoc()) {
			 	 //echo '<option value="0" >nombre</option>';
				 echo  '<option class="form"  value="'.$valores["Cod_Depto"].'">'.$valores["Descripcion"].'</option>';
			 }
			}
			
		?>
	</select></td></tr>
	
<tr><td>Identidad<br/> </td>
<td> <input type="text" class="form"  name="id" value="<?php echo $Identidad?>" size="15" maxlength="15" /><br/>
</td></tr>
	<tr><td>Primer Nombre<br/> </td>
	<td><input type="text" class="form"  name="PN" value="<?php echo $PrimerN?>" size="20" maxlength="20"/><br/>
 </td></tr>
	<tr><td>Segundo Nombre<br/> </td>
	<td><input type="text" class="form"  name="SN" value="<?php echo $SegundoN?>"/></td></tr>
	<tr><td>Primer Apellido<br/> </td>
	<td> <input type="text" class="form"  name="PA" value="<?php echo $PrimerA?>" size="20" maxlength="20"/><br/>
</td></tr>
	<tr><td>Segundo Apellido<br/> </td>
	<td> <input type="text" class="form"  name="SA" value="<?php echo $SegundoA?>" size="20" maxlength="30"/><br/>
</td></tr>
	<tr><td>Fecha de  Nacimiento<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FN" value="<?php echo $fechan?>" size="20"  maxlength="30" /><br/>
</td></tr>
<tr><td>Fecha de  Ingreso<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FI" value="<?php echo $ingreso?>" size="20" maxlength="30" /><br/>
</td></tr>
	<tr><td>Correo Electrónico <br/> </td>
	<td><input type="email" class="form"  name="correo" value="<?php echo $correo?>" size="20" maxlength="30" /><br/> 
 </td></tr>
	<tr><td>Dirección<br/> </td>
	<td><input type="text" class="form"  name="Dire" value="<?php echo $direccion?>" size="20" maxlength="30" /><br/>
 </td></tr>
	<tr><td>Teléfono<br/> </td>
	<td> <input type="number" class="form"  name="tele" value="<?php echo $tel?>" size="15" maxlength="15" /><br/></td></tr>
	<tr><td>Sexo<br/> </td>
	<td><select  name="SEXO" id="SEXO"  class="form"  maxlength="20">
	
	    <?php

		 	if( $sexo=='F'){
			
			  echo '<option value="F" >Femenino</option>';
			}elseif( $sexo=='M'){
			 echo '<option value="M" >Masculino</option>';
			
			}else{
			echo '<option value="" >Seleccione</option>';
			echo '	<option  class="form"  value="F" maxlength="20" >Femenino</option>';
            echo ' <option class="form" value="M" maxlength="20" >Masculino</option>';
			}	
		?>
	</select></td></tr>

	<tr><td>Nacionalidad<br/> </td>
		<td><select  name="Nac" id="SEXO"  class="form"  maxlength="20">
	
	    <?php

		 	if( $nacionalidad=='Hondureña'){
			
			  echo '<option value="Hondureña" >Hondureña</option>';
			}elseif( $nacionalidad=='Extranjero'){
			 echo '<option value="	Extranjero" >Extranjero</option>';
			
			}else{
			echo '<option value="" >Seleccione</option>';
			echo '	<option  class="form"  value="Hondureña" maxlength="20" >Hondureña</option>';
            echo ' <option class="form" value="Extranjero" maxlength="20" >Extranjero</option>';
			}	
		?>
	</select></td></tr>

	<tr><td>Sueldo Base<br/> </td>
	<td>
<input type="text" name="SB" class="form"  value="<?php echo $sueldob?>" size="15" maxlength="15" /><br/>
 </td></tr>
	<tr><td> Número de cuenta Bancaria<br/> </td>
	<td> <input type="text" class="form"  name="CB" value="<?php echo  $Cuenta?>" size="20" maxlength="30" /><br/>
</td></tr>
	<tr><td>Fecha de Deducciones<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FD" value="<?php echo $fechad?>" size="20"  maxlength="30"  /><br/>
</td></tr>
	<tr><td>Forma de Pago<br/> </td>
	<td><select name="FP" class="form"  maxlength="20">
<?php
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT *  FROM  formapago");
         ?>
		    <?php
		 	if( $formapago==1){
			
			   echo '<option value="1" >Mensual</option>';
			}elseif( $formapago==2){
			 echo '<option value="2" >Quincenal</option>';
			
			}else{
		
			 while ($valores = $registros->fetch_assoc()) {
			 	 //echo '<option value="0" >nombre</option>';
				 echo  '<option class="form"  value="'.$valores["Cod_FormaPago"].'">'.$valores["Descripcion"].'</option>';
			 }
			}
			
		?>
	</select></td></tr>
</table>
<br>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="BD"><i class="fas fa-database"></i></button>
<br>

<br>
<label>Código de Empleado:</label>
<input type="text" name="CEE" value="" size="5" maxlength="5" />
<button name="buscar"><i class="fas fa-search"></i></button>


<br/>
</div>
</form>
</body>
</html>

