<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<script src="../Informacion/bd/jquery-3.5.1.min.js"></script>
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
	padding:05px;
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
	<legth>
<!--<img src="../IMG/nominas.jpg"  width="350px" height="350"  />-->
</legth>
<div class="barra">
<h2>Menu</h2>
<ul>
<li><a href="../FORMULARIOS/rol.php">Rol</a></li>
<li><a href="../FORMULARIOS/Privilegios.php">Privilegios</a></li>
<li><a href="../FORMULARIOS/RolPrivilegios.php">Rol_Privilegios</a></li>
<li><a href="../FORMULARIOS/Departamento.php">Departamentos</a></li>
<li><a href="../FORMULARIOS/FormaPago.php">Formas de Pago</a></li>
<li><a href="../FORMULARIOS/Empleados.php">Empleados</a></li>
<li><a href="../FORMULARIOS/Usuario.php">Usuarios</a></li>
<li><a href="../FORMULARIOS/Jornada.php">Jornada</a></li>
<li><a href="../FORMULARIOS/TipoHE.php">Tipo de Hora Extra</a></li>
<li><a href="../FORMULARIOS/HoraExtra.php">Horas Extras</a></li>
<li><a href="../FORMULARIOS/Deducciones.php">Deducciones</a></li>
<li><a href="../FORMULARIOS/NominaDeduccion.php">Nomina Deducciones</a></li>
<li><a href="../FORMULARIOS/PagosComplementarios.php">Pagos Complementarios</a></li>
<li><a href="../FORMULARIOS/NominaPagComplementarios.php">Nomina Pagos Complementarios</a></li>
<li><a href="../FORMULARIOS/Aumento.php">Aumento</a></li>
<li><a href="../FORMULARIOS/NominaGeneral.php">Nomina General</a></li>
<p><a href="../Index.php">Cerrar sesion</a></p>
</ul>

<ul class="nav nav-pills">
								<li role="presentation"><a href="../Informacion/quienes_somos.html">�Qui�nes Somos?</a></li>
		
							</ul>
</div>
<div class="contenido">
<span class="icon-menu abri"></span>
</div>
<script src="../Informacion/bd/main.js"></script>

</body>
</html>
