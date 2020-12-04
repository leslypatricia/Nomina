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
<td><a href="menu.php"><img src="../IMG/nominas.jpg" class="ima"  align="left" width="120px" height="120px"></a></td>
<h1>NOMINAS $OLUTION</h1>

<header>
<div id="header">
<ul class="nav">
<li><a href="mision.html">Mision</a></li>
 <li><a href="quienes_somos.html">Quienes somos</a></li>
 <li><a href="vision.html">Vision</a></li>
 <li><a href="../../LOG/Menu_Admin.php">Atras</a></li>
 <li><a href="../../index.php">Cerrar sesión</a></li>
</ul></br></br></br>
</div>
</nav><br/><br/>



</body>
</html>

