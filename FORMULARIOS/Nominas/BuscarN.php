<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
/*-----------------------------------c?digo_css-------------------------------------------------------------------------------*/
body{
    margin:0;
    padding:0;
	box-sizing:border-box;
   /* background:black;*/
    height:100%;
	width:100%;
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
	background-attachment: fixed;
	color:red;
}

th{
	border:none;
	padding:10px;
	text-align:center;
	color:#FFFFFF;
	font-family:Times New Roman;
	font-size:15px;
	 background:#346BFB;
 font-family:Times New Roman ;
}
td{
	border:none;
	padding:10px;
	text-align:center;
}

tr:nth-child(even){

	background:#F5F5F5;
}
 
.from{
	margin:auto;
	margin-top:-10PX;
	border-radius:4px;
	font-family:Times New Roman ;
	color:black;
}
h1{
	font-size:40px;
	margin-bottom:35px;	
	color: blanchedalmond;
	font-family:Times New Roman;
	}
	
.form-group{
	padding:50px;
	border-radius:6px;
	margin-bottom:16px;
	border:1px solid #1f53c5;
	font-family:Times New Roman ;
	font-size:18px;
	}
.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	font-family:Times New Roman ;
   	border:solid 10px #346BFB ;

}


/*iconos*/
.fa-trash-alt{
color:red;
background:white;
border:none;
font-weight:bold;

}
.fa-search-plus
{
color:#009999;
background:white;
border:none;
font-weight:bold;

}

.boton-eliminar{

background:white;
border:none;
font-weight:bold;

}

.boton-actualizar{

background:white;
border:none;
font-weight:bold;

}

.fa-edit{
color:green;


}
.boton_Agregar{
	margin-left:0%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:8.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	background:#346BFB;
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;

}
.Boton-Regresar
{
	margin-left:90%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	align:center;
    background:#346BFB;
	/* */
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;

}
.Estilo-tabla{
   background:#346BFB;
   color:white;

}

.boton_Agregar:hover{
	margin-left:10%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
	padding-top:0.5%;
	padding-bottom:0.5%;
	background:#173687;
	border:solid 1px #346BFB ;
	text-transform:uppercase;
	font-weight:bold;
	letter-spacing:0.06em;
	cursor:pointer;

}
</style>
  
</head>

<body>
<?php 
$Codigo="";
 ?>	
<?php

?>






<?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>

<input type="hidden" id="CE" value="<?php echo $codigo;?>">

<?php
if (isset($_POST["Regresar"])){
header("location:../estructura.php");
}
?>
<?php
if (isset($_POST["Exportar"])){
header("location:NominaPDF.php");
}
?>
  
<div class="Container">
	
  <div class="form-group">
	 
	 <center>
	 <h1>N�mina de la Primer Quincena del Mes</h1>
	 </center>
	 <center>

	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
      <table border="1" class="color-Tabla" align="left">
          <td align="legth"><img src="../../IMG/nominas.jpg" width="150px">
          </td></table>

          <table border="1" class="color-Tabla" align="right">
          <tr class="Estilo-tabla"align="regth" ><td>Fecha de Elaboraci�n de Nomina</td></tr>
		    <?php $fcha = date("Y-m-d");?>
          <tr><td><?php echo $fcha;?></td></tr>
        </tr>
        </table>
		</div>
	</table>
    </center>
	<br><br/>
	<br><br/>
	<br><br/>
	<br><br/>
	<br><br/>
	<form class="from"  id="form1" action= "" method="POST" >
<center>


<table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla">
       <td>C�digo N�mina</td> 
    </tr>
          <tr>
				<td><input type="text" class="form" name="CHE" value="                           2"  size="20" maxlength="10" readonly="readonly"/><br/></td>
				</tr>
				<tr>
				<td><button name="Crear"  class="boton_Aadir">Crear N�mina Quincenal<i class="fas fa-plus"></i></button></td>
				</tr>


     </table>
	 <br><br/> <br><br/> 

 <div class="form-group">    
  
    <script type="text/javascript" src="main.js"></script>  
<center>

<table id="tablaNominaGeneral" border="10" class="color-Tabla" style="width:100%"><br/><br/>

<thead class="text-center" border="60" color="black">
       <th rowspan="2" >C�digo</th> <br/><br/>
       <th rowspan="2">Nombre Completo</th>
       <th rowspan="2">Sueldo Ordinario</th>
       <th colspan="3">Horas Extra</th>
       <th rowspan="2">Total Devengado</th>
	   <th rowspan="2">Total Deducciones</th>
	   <th rowspan="2">Total Complementarios</th>
	   <th rowspan="2">Total Aumento</th>
	    <th rowspan="2">Sueldo Neto</th>
	   <th rowspan="2">Calcular</th>
   
    <tr>   
        <th>Cant. Hr/Extras</th>
        <th>Valor hora</th>
        <th>Total</th>
    </tr>
	  </thead>
                <tbody>
    <?php
		$fcha = date("Y-m-d");
		$sql="SELECT * FROM nominageneral Where FormaPago='Quincenal' and Fecha_Generada='2020-12-15'";
  
  
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
  
  echo "<tr>";
		echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";
		echo "<td>";echo $mostrar['Primer_Nombre']; echo " ";
		echo $mostrar['Primer_Apellido']; echo " ";
		echo $mostrar['Segundo_Apellido']; echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_base']; echo"</td>";
		echo "<td>";echo $mostrar['Cant_Horas']; echo"</td>";
		echo "<td>";echo $mostrar['Costo_U']; echo"</td>";
		echo "<td>";echo $mostrar['TotalP_HE']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Devengado']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Deducciones']; echo"</td>";
		echo "<td>";echo $mostrar['Total_PagosComplementarios']; echo"</td>";
	    echo "<td>";echo $mostrar['Total_aumento']; echo"</td>";	
	    echo "<td>";echo $mostrar['SUELDO_NETO_Pagar']; echo"</td>";	
		/*echo "<td><a href='../HoraExtra/HoraExtra.php?'CE=".$mostrar['Cod_empleados']."'><button name='bot_actualizar' class='boton-calcular'><i class='fas fa-calculator'></a></i></button></td>";*/
			echo "<td><a href='NominaDeduccion.php?CE=".$mostrar['Cod_empleados']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-calculator'></a></i></button></td>";

		echo "</tr>";
		  
	?>

<?php
}
?>



</center>

 </tbody>
   </table> <br/><br/>
	</center>
	<br/>
	<button name="Regresar" class="Boton-Regresar" ><i class="fas fa-reply"></i></button>
    </form>

<br>
	</div>
		</div>
	</div>
	</div class="color-Tabla">

 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/> 
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaNominaGeneral').DataTable(); 
      });
    </script>
 
    </body>
    </html>