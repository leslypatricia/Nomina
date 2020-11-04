
<?php
Modificar($_POST['CE'],$_POST['PN'],$_POST['SA'],$_POST['tele'],$_POST['FI'],$_POST['SB'],$_POST['FP'],$_POST['CD']);
function Modificar($cod,$P,$S,$T,$F,$B,$CP,$D){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE empleados SET Primer_Nombre='".$P."',Segundo_Apellido='".$S."',
Telefono='".$T."',Fecha_ingreso='".$F."',Sueldo_base='".$B."',Cod_FormaPago='".$CP."',
Cod_Depto='".$D."' WHERE Cod_empleados='".$cod."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Empleado ");
window.location="empleados1.php";
</script>