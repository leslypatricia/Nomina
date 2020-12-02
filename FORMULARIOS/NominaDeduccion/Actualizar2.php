
<?php
Modificar($_POST['CN'],$_POST['CEE'],$_POST['IHSS']);
function Modificar($CEE,$IHSS,$CN){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE nominadeducciones SET Cod_Empleados='".$CEE."',
Total_Deducciones='".$IHSS."' WHERE Cod_NominaD='".$CN."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Nonima Deducciones ");
window.location="NominaDeduccion1.php";
</script>