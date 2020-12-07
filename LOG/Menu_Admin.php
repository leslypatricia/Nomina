
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Menu de navegacion</title>
<link rel="stylesheet" type="text/css" href="">
<script src="bd/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../codigo.js"></script>
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
	padding: 20px;
	border-bottom: 1px solid #C6D0DA;

	font-size: 22px;
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
.texto{
   display: flex;
   align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    border-radius: 20px;
    background: linear-gradient(to right, white 0%, white 50%, black 50%, black 100%);
}
.texto h1{
    background: linear-gradient(to right, black 0%, black 50%, white 50%, white 100% );
    color: white;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 80px;
    animation: texto 2s ease-in infinite;
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
.texto{
   display: flex;
   align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    border-radius: 20px;
    background: linear-gradient(to right, white 0%, white 50%, black 50%, black 100%);
}
.texto h1{
    background: linear-gradient(to right, black 0%, black 50%, white 50%, white 100% );
    color: white;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 80px;
    animation: texto 2s ease-in infinite;
}
@keyframes texto {
    0%{ transform: scale(1);}
    50%{ transform: scale(1.5);}
    100%{ transform: scale(1);}
    
}


@keyframes navlinkfade {
    from{
        transform: translateX(100%);
    }
    to{
        transform: translateX(0%);
    }
}
@keyframes salir {
    from{
        transform: translateX(0%);
    }
    to{
        transform: translateX(-150%);
    }
}
@media only screen and (max-width: 800px) {
    nav{
        flex-direction: column;
    }
    .contenedor{
        width: 100%;
    }
}
</style>


</head>
<body>
<header>
<div class="contenedor">
		  <div class="page active" id="page_uno">
		  <div class="texto" >
			  <center>
                    <h1>Nomina $olution</h1></center>
                </div></div></div>
		<span id="button-menu" class="fa fa-bars"></span>

		<nav class="navegacion">
		<?php  
		$db_host="localhost";
		$db_usuario="root";
		$db_contra="";
		$db_nombre="nominas";
		
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
		
		$sql=mysqli_query($conexion,"SELECT COUNT(*) as Usuario FROM usuario" );
			$resul=mysqli_fetch_array($sql);
			$total=$resul['Usuario'];	
		?>
		   
			<ul class="menu">
				<!-- TITULAR -->
				<li class="title-menu">Menú  de Administrador</li>
				<!-- TITULAR -->
				<a href="../FORMULARIOS/Estructura.php">Formularios</a></li>
				<li class="item-submenu" menu="1">
					<a href="#"><span class=" icon-menu"></span>Generar Nomina</a>
					<ul class="submenu">
						<li class="title-menu"><span class=" icon-menu"></span>Nóminas</li>
						<li class="go-back">Atrás</li>
						<li><a href="../FORMULARIOS/Nominas/Nomina.php">Nómina Mensual</a></li>
						<li><a href="../FORMULARIOS/Nominas/NominaQ.php">Nómina Quincenal</a></li>
					</ul>
				</li>
				<li><a href="../FORMULARIOS/Graficos/graficos.php">Graficos</a></li>
				<li><a href="../FORMULARIOS/Calendario/Calendar.html">Calendario</a></li>
      	<li role="presentation"><a href="../Informacion/quienes_somos.html"><i class="icono izquierda"></i>Derechos Reservados</a></li>
                <li><p><a href="../index.php">Cerrar sesión</a></p></li>
			
			
			</ul>
		</nav>
	</header>

	

</body>
</html>
