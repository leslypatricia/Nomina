<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="1.css">
<script src="jquery-3.5.1.min.js"></script>
<style type="">
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
	padding:50;
	margin:0;
	box-sizing:border-box;
	
}
h1{
	text-align:center;
	font-family:"Tempus Sans ITC";
	color:white;
	width:-50%;
}
#header{
	list-style:none;
	padding:20;
	margin:auto;
	width:200%;
	max-width:1250px;
	font-family:"Times New Roman", Times, serif;
	text-align:center;
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
.izquierda{
	float:left;
	position:relative;
	margin:4rem auto;
	padding:60px;
	color:#ffff;
	margin:10px;
}
.medio1{
    float:left;
	position:relative;
	margin:4rem auto;
	padding:60px;
	color:#ffff;
	margin:10px;
	}
.medio2{
	float:left;
	position:relative;
	margin:4rem auto;
	padding:60px;
	color:#ffff;
	margin:10px;
	}
.Derecha{
	float:left;
	position:relative;
	margin:4rem auto;
	padding:60px;
	color:#ffff;
	margin:10px;
	}
.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	font-family:Times New Roman ;

}
</style>

</head>
<body>
<?php
if(!isset($_POST["submit"])){{
$CO=$_GET["CE"];
}
}




?>




<td><a href="menu.php"><img src="../IMG/nominas.jpg" class="ima"  align="left" width="120px" height="120px"></a></td>
<h1>NOMINAS $OLUTION</h1>

<header>
<div id="header">
<ul class="nav">

<li><button name="crs"><?php echo "<a href='Informacion.php?CE=$CO'>"?>Informacion</a></button> </li>
<li><button name="crs"><?php echo "<a href='Detalle.php?CE=$CO'>"?>Detalle Planilla</a></button></li>
 <li><button name="crsCDS"> <a href="../index.php">Cerrar sesión</a></button></li>
</ul></br></br></br>
</div>
</nav><br/><br/>
<center>
<img src="../IMG/nomina1.gif"   width="350px" height="350px">
<!--<img src="5.jpg"   align="left" align="rigth" width="375px" height="375px">-->
</center>

<footer>
<!--<div id="contenido">-->
<div class="izquierda">
<center>
<table border="1" class="color-Tabla"><td><img src="../IMG/1.png" alt="uno" align="center" width="90px" height="90x"></td></table>
<h3>Soluciones Digital</h3>
<p>Apatadas a la nuevas<br/>
formas de trabajo en linea.</p>
</center>
</div>

<div class="medio1">
<center>
<table border="1" class="color-Tabla"><td><img src="../IMG/2.png" alt="dos" align="center" width="90px" height="90x"></td></table>
<h3>Reduzca Gastos</h3>
<p>No encontar precios mas <br/>
competitivos sin perdida de calidad.</p>
</center>
</div>

<div class="medio2">
<center>
<table border="1" class="color-Tabla"><td><img src="../IMG/3.png" alt="tres" align="center" width="90px" height="90x"></td></table>
<h3>Sin Permanencia</h3>
<p>Aunque estamos seguro <br/>
de no querre marcharsenunca.</p>
</center>
</div>

<div class="Derecha">
<center>
<table border="1" class="color-Tabla"><td><img src="../IMG/4.png" alt="cuatro" align="center" width="90px" height="90x"></td></table>
<h3>Disfrute de su tiempo</h3>
<p>No volvera a perderlo en <br/>
acudir a la asesoria nunca mas.</p>
</center>
</div>

</body>
</html>

