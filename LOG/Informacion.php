
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
	background-image: url("../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
	}
*{
	padding:40;
	margin:0;
	box-sizing:border-box;
	
}
.from{
padding:110px;
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Times New Roman";
	color:white;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:25px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	/*background:#00ced1;*/ /*color azul*/
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Times New Roma";
	font-size:18px;
	
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
if (isset($_POST["Regresar"])){
header("location:menu.php");
}
?>
<?php

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(!isset($_POST["crs"])){{
$CODR=$_GET["CE"];
}
}


$registros=mysqli_query($conexion,"SELECT * From empleados WHERE Cod_empleados='$CODR'");

while ($registro= mysqli_fetch_array($registros)){
$codigo=$registro['Cod_empleados'];
$tel=$registro['Telefono'];
$correo=$registro['Correo'];
$direccion=$registro['Direccion'];
}


?>
<?

if (isset($_POST["guardar"])){

$COD=$_POST["CE"];
$DI=$_POST["D"];
$COR=$_POST["C"];
$TEL=$_POST["T"];


$registros=mysqli_query($conexion,




"update empleados set
Telefono='33',Direccion='dsfdsf' where Cod_empleados='2' ");


}



?>
<td><a href="menu.php"><img src="../IMG/nominas.jpg" class="ima"  align="left" width="120px" height="120px"></a></td>
<center>
<h1>NOMINAS $OLUTIÓN</h1>
</center>
<header>
<div id="header">
<ul class="nav">
<li><button name="crs"><?php echo "<a href='Informacion.php?CE=$CO'>"?>Informacion</a></button> </li>
<li><button name="crs"><?php echo "<a href='Detalle.php?CE=$CO'>"?>Detalle Planilla</a></button></li>
 <li><button name="crsCDS"> <a href="../index.php">Cerrar sesión</a></button></li>
</ul>
</div>
</nav><br/><br/>


<form class="from"  id="form1" action= "" method="POST" >
<center>
<h1>Actualizar Información</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Código Empleados:</label></td>
<td><input type="text" name="CE" size="5" maxlength="5"  value="<?php echo $codigo; ?>"readonly="readonly"></td></tr>

<tr><td><label>Teléfono:</label></td>
<td><input type="text" name="T" size="15" maxlength="15" value="<?php echo $tel; ?>"></td></tr>

<tr><td><label>Direccién:</label></td>
<td><input type="text" name="D" size="20" maxlength="20" value="<?php echo $direccion; ?>"></td></tr>

<tr><td><label>Correo:</label></td>
<td><input type="text" name="C"  size="20" maxlength="20" value="<?php echo $correo;?>"></td></tr>

<br/>
<br/>
</table>
<br/>

<button  name="guardar"><i class="fas fa-save"></i></button>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<br/><br/></center>

</div>
</form>
</body>
</html>