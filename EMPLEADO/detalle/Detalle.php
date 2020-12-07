<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
body{
	margin:0;
    padding:0;
	box-sizing:border-box;
    height:100%;
	width:100%;
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
	}
*{
	padding:40;
	margin:0;
	box-sizing:border-box;
	
}
#header{
	list-style:none;
	padding:20;
	margin:auto;
	width:200%;
	max-width:1200px;
	font-family:"Times New Roman", Times, serif;
	text-align:center;
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
.from{
padding:110px;
/*background:black;*/

	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Times New Roman";
	color:White;
	/*box-shadow:7px 13px 37px #000;*/
}
h1{
	font-size:25px;
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
	ul ,ol {
		list-style:none;
		}
.nav > li{
	float:left;
	display:inline-block;
	text-align:center;
	position:relative center;
	}		
		
.nav li a{
	background-color:#BDBDBD;	
	text-decoration:none;
	color:black;
	padding:15px 30px;
	display:block;

}

.nav li a:hover{
	color:#00F;
	transition:all .3s;
	/*color:*/
		
	}
	
.nav li ul{
	display:none;
	position:absolute;
	min-width:180px;
}

.nav li:hover > ul{
	display:block;
	}
	
.nav li ul li{
		position:relative;
		opacity:1;
		visibility:visible;
		}
		
.nav li ul li ul{
			right:-190px;
			top:0px;
			opacity:1;
			visibility:visible;
		}

iframe{
	border:none;
	width:110%;
	margin:0 auto;
	display:inline-block;
	padding:0em;

}
.ima{
	max-width:100%;
	border: #BDBDBD;
}
ul{
	list-style:none;
	max-width:790px;
	margin:auto;
	}
.nav a{
	text-align:center;
	text-decoration:none;
	display:block;
	padding:12px;
	color:white;
	font-size:15px;
	
}
</style>
</head>

<body>
<?php
//---------------------------------------------Código para limpiar -------------------------------------------------------------//

$puesto="";
$HE="";
$TI="";
$PRES="";
$IHSS="";
$ingreso="";
$sueldo="";
$TOTAD="";
$PAG="";
$TD="";
$PC="";
$SB="";
$P="";
$PT="";
$F="";
$A="";
$N="";
$D="";
$CE="";
$SP="";
?>
<?php



//----------------------finanlización de código botón buscar
 ?>
<?php
if (isset($_POST["buscar"])){
$F=$_POST["ff"];
include("../../LOG/login.php");

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$registros=mysqli_query($conexion,"SELECT * FROM empleados WHERE Cod_empleados='$CE'");

while ($registro= mysqli_fetch_array($registros)){
$N=$registro['Primer_Nombre'];
$A=$registro['Primer_Apellido'];
$D=$registro['Departamento'];
$sueldo=$registro['Sueldo_base'];
}

$regi=mysqli_query($conexion,"SELECT * FROM nominageneral where Cod_empleados='$CE' and Fecha_Generada='$F'");

while ($registro= mysqli_fetch_array($regi)){
$HE=$registro['TotalP_HE'];
$PC=$registro['Total_PagosComplementarios'];
$TD=$registro['Total_Deducciones'];
$SP=$registro['SUELDO_NETO_Pagar'];
}




}

?>




<?php
if (isset($_POST["Regresar"])){
header("location:../../LOG/menu.php");
}
?>
<td><a href="../../LOG/menu.php"><img src="../../IMG/nominas.jpg" class="ima"  align="left" width="120px" height="120px"></a></td>
<h1>NOMINAS $OLUTION</h1>
<header>
<div id="header">
<ul class="nav">
<li><a href="../Informacion/Informacion.php">Informacion Personal</a></li>
 <li><a href="Detalle.php">Detalle Planilla</a></li>
 <li><a href="#">Detalle de Pagos</a></li>
 <li><a href="../../index.php">Cerrar sesión</a></li></br></br></br>
</ul>
</div>
</nav>
<form class="from"  id="form1" action="" method="POST">
<center>
<div class="form-group">
<table border="1" class="table table-condensed" style="width: 100%">
<h1>Informaciòn del Empleado</h1>
<label>fecha: </label><input type="date" id="ff" name="ff"> 
<button name="buscar"><i class="fas fa-search"></i></button>
<br/><br/>
<tr><td><label>Código Empleado:</label></td>
<td><input type="text" name="CE" size="5" maxlength="5" value="2"></td>

<td><label>Departamento:</label></td>
<td><input type="text" name="D" size="25" maxlength="15" value="<?php echo $D?>"></td></tr>

<tr><td><label>Nombre:</label></td>
<td><input type="text" name="N" size="25" maxlength="5" value="<?php echo $N?>">

<td><label>Apellido:</label></td>
<td><input type="text" name="A" size="25" maxlength="15" value="<?php echo $A?>"></td></tr>


<td><label>Suledo  base:</label>
<td><input type="text" name="SB" size="25" maxlength="15" value="<?php echo $sueldo?>"></td></tr>



<tr><td align="center"><label>Ingresos</label></td></tr>


<tr><td><label>Pagos por Horas Extras:</label></td>
<td><input type="text" name="HE" size="25" maxlength="5" value="<?php echo $HE?>"></td></tr>

<tr><td><label>Total Pagos Complementarios:</label></td>
<td><input type="text" name="PC" size="25" maxlength="15" value="<?php echo $PC?>"></td></tr>

<tr><td align="center"><label>Deducciones</label></td></tr>


<tr><td><label>Total Deducciones:</label></td>
<td><input type="text" name="TD" size="25" maxlength="5" value="<?php echo $TD?>">

<tr><td><label>Sueldo Neto:</label>
<td><input type="text" name="PT" size="25" maxlength="15" value="<?php echo $SP?>"></td></tr>
</table>
<br/>
<center>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<br/><br/></center>

</div>
</form>
</body>
</html>