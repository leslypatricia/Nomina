<?php 
eliminar($_GET["CN"]);
function eliminar($CN){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="DELETE FROM nominadeducciones WHERE Cod_NominaD='".$CN."'";
$conexion->query($sentencia) or die("error al eliminar".mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Nonima Deducciones eliminado");
window.location="NominaDeduccion1.php";
</script>