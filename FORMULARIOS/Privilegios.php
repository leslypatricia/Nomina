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
	/*width:1000px;
		padding:40px;*/
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
	width:750px;
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
<h1>Formulario General</h1>


<div class="form-group">
<label>Cod_Empleado:</label>
<input type="text" name="CE" value="" size="5" maxlength="5" />
<label>Cod_Departamento:</label>
<select name="CD">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>
<br/><br/>
<left>
<label>N Identidad:</label>
<input type="text" name="id" value="" size="15" maxlength="15" />
</left>
<br/><br/>
<label>Primer Nombre:</label>
<input type="text" name="PN" value="" size="20" maxlength="20"/>
<label>Segundo Nombre:</label>
<input type="text" name="SN" value=""/>
<br/>
<br/>
<label>Primer Apellido:</label>
<input type="text" name="PA" value="" size="20" maxlength="20" />
<label>Segundo  Apellido:</label>
<input type="text" name="SA" value="" size="20" maxlength="30"/>
<br/>
<br/>
<label>Fecha Nacimiento:</label>
<input type="date" name="FN" value="" size="20" maxlength="30" />
<label>Fecha Ingreso:</label>
<input type="date" name="FI" value="" size="20" maxlength="30" />
<br/>
<br/>
<label>Correo:</label>
<input type="text" name="correo" value="" size="20" maxlength="30" />
<label>Direccion:</label>
<input type="text" name="Dire" value="" size="20" maxlength="30" />
<label>Telefono:</label>
<input type="text" name="tele" value="" size="20" maxlength="30" />
<br/>
<br/>
<label>Sexo:</label>
 <input type="radio" name="sexo"value="mujer" id="mujer">F</>
   <input type="radio"  name="sexo" value="hombre" id="hombre">M</>

<label>Nacionalidad:</label>
<select name="Nac">
   <option value="Hondureña">Hondureña</option>
   <option value="Extrajero">Extrajero</option>
</select>
<br/>
<br/>
<label>Sueldo Base:</label>
<input type="text" name="SB" value="" size="15" maxlength="15" />
<label>Cuenta Bancaria</label>
<input type="text" name="CB" value="" size="20" maxlength="30" />
<br/><br/>
<label>Fecha Devolucion:</label>
<input type="date" name="FD" value="" size="20" maxlength="30"  />
<label>Codigo Forma Pago:</label>
<select name="FP">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>

<br/>
<br/>
<center>
<a href="bd/Menu_Admin.php" class="btn btn-default">Regresar</a>
<a onClick="Windows.location='Actualizar.php'" class="btn btn-default">listar</a>
<span class="icon-floppy-disk"></span>
<input type="submit" name="btn-guardar" value="Guardar" class="btn-btn-success" >

<span class="icon-spinner11"></span>
<input type="submit" name="btn-actualizar" value="Actualizar" class="btn-btn-info">

<span class="icon-bin"></span>
<input type="submit" name="btn-eliminar" value="Eliminar" class="btn-btn-danger">
<br/>
<br/>


<label>Cod_Empleado:</label>
<input type="text" name="CE" value="" size="5" maxlength="5" />
<span class="icon-search">
<input type="submit" name="btn-buscar" value="Buscar" class="btn-btn-primary"></span>
<br/>
<br/>
</center>
</div>
</center></form></body></html>