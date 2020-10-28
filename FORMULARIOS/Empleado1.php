<?php

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["buscar"])){
$CE=$_POST["CE"];

$registros=mysqli_query($conexion,"SELECT * FROM  empleados WHERE Cod_empleados='$CE'");
while ($registro= mysqli_fetch_array($registros)){


/*
$codigo=$registro['Cod_Empleados'];
"CE" value=$codigo ;
$Identidad=$registro['Identidad'];
$PrimerN=$registro['Primer_Nombre'];
$SegundoN=$registro['Segundo_Nombre'];
$PrimerA=$registro['Primer_Apellido'];
$SegundoA=$registro['Segundo_Apellido'];
$Fechan=$registro['Fecha_nacimiento'];
$correo=$registro['Correo'];
$direccion=$registro['Direccion'];
$tel=$registro['Telefono'];
$sexo=$registro['Sexo'];
$Cuenta=$registro['Cuenta_Bancaria'];
$ingreso=$registro['Fecha_Ingreso'];
$nacionalidad=$registro['Nacionalidad'];
$fechad=$registro['Fecha_Deduccion'];
$sueldob=$registro['Sueldo_Base'];
$formapago=$registro['Forma_Pago'];
$codigod=$registro['Cod_Departamento'];


*/
<form name="form1" method="post" action="">
  <table width="25%" border="0" align="center">
    <tr>
<td> <center>Codigo Empleados</center></td>
   <td><center>Identidad</center></td>
   <td><center>Primer Nombre</center></td>
   <td><center>Segundo Nombre</center></td>
   <td><center>Primer Apellido</center></td>
   <td><center>Segundo Apellido</center></td>
   <td><center>Fecha de Nacimiento</center></td>
   <td><center>Correo</center></td>
   <td><center>Direccion</center></td>
   <td><center>Telefono</center></td>
   <td><center>Sexo</center></td>
    <td><center>Cuenta Bancaria</center></td>
   <td><center>Fecha de Ingreso</center></td>
   <td><center>Nacionalidad</center></td>
   <td><center>Fecha de Deduccion</center></td>
    <td><center>Sueldo Base</center></td>
   <td><center>Codigo Forma de Pago</center></td>
   <td><center>Codigo Departamento</center></td>
  
  </tr>
  <tr>
  <td>".$registros['Cod_Empleado']."</td>
  </tr>

  </table>
</form>
 
}
 ?>



	



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