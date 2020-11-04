<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
<style>
/*-----------------------------------código_css-------------------------------------------------------------------------------*/
body{
    margin:0;
    padding:0;
	box-sizing:border-box;
   /* background:black;*/
    height:100%;
	width:100%;
	
	background-image: url("../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}

th, td {
	border:none;
	padding:10px;
	text-align:center;
}
tr:nth-child(even){

	background:#F5F5F5;
}
 
.from{
	/*width:1000px;
		padding:40px;*/
		/*background:black;*/
	
	
	/*  background: -webkit-linear-gradient(right, #000000, #ffffff, #000000, #ffffff);
  background: -o-linear-gradient(right, #ffffff, #000000, #ffffff, #000000);
  background: -moz-linear-gradient(right,#ffffff, #ffffff,#000000, #000000);
  background: linear-gradient(right,  #ffffff, #000000,  #ffffff, #000000);*/
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
	/*box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:40px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;
	}
	
.form-group{
	/*background:#00ced1;*/
	padding:50px;
	border-radius:6px;
	margin-bottom:16px
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	}
.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	font-family:Times New Roman ;


}
/*iconos*/
.fa-trash-alt{
color:red;
background:white;
border:none;
font-weight:bold;

}
.fa-search-plus
{
color:#009999;
background:white;
border:none;
font-weight:bold;

}

.boton-eliminar{

background:white;
border:none;
font-weight:bold;

}

.boton-actualizar{

background:white;
border:none;
font-weight:bold;

}

.fa-edit{
color:green;


}
.boton_Añadir{
	margin-left:10%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	background:#346BFB;
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;

}
.Boton-Regresar
{
	margin-left:90%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	align:center;
    background:#346BFB;
	/* */
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;

}
.Estilo-tabla{
   background:#346BFB;
   color:white;
}

.boton_Añadir:hover{
	margin-left:10%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	background:#173687;
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;
	cursor:pointer;

}
</style>
</head>

<body>
<?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>
<?php
//-----------Código para Eliminar-------------------------------------------------------------------------//

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


 
if (isset($_POST["Eliminar"])){
$CE=$_POST["CE"];

$registros=mysqli_query($conexion,"SELECT FROM  empleados WHERE Cod_empleados='$CE'");
$row=mysqli_fetch_array($registros);
if ($row){ 
	echo "desea eliminar";
	echo "";echo $row['Cod_empleados'];
	echo "";echo $row['Primer_Nombre'];
	echo "";echo $row['Segundo_Apellido'];
	echo "";echo $row['Telefono'];
	echo "";echo $row['Fecha_ingreso'];
	echo "";echo $row['Sueldo_base'];
	echo "";echo $row['Cod_FormPago'];
	echo "";echo $row['Cod_Depto'];
	echo "?";
	echo "";echo"<script>
 alert ('Registro Eliminado Correctamente!!!');
	  window.location='Empleados1.php';
	  </script>";
} else {
/*echo "<script>
     
	     alert ('Registro NO Eliminado ERROR!!!');
	  window.location='Empleados1.php';
	  </script>";*/
}

}
?>
<input type="hidden" id="CE" value="<?php echo $codigo;?>">

<?php
//-----------------Código del bontón actualizar-----------//

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

if (isset($_POST["Actualizar"])){
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre)
or die ("error en la conexion");

mysqli_set_charset($conexion,"utf8");

$CE=$_POST['CE'];
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


$registro=mysqli_query($conexion,"update empleados set Identidad='$id', Primer_Nombre='$PN' ,Segundo_Nombre='$SN',Primer_Apellido='$PA',Segundo_Apellido='$SA',
Fecha_nacimiento='$FN',Correo='$CORRE',Direccion='$DIR',Telefono='$TELE',Sexo='$S',Cuenta_Bancaria='$CB',Fecha_ingreso='$FI',
Nacionalidad='$NAC',Fecha_Deduccion='$FD',Sueldo_base='$SB',Cod_FormaPago='$FP',Cod_Depto='$CD'    
where Cod_empleados='$CE'")
or die ("error al actualizar");


if ($registro){

echo" <script>
  alert ('Registro Actualizado Correctamente!!!');
	  window.location='Empleados1.php';
	  </script>";
} else {
echo "<script>
     
	     alert ('Registro NO Actualizado ERROR!!!');
	  window.location='Empleados1.php';
	  </script>";
}
}
?>
<?php
if (isset($_POST["Regresar"])){
header("location:estructura.php");
}
?>
<?php
if (isset($_POST["Insertar"])){
header("location:empleados.php");
}
?>
 <div class="Container">
	<center>
  <div class="form-group">
	 <center>
	 <h1>Empleados</h1>
	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
		   <label for="caja"> </label>
		  <input type="text" name="caja" id="caja" aling="center" >   <i class="fas fa-search-plus" class="boton-Buscar"> </i> </input>
		</div>
	</div>
	</center><br/><br/>
	<button name="Insertar"  class="boton_Añadir">Añadir Empleado  <i class="fas fa-plus"></i></button>
	<div class="container-table">
	<center>
	
<table border="1" class="color-Tabla">


    <tr class="Estilo-tabla">

       <td>Código Empleado</td> 
       <td>Primer Nombre</td>
       <td>Segundo Apellido</td>
       <td>Teléfono</td>
       <td>Fecha Ingreso</td>
       <td>Sueldo Base</td>
       <td>Forma de Pago</td>
       <td>Código Depto</td>
	   <td>Eliminar</td>
	   <td>Actualizar</td>
	</tr>
	
	<?php
$sql="SELECT ep.Cod_empleados,ep.Primer_Nombre,ep.Segundo_Apellido,ep.Telefono,
ep.Fecha_ingreso,ep.Sueldo_base,fp.Cod_FormaPago,dep.Cod_Depto from empleados as ep 
JOIN formapago as fp on ep.Cod_FormaPago=fp.Cod_FormaPago
JOIN departamento as dep on ep.Cod_Depto=dep.Cod_Depto" ;

/*if(isset($_POST['consulta'])){
	$q=$mysqli->real_escape_string($_POST['consulta']);
	$sql= "SELECT ep.Cod_empleados,ep.Primer_Nombre,ep.Segundo_Apellido,ep.Telefono,
	ep.Fecha_ingreso,ep.Sueldo_base,fp.Cod_FormaPago,dep.Cod_Depto from empleados   ";
}*/

	$res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
		echo'
		<tr>
		<td>'.$mostrar['Cod_empleados'].'</td>
		<td>'.$mostrar['Primer_Nombre'].'</td>
		<td>'.$mostrar['Segundo_Apellido'].'</td>
		<td>'.$mostrar['Telefono'].'</td>
		<td>'.$mostrar['Fecha_ingreso'].'</td>
		<td>'.$mostrar['Sueldo_base'].'</td>
		<td>'.$mostrar['Cod_FormaPago'].'</td>
		<td>'.$mostrar['Cod_Depto'].'</td>
		<td><button name="Eliminar" class="boton-eliminar"><i class="far fa-trash-alt"></i></button></td>
		<td><button name="Actualizar" class="boton-actualizar"><i class="fas fa-edit"></i></button></td>
		</tr>
		
';
	?>

<?php
}
?>
</div class="color-Tabla">
</center>
   </table> 
</div>
	</center>
	<td><button name="Regresar" class="Boton-Regresar" ><i class="fas fa-reply"></i></button>

    </form>
</div>
<br>

    </body>
    </html>

<!--
<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				</div></div></div>
	</center>
 Modal 
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		</div>
		</form>
		<script>
		
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>



    </body>
    </html>-->
