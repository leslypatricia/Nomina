<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../codigo.js"></script>
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
/*-----------------------------------código_css-------------------------------------------------------------------------------*/
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body{
	font-family: 'Open sans';
	background: #E8E8E8;
	background-image: url("../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
}
header{
	position: sticky;
	width: 100%;
	top: 0;
	left: 0;
	padding: 20px;
	background: #34495E;
	margin-bottom:100px;
}
header #button-menu{
	font-size: 30px;
	color: #fff;
	cursor: pointer;
}
.navegacion{
	position: absolute;
	top: 100%;
	left: 0;
	width: 0%;
	height: 100vh;
	background: rgba(0,0,0,.0);
}
.navegacion ul{
	width: 320px;
	height: 100%;
	background: #fff;
	list-style: none;
	position: absolute;
	top: 0;
	left: -320px;
	transition: left .3s;
}
.navegacion .menu li.title-menu{
	padding: 20px;
	background: #5F6F81;
	color: #fff;
	text-align: center;
	font-size: 22px;
}
.navegacion .menu a{
	display: block;
	padding: 05px;
	border-bottom: 1px solid #C6D0DA;
	font-size: 18px;
	font-weight: 200;
	text-decoration: none;
	color: #575D69;
}
.navegacion .menu a:hover{
	background: #798DA3;
	color: #fff;
}
.navegacion .menu li span.icon-menu{
	margin-right: 12px;
}
.navegacion .menu .item-submenu > a::after{
	font: normal normal normal 14px/1 FontAwesome;
  	font-size: inherit;
  	text-rendering: auto;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
	content: '\f105';
	float: right;
	color: #C5C5C5;
}
/* Submenu ============*/
.navegacion .submenu li.title-menu{
	background: #fff;
	color: #575D69;
}
.navegacion .submenu li.go-back{
	padding: 10px 20px;
	background: #5F6F81;
	color: #fff;
	font-size: 18px;
	cursor: pointer;
}
li{
	font-size:40px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;
	}
.navegacion .submenu li.go-back::before{
	font: normal normal normal 14px/1 FontAwesome;
  	font-size: inherit;
  	text-rendering: auto;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
	content: '\f0d9';
	margin-right: 10px;
}
@media screen and (max-width: 320px){
	.navegacion ul{
		width: 100%;
	}
}
.link_activo{
    color: red;
}
nav a:nth-child(1),
nav a:nth-child(4){
    border-right: rgba(0, 128, 128, 0.39) 1px solid;
}
.logo{
    letter-spacing: 5px;
    font-size: 20px;
    color: white;
    font-weight: 500;
}
.contenedor{
    width: 1000px;
    margin: 0 auto;
    position: relative;
}
.page{
    width: 100%;
    height: 50vh;
    top: 100px;
    left: 0;
    background: linear-gradient(10deg, black 90%, white 90%);
    border-radius: 20px;
    position: absolute;
    box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.644);
    transform: translateX(150%);
    display: flex;
    align-items: center;
    justify-content: center;
   
    
}
.page .contenido{
    padding: 50px;
    width: 100%;
    color: white;
}
.page .contenido h2{
    text-align: center;
}
.page .contenido p{
    column-count: 3;
    column-gap: 50px;
    column-rule: 1px dotted black;
    }

.active{
    transform: translateX(0%);
}
/* TEXTO EFECTO */

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
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:white;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;


	}
	
.form-group{
	width:750px;
	/*background:#00ced1;*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	/*font-family:"Arial Black", Gadget, sans-serif;*/
	font-family:Times New Roman;
	font-size:18px;
	
	}
.form-group1 {	width:750px;
	background:#00ced1;
	padding:10px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
}
 .form-group .form{
	background: rgb(red, green, blue);
	border: none;
	outline: none;
border-bottom: 2px solid #ff851b;
width: 250%;
padding: 05px;
margin-bottom: 08px;
border-radius: 2px;
font-size: 12px;
color: black;
font-family:"Arial Black", Gadget, sans-serif;
width: 100%;
/*style="width: 100%;*/
}
/*iconos*/
.fa-search{
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
/*Estilos paginador*/
</style>
</head>

<body>
<header>

		<span id="button-menu" class="fa fa-bars"></span>
	<!--	<span id="button-menu" class="fa fa-bars"><?php echo$_SESSION['s_usuario'].'-'.$_SESSION['idRol']; ?></span>-->
		<nav class="navegacion">
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Menú</li>
				<!-- TITULAR -->
				<li class="item-submenu" menu="1">
					<a href="#"><span class=" icon-menu"></span>Seguridad</a>
					<ul class="submenu">
						<li class="title-menu"><span class="icon-menu"></span>Seguridad</li>
						<li class="go-back">Atrás</li>
						<li><a href="../Usuario/Usuario1.php">Usuarios</a></li>
                       <li><a href="../rol/rol1.php">Rol</a></li>
                       <li><a href="../Privilegios/Privilegios1.php">Privilegios</a></li>
					</ul>
				</li>

				<li class="item-submenu" menu="2">
					<a href="#"><span class=" icon-menu"></span>Personal</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Personal</li>
						<li class="go-back">Atrás</li>
						<li><a href="../Empleado/Empleados1.php">Empleados</a></li>
                        <li><a href="../Departamento/Departamento1.php">Departamentos</a></li>
                        <li><a href="../FormaPago/FormaPago1.php">Formas de Pago</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="3">
					<a href="#"><span class=" icon-menu"></span>Deducciones</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Deducciones</li>
						<li class="go-back">Atrás</li>
						<li><a href="../Deducciones/Deducciones1.php">Agregar Deducciones</a></li>
						<li><a href="../NominaDeduccion/NominaDeduccion1.php">Nómina Deducciones</a></li>
					</ul>
				</li>
		
				<li class="item-submenu" menu="4">
					<a href="#"><span class=" icon-menu"></span>Horas Laborales</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Horas Laborales</li>
						<li class="go-back">Atrás</li>
						<li><a href="../HoraExtra/HoraExtra1.php">Horas Éxtras</a></li>
					</ul>
				</li>
				<li class="item-submenu" menu="5">
					<a href="#"><span class=" icon-menu"></span>Otros Pagos</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Otros Pagos</li>
						<li class="go-back">Atras</li>

                     <li><a href="../Aumento/Aumento1.php">Aumento</a></li>
					  <li><a href="../NominaAumento/NominaAumento1.php">Nómina Aumento</a></li>
                    <li><a href="../PagosComplementarios/PagosComplementarios1.php">Pagos Complementarios</a></li>
                     <li><a href="../NominaPagComplementarios/NominaPagComplementarios1.php">Nómina Pagos Complementarios</a></li>
					</ul>
				</li>
				<li><a href="../../LOG/Menu_Admin.php">Atrás</a></li>
				<li><a href="../../Index.php"><i class="icono izquierda"></i>Cerrar sesion</a></li>
			</ul>
		</nav>
	</header>

<?php
//---------------------------------------------Código para limpiar -------------------------------------------------------------//
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";
$codigo="0";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  empleados");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_empleados'];

}
$codigo=$codigos + 1;
?>


<?php
//--------------------------------Bontón de Insertar----------------------------------------------------------//
//--conexion base de datos--/
include("../conexion.php");

if (isset($_POST["crs"])){
$CE=$_POST['CE'];//código de empleado
$id=$_POST['id'];//Identidad
$PN=$_POST['PN'];//Primer nombre
$SN=$_POST['SN'];//Segundo NOmbre
$PA=$_POST['PA'];//Primer Apellido 
$SA=$_POST['SA'];//Segundo Apellido
$FN=$_POST['FN'];//Fecha de nacimiento
$CORRE=$_POST['correo'];//correo
$DIR=$_POST['Dire'];//Dirrección
$TELE=$_POST['tel'];//Teléfono
$S=$_POST['SEXO'];//Sexo
$CB=$_POST['CB'];//Cuenta Bancaria
$FI=$_POST['FI'];//Fecha de Ingreso
$NAC=$_POST['Nac'];//Nacionalidad
$SB=$_POST['SB'];//Sueldo base 
$FP=$_POST['FP'];//forma de pago
$CD=isset($_POST['CD'])?$_POST['CD']:0;//código de depto
$fcha = date("Y-m-d");


if($FN>$fcha or $FI > $fcha ){
echo "<script>
     
	alert ('La fecha debe ser menor o igual a la del Sistema!!!');
 window.location='Empleados.php';
 </script>";
}
elseif($CE=="" Or $id=="" Or $PN=="" Or $SN=="" Or $PA=="" Or $SA=="" Or $CORRE=="" Or $DIR=="" Or $TELE==""  Or $CB=="" Or $SB=="") {
 echo "<script>
     
	alert ('Debe llenar todos los campos!!!');
	window.location='Empleados.php';
	</script>";
	
}else {
//------------consulta para insetar-----//
$consulta="insert into empleados (Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Fecha_nacimiento,Correo,Direccion,Telefono,Sexo,Cuenta_Bancaria,Fecha_ingreso,Nacionalidad,Sueldo_base,FormaPago,Departamento)
 VALUES('$CE','$id','$PN','$SN','$PA','$SA','$FN','$CORRE','$DIR','$TELE','$S','$CB','$FI','$NAC','$SB','$FP','$CD')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script>
     
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Empleados1.php';
	  </script>";
} else {
    /*  echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
	echo "<script>
     
	alert ('ERROR AL Ingresar !!!');
 window.location='Empleados.php';
 </script>";

        }

		mysqli_close($conexion);
	
	}//-----------------------------Cierre del If de las validaciones---------------------------------------------------//
	}
?>

<?php
//---------------------código del botón buscar -------------------------------------------------------------------------
include("../conexion.php");

if (isset($_POST["buscar"])){

$CE=$_POST["CEE"];

$registros=mysqli_query($conexion,"SELECT * FROM  empleados WHERE Cod_empleados='$CE'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_empleados'];
$Identidad=$registro['Identidad'];
$PrimerN=$registro['Primer_Nombre'];
$SegundoN=$registro['Segundo_Nombre'];
$PrimerA=$registro['Primer_Apellido'];
$SegundoA=$registro['Segundo_Apellido'];
$fechan=$registro['Fecha_nacimiento'];
$correo=$registro['Correo'];
$direccion=$registro['Direccion'];
$tel=$registro['Telefono'];
$sexo=$registro['Sexo'];
$Cuenta=$registro['Cuenta_Bancaria'];
$ingreso=$registro['Fecha_ingreso'];
$nacionalidad=$registro['Nacionalidad'];
$sueldob=$registro['Sueldo_base'];
$formapago=$registro['Cod_FormaPago'];
$CD=$registro['Cod_Depto'];


}

}

mysqli_close($conexion);

//----------------------finanlización de código botón buscar
 ?>

<?php

//------Código para el botón Limpiar------//
if (isset($_POST["limpiar"])){
$Identidad="";
$PrimerN="";
$SegundoN="";
$PrimerA="";
$SegundoA="";
$fechan="";
$correo="";
$direccion="";
$tel="";
$sexo="";
$Cuenta="";
$ingreso="";
$nacionalidad="";
$fechad="";
$sueldob="";
$formapago="";
$codigod="";

}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:Empleados1.php");
}
?>
<?php
if (isset($_POST["Siguiente"])){
header("location:../HoraExtra/HoraExtra.php");
}
?>

<form class="from"  id="form1" action= "" method="POST" >
<center>

<h1>Formulario Empleado</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Código Empleado<br/></label> </td>
	<td><input type="text" class="form" name="CE" value="<?php echo $codigo ?>" /><br/></td></tr>
	<tr><td>Departamento<br/> </td>
	<td> <select  name="CD" id="CD"  class="form"   maxlength="20">
        <?php
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT *  FROM  departamento");
         ?>
		    <?php
		 	if( $CD==1){
			
			   echo '<option value="1" >Administración</option>';
			}elseif( $CD==2){
			 echo '<option value="2" >Contabilidad</option>';
			
			}elseif( $CD==3){
			 echo '<option value="3" >Tecnología</option>';
			
			}else{
		
			 while ($valores = $registros->fetch_assoc()) {
			 	 //echo '<option value="0" >nombre</option>';
				 echo  '<option class="form"  value="'.$valores["Descripcion"].'">'.$valores["Descripcion"].'</option>';
			 }
			}
			
		?>
	</select></td></tr>
	
<tr><td>Identidad<br/> </td>
<td> <input type="text" class="form"  name="id" value="<?php echo $Identidad?>" size="15" maxlength="15" onKeyPress=" return SoloNumeros (event)" onpaste="return false" /><br/>
</td></tr>
	<tr><td>Primer Nombre<br/> </td>
	<td><input type="text" class="form"  name="PN" value="<?php echo $PrimerN?>" size="20"  maxlength="20" onKeyPress=" return SoloLetras (event)" onpaste="return false" /><br/>
 </td></tr>
	<tr><td>Segundo Nombre<br/> </td>
	<td><input type="text" class="form"  name="SN" value="<?php echo $SegundoN?>" onKeyPress=" return SoloLetras (event)" onpaste="return false" /></td></tr>
	<tr><td>Primer Apellido<br/> </td>
	<td> <input type="text" class="form"  name="PA" value="<?php echo $PrimerA?>" size="20" maxlength="20" onKeyPress=" return SoloLetras (event)" onpaste="return false"/><br/>
</td></tr>
	<tr><td>Segundo Apellido<br/> </td>
	<td> <input type="text" class="form"  name="SA" value="<?php echo $SegundoA?>" size="20" maxlength="30" onKeyPress=" return SoloLetras (event)" onpaste="return false" /><br/>
</td></tr>
	<tr><td>Fecha de  Nacimiento<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FN" value="<?php echo $fechan?>" size="20"  maxlength="30" /><br/>
</td></tr>
<tr><td>Fecha de  Ingreso<br/> </td>
	<td> <input id="date" class="form"  type="date" name="FI" value="<?php echo $ingreso?>" size="20" maxlength="30" /><br/>
</td></tr>
	<tr><td>Correo Electrónico <br/> </td>
	<td><input type="email" class="form"  name="correo" value="<?php echo $correo?>" size="20" maxlength="30" /><br/> 
 </td></tr>
	<tr><td>Dirección<br/> </td>
	<td><input type="text" class="form"  name="Dire" value="<?php echo $direccion?>" size="20" maxlength="30" /><br/>
 </td></tr>
	<tr><td>Teléfono<br/> </td>
	<td> <input type="text" class="form"  name="tel" value="<?php echo $tel?>" size="15" maxlength="15" onKeyPress=" return SoloNumeros (event)" onpaste="return false"  /><br/>
	</td></tr>
	<tr><td>Sexo<br/> </td>
	<td><select  name="SEXO" id="SEXO"  class="form"  maxlength="20">
	
	    <?php

		 	if( $sexo=='F'){
			
			  echo '<option value="F" >Femenino</option>';
			}elseif( $sexo=='M'){
			 echo '<option value="M" >Masculino</option>';
			
			}else{
			echo '<option value="" >Seleccione</option>';
			echo '	<option  class="form"  value="F" maxlength="20" >Femenino</option>';
            echo ' <option class="form" value="M" maxlength="20" >Masculino</option>';
			}	
		?>
	</select></td></tr>

	<tr><td>Nacionalidad<br/> </td>
		<td><select  name="Nac" id="Nac"  class="form"  maxlength="20">
	
	    <?php

		 	if( $nacionalidad=='Hondureña'){
			
			  echo '<option value="Hondureña" >Hondureña</option>';
			}elseif( $nacionalidad=='Extranjero'){
			 echo '<option value="	Extranjero" >Extranjero</option>';
			
			}else{
			echo '<option value="" >Seleccione</option>';
			echo '	<option  class="form"  value="Hondureña" maxlength="20" >Hondureña</option>';
            echo ' <option class="form" value="Extranjero" maxlength="20" >Extranjero</option>';
			}	
		?>
	</select></td></tr>
	<tr><td>Forma de Pago<br/> </td>
	<td><select name="FP" class="form"  maxlength="20">

         
		    <?php
		 	if( $formapago==1){
			
			   echo '<option value="1" >Mensual</option>';
			}elseif( $formapago==2){
			 echo '<option value="2" >Quincenal</option>';
			
			}else{
				echo '<option value="" >Seleccione</option>';
				echo '	<option  class="form"  value="Mensual" maxlength="20" >Mensual</option>';
				echo '	<option  class="form"  value="Quincenal" maxlength="20" >Quincenal</option>';

			 }
			
			
		?>
	</select></td></tr>
	<tr><td>Sueldo Base<br/> </td>
	<td>
<input type="text" name="SB" class="form"  value="<?php echo $sueldob?>" size="15" maxlength="15" onKeyPress=" return SoloNumeros (event)" onpaste="return false"  /><br/>
 </td></tr>
	<tr><td> Número de cuenta Bancaria<br/> </td>
	<td> <input type="text" class="form"  name="CB" value="<?php echo  $Cuenta?>" size="20" maxlength="30" onKeyPress=" return SoloNumeros (event)" onpaste="return false" /><br/>
</td></tr>
	

           
</table>
<br>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="Siguiente"><i class="fas fa-share-square"></i></button>

<br>

<br>
<label>Código de Empleado:</label>
<input type="text" name="CEE" value="" size="5" maxlength="5" />
<button name="buscar"><i class="fas fa-search"></i></button>


<br/>
</div>
</form>

</body>
</html>





