<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<script>
//Validaciones con Javascrip
	function SoloNumeros(evt){
if(window.event){

	keynum= evt.keyCode;
}else{
	keynum=evt.which;
}

if(keynum > 47 && keynum<58 || keynum==8 || keynum==13){
	return true;
}else{
	return false;
}

	}
function SoloLetras(e){
key=e.keyCode || e.which;
tecla= String.fromCharCode(key).toLowerCase();
letras= " abcdefghijklmnopqrstuvwxyz";

especiales="8-37-38-46-164";
tecla_especial=false;
for(var i in especiales){
if(key==especiales[i]){
tecla_especial= true;break;

}
}

if (letras.indexOf(tecla) == -1  && !tecla_especial){

return false;
}
}

</script>
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
if (isset($_POST["Regresar"])){
header("location:HoraExtra1.php");
}
?>

<?php
if(!isset($_POST["Actualizar"])){
$CO=$_GET["CE"];
}
if (isset($_POST["Siguiente"])){
header("location:../NominaDeduccion/NominaDeduccion.php?CE=$CO");
}
?>

<?php
$S_O="";
$D="";
$N="";
$CJJ="";
$S_D="";
$S_H="";
$POR="";
$PH="";
$TOTAL="";
$CH="0";

if(!isset($_POST["Calcu"])){
$CO=$_GET["CE"];
}

include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT *  FROM  horaextra");
while ($registro= mysqli_fetch_array($registros)){
$CH=$registro['Cod_HExtra'];

}
$CHE= $CH + 1 ;
$sueldo="";

?>
<?php


if (isset($_POST["calcular"])){
include("../conexion.php");

	$CO=$_POST["CEE"];
$CJJ=$_POST["CJ"];

$sueldo="";
$S_D="";
$fecha=$_POST["F"];
$registros=mysqli_query($conexion,"select Sueldo_base  FROM  empleados WHERE Cod_empleados='$CO'");


while ($registro= mysqli_fetch_array($registros)){
$sueldo=$registro['Sueldo_base'];

}
//$CHE=$_POST["CHE"];



if($CJJ=="1"){
$D=$_POST["D"];

$S_D=$sueldo / 30;
$S_H=$S_D / 8;
$POR=$S_H * 0.25;
$PH=$S_H + $POR;
$TOTAL=$PH * $D;


}elseif($CJJ=="2"){

$N=$_POST["N"];
$S_D=$sueldo /30;

$S_H=$S_D / 6;
$POR=$S_H * 0.75;
$PH=$S_H + $POR;
$TOTAL=$PH * $N;
}else{
$D=$_POST["D"];
$N=$_POST["N"];
$S_D=$sueldo /30;
$S_H=$S_D / 7;
$PORD=$S_H * 0.25;
$PORN=$S_H * 0.75;
$POR=$PORD + $PORN;
$PHD=$S_H + $PORD; 
$PHN=$S_H + $PORN; 
$PH=$PHD + $PHN;
$TOTALD=$PHD * $D;
$TOTALN=$PHN * $N;
$TOTAL=$TOTALD + $TOTALN;

}

}


 ?>
 <?php


if (isset($_POST["crs"])){
include("../conexion.php");

$CHE=$_POST["CHE"];
$CO=$_POST["CEE"];
$CJJ=$_POST["CJ"];
$C=$_POST["CHE"];
$S=$_POST["S_O"];
$SD=$_POST["S_D"];
$SH=$_POST["S_H"];
$POR=$_POST["Porcentaje"];
$PH=$_POST["P_H"];
$D=$_POST["D"];
$N=$_POST["N"];
$HORAS=$D + $N;
$TOTAL=$_POST["TOTAL"];
$fecha=$_POST["F"];
$TOTALD=$S + $TOTAL;

$consulta="insert into horaextra(Cod_HExtra,Cod_Jornada,Cod_Empleados,Sueldo_Ordinario,Sueldo_Diario,Sueldo_Hora,Porce_Hora_Extra,pago_Hora,Numero_horas,Total_HE,fecha)
 VALUES('$CHE','$CJJ','$CO','$S','$SD','$SH','$POR','$PH','$HORAS','$TOTAL','$fecha')";
$registros=mysqli_query($conexion,"select Sueldo_base  FROM  empleados WHERE Cod_empleados='$CO'");


while ($registro= mysqli_fetch_array($registros)){
$sueldo=$registro['Sueldo_base'];
}

$SueldoNeto=$sueldo + $TOTAL;
 $fcha = date("Y-m-d");
 
 if(mysqli_query($conexion, $consulta)){
	$registro=mysqli_query($conexion,"update nominageneral set
Cant_Horas='$HORAS',Costo_U='$PH',TotalP_HE='$TOTAL',Total_Devengado='$TOTALD',SUELDO_NETO_Pagar='$TOTALD' where Cod_empleados='$CO' and Fecha_Generada='$fcha'")  or die ("error al actualizar");
	echo "<script>

	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='../NominaDeduccion/NominaDeduccion.php?CE=$CO';
	  </script>";
} else {
	echo "<script>
	alert ('Registro NO Ingresado Correctamente!!!');
 window.location='HoraExtra.php';
 </script>";
     /* echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
}

 mysqli_close($conexion);
}


?>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<h1>Horas Extras</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" >


	<tr><td><label>Código Hora Extra<br/></label> </td>
	<td><input type="text" class="form" name="CHE" value="<?php echo $CHE ?>"size="20" maxlength="20" readonly="readonly"/><br/></td></tr>
<tr><td>Jornada<br/> </td>

<td> <select  name="CJ" id="CJ"  class="form"  selected="selected" maxlength="20">
        <?php
include("../conexion.php");

$registros=mysqli_query($conexion,"SELECT *  FROM  jornada");
         ?>
		    <?php
		 	if( $CJJ==1){
			
			   echo '<option value="1" >Diurna </option>';
			}elseif( $CJJ==2){
			 echo '<option value="2" >Nocturna</option>';
			
			}elseif( $CJJ==3){
			 echo '<option value="3" >Mixta</option>';
			
			}else{
		
			 while ($valores = $registros->fetch_assoc()) {
			 	 //echo '<option value="0" >nombre</option>';
				 echo  '<option class="form"  value="'.$valores["Cod_Jornada"].'">'.$valores["Tipo_Jornada"].'</option>';
			 }
			}
			
		 
		
		?>
	
       
         </select>
    

</left>
<br/><br/>

</td></tr>
	<tr><td>Código Empleado<br/> </td>
	<td><input type="text" class="form"  name="CEE"  value="<?php echo $CO; ?>" size="20" maxlength="20" readonly="readonly"/><br/>
 </td></tr>
 

<tr><td>Cant. Horas Diurna </td>
	
<td><input type="text" class="form"  name="D" value="<?php echo $D ?>"  size="20" maxlength="20"onKeyPress=" return SoloNumeros (event)" onpaste="return false"/></td></tr>
			
<tr><td>Cant. Horas Nocturna </td>
<td><input type="text" class="form"  name="N" value="<?php echo $N ?>"  size="20" maxlength="20"onKeyPress=" return SoloNumeros (event)" onpaste="return false"/></td></tr>

	
	
	<tr><td>Salario Base<br/> </td>
	<td> <input type="text" class="form"  name="S_O" value="<?php echo $sueldo ?>"  size="20" maxlength="20" readonly="readonly"onKeyPress=" return SoloNumeros (event)" onpaste="return false"/><br/>
</td></tr>
	<tr><td>Salario Diario<br/> </td>
	<td> <input type="text" class="form"  name="S_D" value="<?php echo $S_D ?>" size="20" maxlength="30" readonly="readonly"onKeyPress=" return SoloNumeros (event)" onpaste="return false"/><br/>
</td></tr>
	<tr><td>Sueldo por Hora<br/> </td>
	<td> <input type="text" class="form"   name="S_H" value="<?php echo $S_H ?>"   size="20"  maxlength="30" readonly="readonly"onKeyPress=" return SoloNumeros (event)" onpaste="return false" /><br/>
</td></tr>
<tr><td>Porcentaje<br/> </td>
	<td> <input type="text" class="form"   name="Porcentaje" value="<?php echo $POR ?>"   size="20" maxlength="30" readonly="readonly" /><br/>
</td></tr>
	<tr><td>Pago por Hora<br/> </td>
	<td><input type="text" class="form"  name="P_H" value="<?php echo $PH ?>"  size="20" maxlength="30" readonly="readonly" onKeyPress=" return SoloNumeros (event)" onpaste="return false" /><br/> 
 </td></tr>
	<tr><td>Total a Pagar<br/> </td>
	<td><input type="text" class="form"  name="TOTAL"  size="20" value="<?php echo $TOTAL ?>"  maxlength="30" readonly="readonly" onKeyPress=" return SoloNumeros (event)" onpaste="return false"/><br/>
 </td></tr>
	</td></tr>

	<tr><td>Fecha<br/> </td>
	<td> <input id="date" class="form"  type="date" name="F" value="<?php echo $fcha = date("Y-m-d"); ?>" size="20" readonly="readonly" maxlength="30" /><br/>
</td></tr>
</table>
<br>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>


<button name="crs"><i class="fas fa-save"></i></button>
<button name="calcular"><i class="fas fa-calculator"></i></button>
<button name="Siguiente"><i class="fas fa-share-square"></i></button>

<br>


<br/>
</div>
</form>
</body>

</html>
