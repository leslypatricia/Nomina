<style>
body{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.from{
	/*width:1000px;
		padding:40px;*/
	background:#0CF;
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:white;
	box-shadow:7px 13px 37px #000;
}
h1{
	font-size:50px;
	margin-bottom:35px;	
	}
	
.form-group{
	width:750px;
	background:#24303c;
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

<br/><br/>

<label>N Identidad:</label>
<input type="text" name="id" value="" size="15" maxlength="15" />
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
<label>Correo:</label>
<input type="text" name="correo" value="" size="20" maxlength="30" />
<label>Direccion:</label>
<input type="text" name="Dire" value="" size="20" maxlength="30" />
<br/>
<br/>

<label>Telefono:</label>
<input type="text" name="tele" value="" size="20" maxlength="30" />

<label>Sexo:</label>
 <input type="radio" name="sexo"value="mujer" id="mujer">F</>
   <input type="radio"  name="sexo" value="hombre" id="hombre">M</>

<!--Estado Civil:
<select name="Civil">
   <option value="1">Soltero</option>
   <option value="2">Casado</option>
   <option value="3">Divorsiado</option>
   <option value="4">4</option>
   <option value="5">5</option>
</select>-->
<br/>
<br/>
<label>Cuenta Bancaria</label>
<input type="text" name="CB" value="" size="20" maxlength="30" />
<label>Nacionalidad:</label>
<input type="text" name="Nac" value="" size="20" maxlength="30"  />
<br/>
<br/>
<label>Sueldo Base:</label>
<input type="text" name="SB" value="" size="15" maxlength="15" />

<label>Fecha Nacimineto:</label>
<input type="date" name="FN" value="" size="20" maxlength="30" />
<br/><br/>
<label>Fecha Ingreso:</label>
<input type="date" name="FI" value="" size="20" maxlength="30" />
<label>Fecha Devolucion:</label>
<input type="date" name="FD" value="" size="20" maxlength="30"  />

<br/>
<br/>
<label>Codigo Forma Pago:</label>
<select name="FP">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>
<label>Cod_Departamento:</label>
<select name="CD">
<option value="0"></option>
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option  value="4">4</option>
</select>
<br/>
<br/>
<center>