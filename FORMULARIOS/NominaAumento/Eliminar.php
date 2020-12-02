<?php 
eliminar($_GET["CHE"]);
function eliminar($CHE){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="DELETE FROM nominaaumento WHERE Cod_NominaA='".$CHE."'";
$conexion->query($sentencia) or die("error al eliminar".mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Nonima Aumento eliminado");
window.location="NominaAumento1.php";
</script>

