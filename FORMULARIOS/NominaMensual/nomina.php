<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<style>
/*-----------------------------------código_css-------------------------------------------------------------------------------*/
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
	font-size:12px;
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
.boton_Añadir{
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

.boton_Añadir:hover{
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
if (isset($_POST["Crear"])){


include("../conexion.php");

 $registros=mysqli_query($conexion,"select Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Sueldo_base FROM  empleados WHERE Cod_FormaPago=1");


while ($registro= mysqli_fetch_array($registros)){
$CE=$registro['Cod_empleados'];
$ID=$registro['Identidad'];
$PN=$registro['Primer_Nombre'];
$SN=$registro['Segundo_Nombre'];
$PA=$registro['Primer_Apellido'];
$SA=$registro['Segundo_Apellido'];
$sueldo=$registro['Sueldo_base'];
$Codigo=$_POST["CHE"];
$fecha = date("Y-m-d");


$sql="insert into 
nominageneral(Cod_Nomina,Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Sueldo_base,Fecha_Generada)
 VALUES('$Codigo','$CE','$ID','$PN','$SN','$PA','$SA','$sueldo','$fecha')";
 
 
 if (mysqli_query($conexion, $sql)) {
   	echo "<script> 
	     alert ('Operacion Realizada!!!');
	  window.location='nomina.php';
	  </script>";  
	  
}
  
/*$registross="insert into 
nominageneral(Cod_Nomina,Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Sueldo_base)
 VALUES('$nomina','$CE','$ID','$PN','$SN','$PA','$SA','$sueldo')";*/

}
}
?>


<?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>

<input type="hidden" id="CE" value="<?php echo $codigo;?>">

<?php
if (isset($_POST["Regresar"])){
header("location:../../LOG/Menu_Admin.php");
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
	 <h1>Nómina General</h1>
	 </center>
	 <center>

	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
      <table border="1" class="color-Tabla" align="left">
          <td align="legth"><img src="../../IMG/nominas.jpg" width="150px">
          </td></table>

          <table border="1" class="color-Tabla" align="right">
          <tr class="Estilo-tabla" align="">
          <td>Periodo de Pago</td> </tr>
          <tr><td>Noviembre/01/2020-Noviembre/30/2020</td></tr>
          <tr class="Estilo-tabla"align="regth" ><td>Fecha de Liquidación</td></tr>
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
<div class="form-group">

<table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla">
       <td>Código Nómina</td> 
    </tr>
          <tr>
				<td><input type="text" class="form" name="CHE" value="<?php echo $Codigo ?>"size="20" maxlength="20" /><br/></td>
				</tr>
				<tr>
				<td><button name="Crear"  class="boton_Añadir">Crear Nomina Mensual<i class="fas fa-plus"></i></button></td>
				</tr>


     </table>
	 <br><br/> <br><br/> 
	<!--<button name="Insertar"  class="boton_Añadir">Añadir Usuario  <i class="fas fa-plus"></i></button>
   <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>  
<center>

<table id="tablaNominaGeneral" border="10" class="color-Tabla" style="width:100%"><br/><br/>

<thead class="text-center" border="10" color="black">
       <th rowspan="2" >Código</th> <br/><br/>
       <th rowspan="2">Nombre Completo</th>
       <th rowspan="2">Sueldo Ordinario</th>
       <th colspan="3">Horas Extra</th>
       <th rowspan="2">Total Devengado</th>
	   <th colspan="2">Deducciones </th>
	   <th rowspan="2">Total Deducciones</th>
	   <th rowspan="2">Total Complementarios</th>
	   <th rowspan="2">Total Aumento</th>
	    <th rowspan="2">Sueldo Neto</th>
	  <th rowspan="2">Eliminar</th>
	   <th rowspan="2">Calcular</th>
   
    <tr>   
        <th>Cant. Hr/Extras</th>
        <th>Valor hora</th>
        <th>Total</th>
        <th>IHSS</th>
        <th>RAP</th>
    </tr>
	  </thead>
                <tbody>
    <?php
		$fcha = date("Y-m-d");
		$sql="SELECT * FROM nominageneral";
  
  
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
		echo "<td>";echo $mostrar['IHSS']; echo"</td>";
		echo "<td>";echo $mostrar['RAP']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Deducciones']; echo"</td>";
		echo "<td>";echo $mostrar['Total_PagosComplementarios']; echo"</td>";
	    echo "<td>";echo $mostrar['Total_aumento']; echo"</td>";	
	    echo "<td>";echo $mostrar['SUELDO_NETO_Pagar']; echo"</td>";	
		echo "<td><a href='Eliminar.php?CE=".$mostrar['Cod_empleados']."'><button name='Eliminar' class='boton-eliminar' ><i class='far fa-trash-alt'></a></i></button></td>";
		/*echo "<td><a href='../HoraExtra/HoraExtra.php?'CE=".$mostrar['Cod_empleados']."'><button name='bot_actualizar' class='boton-calcular'><i class='fas fa-calculator'></a></i></button></td>";*/
			echo "<td><a href='HoraExtra/HoraExtra.php?CE=".$mostrar['Cod_empleados']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-calculator'></a></i></button></td>";

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
 
     
    <!-- para usar botones en datatables JS -->  
 
    
    </body>
    </html>