
<?php
Modificar($_POST['CEE'],$_POST['TOTALA'],$_POST['CHE']);
function Modificar($CEE,$TOTALA,$CHE){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE nominaaumento SET Cod_Empleados='".$CEE."',Total_A='".$TOTALA."'
WHERE Cod_NominaA='".$CHE."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados del Nonima Aumento ");
window.location="NominaAumento1.php";
</script>