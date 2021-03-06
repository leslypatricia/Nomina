<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
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
		/*background-repeat: no-repeat;
		background-size:1300px;
		background-position:200px 20px;
		width: 1000px;*/
}
header{
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	padding: 20px;
	background: #34495E;
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
body {
margin:0;
padding:0;
box-sizing:border-box;
background-image: url("../../IMG/Fondo10.jpg");
background-repeat: no-repeat;
background-size:cover;
background-attachment: fixed;
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

.fa-edit{
color:green;


}
.from{
padding:110px;
/*background:black;*/ /*color negro de fondo 
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
	/*box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	/*background:#00ced1;*/ /*es del color azul*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Time New Roman";
	font-size:18px;
	color:white;
	
	}
	/*color-tabla ; para la letra*/
	/*.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	/*font-family:Times New Roman ;   }*/




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
$codigo="0";
$Descripcion="";
$jefe="";

include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  departamento");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_Depto'];

}
$codigo=$codigos + 1;

?>

<?php
include("../conexion.php");
if (isset($_POST["crs"])){
$CD=$_POST['CD'];
$D=$_POST['D'];
$CF=$_POST['CJ'];
if($D=="" Or $CF==""){
	echo "<script>
     
	alert ('Debe llenar los campos!!!');
 window.location='Departamento.php';
 </script>";	
}else{
$consulta="insert into departamento(Cod_Depto,Descripcion,Cod_Jefe)
 VALUES($CD,'$D','$CF')";
 
 if (mysqli_query($conexion, $consulta)) {
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
	  window.location='Departamento1.php';
	  </script>";
} else {
	echo "<script>   
	alert ('Registro NO Ingresado Correctamente!!!');
 window.location='Departamento.php';
 </script>";
    /*  echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);*/
}
 mysqli_close($conexion);

}
}
?>

<?php
include("../conexion.php");
if (isset($_POST["buscar"])){

$CD=$_POST["CD"];

$registros=mysqli_query($conexion,"SELECT * FROM  departamento WHERE Cod_Depto='$CD'");


while ($registro= mysqli_fetch_array($registros)){

$codigo=$registro['Cod_Depto'];
$Descripcion=$registro['Descripcion'];
$Porcentaje=$registro['Cod_Jefe'];

mysqli_close($conexion);
}
}
 ?>
<form class="from"  id="form1" action= "" method="POST" >
<center>
<?php
if (isset($_POST["limpiar"])){
$codigo="0";
$Descripcion="";
$jefe="";

include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT * FROM  departamento");
while ($registro= mysqli_fetch_array($registros)){
$codigos=$registro['Cod_Depto'];

}
$codigo=$codigos + 1;

}

?>
<?php
if (isset($_POST["Regresar"])){
header("location:Departamento1.php");
}
?>
<?php
if (isset($_POST["BD"])){
header("location:http://localhost:801/phpmyadmin/");
}
?>


<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Departamento</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<center>
<tr><td><label>Código Departamentos:</label></td><td><input type="text"   aling="center"  name="CD" value="<?php echo $codigo?>" size="5" maxlength="5" /></td></tr>

<tr><td><label>Descripción:</label></td><td><input type="text" name="D" value="<?php echo $Descripcion?>" size="15" maxlength="15"onKeyPress=" return SoloLetras (event)" onpaste="return false"requered /></td></tr>

<tr><td><label>Código Jefe:</label></td><td><input type="text" name="CJ" value="<?php echo $jefe?>" size="20" maxlength="20"onKeyPress=" return SoloNumeros (event)" onpaste="return false"/></td></tr>
</center>
</table>
<center>
<br/><br/>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<br/><br/></center>


</div>
</center>
</form>
</body>
</html>