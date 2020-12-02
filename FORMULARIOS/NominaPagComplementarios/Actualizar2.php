
<?php
Modificar($_POST['CNPC'],$_POST['CEE'],$_POST['TOTALPC']);
function Modificar($CNPC,$CEE,$TOTALPC){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE nominaspagoscomplementarios 
SET Cod_Empleados='".$CEE."',Total_PagosC='".$TOTALPC."'
WHERE Cod_NominaPC='".$CNPC."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados NPC ");
window.location="NominaPagComplementarios1.php";
</script>