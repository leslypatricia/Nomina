<!doctype html>
<html lang="en">
  <head>
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
	padding:5px;
	text-align:center;
	color:#FFFFFF;
	font-family:Times New Roman;
	font-size:12px;
	 background:#346BFB;
 font-family:Times New Roman ;
}
td{
	border:none;
	padding:4px;
	text-align:center;
}

tr:nth-child(even){

	background:#F5F5F5;
}
 
.from{
	margin:auto;
	margin-top:-5PX;
	border-radius:4px;
	font-family:Times New Roman ;
	color:black;
}
h1{
	font-size:45px;
	margin-bottom:45px;	
	color: blanchedalmond;
	font-family:Times New Roman;
	}
	
.form-group{
	padding:60px;
	border-radius:4px;
	margin-bottom:12px;
	border:1px solid #1f53c5;
	font-family:Times New Roman ;
	font-size:11px;
	}
.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	font-family:Times New Roman ;
   	border:solid 3px #346BFB ;

}

.tilulo {
	font-size:45px;
	margin-bottom:45px;	
	color: blanchedalmond;
	font-family:Times New Roman;

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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Nomina</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS b�sico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
      
  
  <?php 
$Codigo="";
 ?>	
<?php
if (isset($_POST["Crear"])){

include("../conexion.php");

 $registros=mysqli_query($conexion,"select Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,FormaPago ,Sueldo_base FROM  empleados ");

while ($registro= mysqli_fetch_array($registros)){
$CE=$registro['Cod_empleados'];
$ID=$registro['Identidad'];
$PN=$registro['Primer_Nombre'];
$SN=$registro['Segundo_Nombre'];
$PA=$registro['Primer_Apellido'];
$SA=$registro['Segundo_Apellido'];
$FormaP=$registro['FormaPago'];
$sueldo=$registro['Sueldo_base'];

$Codigo=$_POST["CHE"];
$fecha = date("Y-m-d");


$sql="insert into 
nominageneral(Cod_Nomina,Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Sueldo_base,FormaPago,Fecha_Generada)
 VALUES('$Codigo','$CE','$ID','$PN','$SN','$PA','$SA','$sueldo','$FormaP','$fecha')";
 
 if (mysqli_query($conexion, $sql)) {
   	echo "<script> 
	     alert ('Operacion Realizada!!!');
	  window.location='nomina3.php';
	  </script>";  
	  
}
  

}
}
?>

<?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>

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
	   <div class="tilulo">
	   	 <h1>Nòmina General Mensual</h1>
		 </div>
	 </center>
	 <center>

	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
      <table border="1" class="color-Tabla" align="left">
          <td align="legth"><img src="../../IMG/nominas.jpg" width="150px">
          </td></table><br/><br/><br/><br/>

          <table border="1" class="color-Tabla" align="right">

          <tr class="Estilo-tabla"align="regth" ><td>Fecha de Elaboración</td></tr>
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
	<form class="from"  id="form1" action= "" method="POST" >
<center>


<table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla">
       <td>Còdigo Nòmina</td> 
    </tr>
          <tr>
<td><input type="text" class="form" name="CHE" value="                          1"  size="20" maxlength="10" readonly="readonly"/><br/></td>
</tr>	
<tr><td><button name="Crear"  class="boton_Añadir">Crear Nomina Mensual<i class="fas fa-plus"></i></button></td>
</tr>
     </table>
  
  	 <br><br/> <br><br/> 	 <br><br/> <br><br/> 
  <?php 
  
  ?>
  <?php
 echo "<td><a href='../nominas/generarpdf.php'><button name='pdf' class='btn btn-danger'><i class='fas fa-file-pdf'></a></i></button></td>";
                  ?>
<table id="example" class="color-Tabla"  width="100%">

<thead class="text-center" border="10" color="black">
	<tr>
       <th rowspan="2" >Codigo</th> <br/><br/>
       <th rowspan="2">Nombre Completo</th>
       <th rowspan="2">Sueldo Ordinario</th>
       <th colspan="3">Horas Extra</th>
       <th rowspan="2">Total Devengado</th>
	   <th rowspan="2">Total Deducciones</th>
	   <th rowspan="2">Total Complementarios</th>
	   <th rowspan="2">Total Aumento</th>
	    <th rowspan="2">Sueldo Neto</th>
	   <th rowspan="2">Calcular</th>
	</tr>
    <tr>   
        <th>Cant. Hr/Extras</th>
        <th>Valor hora</th>
        <th>Total</th>
    </tr>
	  </thead>
     <?php

$conexion=mysqli_connect('localhost','root','','nominas')
?>         
  <tbody>
    <?php
	
		$fcha = date("Y-m-d");
		$sql="SELECT * FROM nominageneral where FormaPago='Mensual' and Fecha_Generada='$fcha' ";
  
  
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
  
  echo "<tr>";
		echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";
		echo "<td>";echo $mostrar['Primer_Nombre']; echo " ";
		echo             $mostrar['Primer_Apellido']; echo " ";
		echo             $mostrar['Segundo_Apellido']; echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_base']; echo"</td>";
		echo "<td>";echo $mostrar['Cant_Horas']; echo"</td>";
		echo "<td>";echo $mostrar['Costo_U']; echo"</td>";
		echo "<td>";echo $mostrar['TotalP_HE']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Devengado']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Deducciones']; echo"</td>";
		echo "<td>";echo $mostrar['Total_PagosComplementarios']; echo"</td>";
	    echo "<td>";echo $mostrar['Total_aumento']; echo"</td>";	
	    echo "<td>";echo $mostrar['SUELDO_NETO_Pagar']; echo"</td>";	
			echo "<td><a href='../HoraExtra/HoraExtra.php?CE=".$mostrar['Cod_empleados']."'><button name='Calcu' class='boton-actualizar'><i class='fas fa-calculator'></a></i></button></td>";

		echo "</tr>";
		  
	?>

<?php
}
?>


</center>

 </tbody>
   </table> <br/><br/>
   <button name="Regresar" class="Boton-Regresar" ><i class="fas fa-reply"></i></button>
                    </div>
                </div>
        </div>  
    </div>    
     
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
	<script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
	<script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
 
    

   
     
    <!-- c�digo JS prop�o-->    
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>