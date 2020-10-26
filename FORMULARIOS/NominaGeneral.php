<!DOCTYPE html >
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<style>
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
padding:110px;
background:black;
	/*  background: -webkit-linear-gradient(right, #000000, #ffffff, #000000, #ffffff);
  background: -o-linear-gradient(right, #ffffff, #000000, #ffffff, #000000);
  background: -moz-linear-gradient(right,#ffffff, #ffffff,#000000, #000000);
  background: linear-gradient(right,  #ffffff, #000000,  #ffffff, #000000);*/
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:black;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	color: blanchedalmond;
	}
	
.form-group{
	width:900px;
	background:#00ced1;
	padding:20px;
	border-radius:4px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	
	}
.btn-btn-primary {
		width:80PX;
		background:#1f53c5;
		padding:10px;
		color:white;
		font-size:10px;
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
<form class="from"  id="form1" action="#" method="POST">
<center>
<h1>Formulario Nomina General</h1>
<div class="form-group">
<label>Codigo Nomina:</label>
<input type="text" name="CN" value="" size="5" maxlength="5" />
<left>
<label>Codigo Empleado:</label>
<input type="text" name="CE" value="" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Codigo Aumento:</label>
<input type="text" name="CA" value="" size="20" maxlength="20"/>
<label>Total:</label>
<input type="text" name="T" value="" size="20" maxlength="20"/>
<br/><br/>
<label>Fecha Generada:</label>
<input type="text" name="FG" value="" size="20" maxlength="20"/>
<br/><br/>
<center>
<a href="LOG/Menu_Admin.php" class="btn btn-default">Regresar</a>

<span class="icon-floppy-disk"></span>
<input type="submit" name="btn-guardar" value="Guardar" class="btn-btn-success" >

<span class="icon-spinner11"></span>
<input type="submit" name="btn-actualizar" value="Actualizar" class="btn-btn-info">

<span class="icon-bin"></span>
<input type="submit" name="btn-eliminar" value="Eliminar" class="btn-btn-danger">

<span class="icon-search">
<input type="submit" name="btn-buscar" value="Buscar" class="btn-btn-primary"></span>
<br/><br/>
</center>
</div>
</center>
</form>
</body>
</html>