
<?php
Modificar($_POST['CC'],$_POST['D'],$_POST['P'],$_POST['V'],$_POST['F']);
function Modificar($CC,$D,$P,$V,$F){
	$db_host="localhost";
	$db_usuario="root";
	$db_contra="";
	$db_nombre="nominas";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$sentencia="UPDATE pagocomplementario SET Descripcion='".$D."',Porcentaje='".$P."',
Valor='".$V."',fijo='".$F."' WHERE Cod_PagoC='".$CC."'";
$conexion->query($sentencia) or die ("error ak actualizar". mysqli_error($conexion));
}

?>
<script type="text/javascript">
alert("Datos Actualizados de Pagos Complementarios ");
window.location="PagosComplementarios1.php";
</script>