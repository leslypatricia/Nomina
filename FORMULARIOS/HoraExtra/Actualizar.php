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
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
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
	font-size:50px;
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
.btn-btn-success{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.btn-btn-info{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
.btn-btn-danger{
	width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;}
</style>
</head>

<body>


<form class="from"  id="form1" action= "Actualizar2.php" method="POST" >
<center>
<h1>Formulario Hora Extra</h1>
<div class="form-group">
<table class="table table-condensed" style="width: 100%" ><!--style="width: 100%;*/-->
<tr><td><label>Codigo Hora Extra:</label></td>
<td><input type="text" name="HE" value="1" size="5" maxlength="5" />

<tr><td><label>Codigo Jornada:</label>
<td><input type="text" name="CJ" value="1" size="15" maxlength="15" />
<tr><td><label>Codigo Empleado:</label>
<td><input type="text" name="CE" value="1" size="20" maxlength="20"/>

<tr><td><label>Sueldo Ordinario:</label>
<td><input type="text" name="SO" value="20000" size="20" maxlength="20"/>

<tr><td><label>Sueldo Diario:</label>
<td><input type="text" name="SD" value="667" size="20" maxlength="20"/>

<tr><td><label>Sueldo Hora:</label>
<td><input type="text" name="SH" value="83" size="20" maxlength="20" />

<tr><td><label>Porcentaje Hora Extra:</label>
<td><input type="text" name="PHE" value="21" size="20" maxlength="20" />

<tr><td><label>Pago Hora:</label>
<td><input type="text" name="PH" value="104" size="20" maxlength="20" />

<tr><td><label>Numeros Hora:</label>
<td><input type="text" name="NH" value="10" size="20" maxlength="20" />

<tr><td><label>Total Hora Extra:</label>
<td><input type="text" name="THE" value="1042" size="20" maxlength="20" />

<tr><td><label>Fecha:</label>
<td><input type="date" name="F" value="2020-12-01" size="20" maxlength="30" />

</table>

<button name="Regresar"><i class="fas fa-reply"></i></button>
<button name="limpiar"><i class="fas fa-times"></i></button>
<button type="submit" name="guardar" value="guardar"><i class="fas fa-save"></i></button>
</div>
</form>
</body>

</html>