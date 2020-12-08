<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>


<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../codigo.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<
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
padding:110px;
/*background:black;*/
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Times New Roman";
	color:white;
/*	box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	/*background:#00ced1;*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Times New Roman";
	font-size:18px;
	
	}
	
/*iconos*/
.fa-calculator{
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
.fa-calcular{
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
$IHSS="";
$RAP="";
$PRESTAMO="";


if(!isset($_POST["crs"])){
$CO=$_GET["CE"];
}

$CH="0";
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT Cod_NominaD  FROM  NominaDeducciones");
while ($registro= mysqli_fetch_array($registros)){
$CH=$registro['Cod_NominaD'];

}
$CD=$CH + 1;
$TOTALD="";

?>
<?php


if (isset($_POST["calcular"])){

//if(
	include("../conexion.php");
$CE=$_POST["CEE"];
$TOTALD="0";
$IHSS="0";
$RAP="0";
$sueldo="0";
$IVM="0";
$MATER="0";
$Prestamo="0";
$Coop="0";
$registros=mysqli_query($conexion,"SELECT Sueldo_base,FormaPago  FROM  empleados WHERE Cod_empleados='$CE'");

while ($registro= mysqli_fetch_array($registros)){
$sueldo=$registro['Sueldo_base'];
$FM=$registro['FormaPago'];

}
//$CHE=$_POST["CHE"];
$Techo='8882.30';
if(isset($_POST["1"])){
if($sueldo>=$Techo){
$IHSS=310;


}else{
$IHSS=$sueldo * 0.035;

}
}

if(isset($_POST["2"])){

$RAP=$sueldo * 0.015;

}


if(isset($_POST["3"])){

$IVM=88882.3 * 0.025;

}

if(isset($_POST["4"])){

$MATER=7000 * 0.025;

}

if(isset($_POST["5"])){

$Coop=$sueldo * 0.01;

}

if(isset($_POST["6"])){

$Prestamo=$sueldo * 0.035;

}

if($FM=="Quincena"){
$TD=$IHSS + $RAP + $Prestamo + $IVM + $MATER + $Coop;


$TOTALD=$TD/2;

}else{
$TOTALD=$IHSS + $RAP + $Prestamo + $IVM + $MATER + $Coop;

}
}

 ?>
 <?php


if (isset($_POST["crs"])){
 $fcha = date("Y-m-d");
$totald="0";
$totalPC="0";
$totalA="0";
$SueldoB="0";
$totalpagar="0";
include("../conexion.php");
$CND=$_POST["CHE"];
$CE=$_POST["CEE"];
$DE=1;


$TOTALD=$_POST["IHSS"];


$consulta="insert into nominadeducciones (Cod_NominaD,Cod_Empleados,Cod_Deducciones,Total_Deducciones)
 VALUES('$CND','$CE','$DE','$TOTALD')";
 $registros=mysqli_query($conexion,"SELECT Total_Devengado,TotalP_HE,Total_PagosComplementarios,Total_Aumento,Sueldo_base  FROM  nominageneral WHERE Cod_Empleados='$CE'");

while ($registro= mysqli_fetch_array($registros)){
$totald=$registro['Total_Devengado'];
$totalPC=$registro['Total_PagosComplementarios'];
$totalA=$registro['Total_Aumento'];
$SueldoB=$registro['Sueldo_base'];
$Total_HE=$registro['TotalP_HE'];
}
$RAP=$SueldoB * 0.015;
$IHSS=$TOTALD - $RAP;

$totalpagar=$SueldoB + $Total_HE - $TOTALD + $totalPC + $totalA;
 if (mysqli_query($conexion, $consulta)) {
 
 	$registro=mysqli_query($conexion,"update nominageneral set Total_Deducciones='$TOTALD',SUELDO_NETO_Pagar='$totalpagar' 
where Cod_empleados='$CE' and Fecha_Generada='$fcha'")
or die ("error al actualizar");
     echo "<script> 
	     alert ('Registro Ingresado Correctamente!!!');
		 window.location='../NominaPagComplementarios/NominaPagComplementarios.php?CE=$CE';

	  </script>";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
 mysqli_close($conexion);

}

?>

<?php
if (isset($_POST["Regresar"])){
header("location:../HoraExtra/HoraExtra.php");
}
?>
<?php
if(!isset($_POST["crs"])){
$CO=$_GET["CE"];
}
if (isset($_POST["Siguiente"])){
header("location:../NominaPagComplementarios/NominaPagComplementarios.php?CE=$CO");
}
?>

<form class="from"  id="form1" action= "" method="POST" >
<center>
<h1>Nómina Deduciones</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" >


	<tr><td><label>Código<br/></label> </td>
	<td><input type="text" class="form" name="CHE" value="<?php echo $CD ?>"size="20" maxlength="20" readonly="readonly" /><br/></td></tr>
	
	
	</td></tr>
	<tr><td>Código Empleado<br/> </td>
	<td><input type="text" class="form"  name="CEE"  value="<?php echo $CO ?>" size="20" maxlength="20" /><br/>
 </td></tr>


  <tr><td><label>Deducciones</label></td>
<td>
<?php
include("../conexion.php");
$registros=mysqli_query($conexion,"SELECT *  FROM  deducciones");
?>
<?php 

 while ($valores = $registros->fetch_assoc()) {

    echo '<label>';
      echo '<input  type="checkbox"  name="'.$valores["Cod_Deducciones"].'">'.$valores["Descripcion"].'';
  echo ' </label>';

  
   } 
  ?>
  <br/></td></tr>
	<tr><td><label>Total Deducciones<br/></label> </td>
	<td><input type="text" class="form" name="IHSS" value="<?php echo $TOTALD?>"size="20" maxlength="20" readonly="readonly"/><br/></td></tr>
  	
</table>
<br>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<button name="crs"><i class="fas fa-save"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button name="calcular"><i class="fas fa-calculator"></i></button>
<button name="Siguiente"><i class="fas fa-share-square"></i></button>
<br>



<br/>
</div>
</form>
</body>
</html>
