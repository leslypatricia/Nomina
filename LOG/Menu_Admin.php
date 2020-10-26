
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<script src="bd/jquery-3.5.1.min.js"></script>
<style>
*{
	box-sizing:border-box;
	margin:0;
	padding:0;
	}
	body{
		overflow:hidden;
	}
.barra{
	position:absolute;
	width:300px;
	height:100vh;
	background:#069;
	z-index:1;
}
.barra a{
	text-align:center;
	text-decoration:none;
	display:block;
	padding:15px;
	color:white;
	font-size:20px;
}
h2{
	text-align:center;
	background:#059;
	color:white;
	padding:10px;
}
li{
	outline:1px solid #059;
	transition:all .3s;
}
li:hover{
	background:#059;
	border-left:3px solid white;
}
.contenido{
	width:100%;
	height:100$;
	background:#ide;
	position:absolute;
	transition:all .3s;
}
.abrir{
	position:absolute;
	top:30px;
	left:30px;
	font-size:40px;
	cursor:pointer;
	color:#069;
}
.texto{
	width:1024px;
	margin:100px auto;
	background:white;
}
.mostrar{
	transform:translateX(300px);
}
</style>


</head>
<body>
<div class="barra">
<h2>Menu</h2>
<ul>


><li><a href="../FORMULARIOS/Estructura.php">Estructura</a></li>
<li><a href="Generar_Planilla.php">Generar_Planilla</a></li>


<li><a href="">Derechos Reservados</a></li>

<p><a href="bd/Administrador.php">Cerrar sesion</a></p>
</ul>

</div>
<div class="contenido">
<span class="icon-menu abri"></span>
</div>
<script src="bd/main.js"></script>

</body>
</html>
