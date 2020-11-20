
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
.btn-btn-primary {
		width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;
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
#header{
	list-style:none;
	padding:20;
	margin:auto;
	width:200%;
	max-width:1200px;
	font-family:"Times New Roman", Times, serif;
	text-align:center;
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
	min-width:140px;
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
			right:-140px;
			top:0px;
			opacity:1;
			visibility:visible;
		}

iframe{
	border:none;
	width:100%;
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
	max-width:750px;
	margin:auto;
	}
.nav a{
	text-align:center;
	text-decoration:none;
	display:block;
	padding:15px;
	color:white;
	font-size:20px;
	
}
</style>
</head>

<body>

<?php
if (isset($_POST["Regresar"])){
header("location:../LOG/menu.php");
}
?>
<td><a href="../menu.php"><img src="../../IMG/nominas.jpg" class="ima"  align="left" width="120px" height="120px"></a></td>
<h1>NOMINAS $OLUTION</h1>

<header>
<div id="header">
<ul class="nav">
<li><a href="Informacion.php">Informacion Personal</a></li>
 <li><a href="../detalle/Detalle.php">Detalle Planilla</a></li>
 <li><a href="#">Detalle de Pagos</a></li></br></br></br>
</ul>
</div>
</nav><br/><br/>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Actualizar Informcaion</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->

<tr><td><label>Codigo Empleados:</label></td>
<td><input type="text" name="CE" size="5" maxlength="5"  value="<?php echo $con[0]; ?>"></td></tr>

<tr><td><label>Telefono:</label></td>
<td><input type="text" name="T" size="15" maxlength="15" value="<?php echo $con[1]; ?>"></td></tr>

<tr><td><label>Direccion:</label></td>
<td><input type="text" name="D" size="20" maxlength="20" value="<?php echo $con[2]; ?>"></td></tr>

<tr><td><label>Correo:</label></td>
<td><input type="text" name="C"  size="20" maxlength="20" value="<?php echo $con[3];?>"></td></tr>

<br/>
<br/>
</table>
<br/>

<a href="#"><button type="submit" name="guardar" value="guardar" class="boton-actualizar"><i class="fas fa-edit"></a></i></button>
<button name="Regresar" class="Boton-Regresar"><i class="fas fa-reply"></i></button>
<br/><br/></center>

</div>
</form>
</body>
</html>