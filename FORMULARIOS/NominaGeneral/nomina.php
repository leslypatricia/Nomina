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
}

th, td {
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
	font-family:"Arial Black", Gadget, sans-serif;
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
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:18px;
	}
.color-Tabla {
	background:#ffffff;
	border-collapse:collapse;
	/*border-top-left-radius:100px !important;*/
	/*border-spacing: 0.5rem;  rem unidad de medida*/
	font-family:Times New Roman ;


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
	margin-left:10%;
	margin-bottom:1.5%;
	color: white;
	padding-left:1.5%;
	padding-right:1.5%;
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

$conexion=mysqli_connect('localhost','root','','nominas')
?>

<input type="hidden" id="CE" value="<?php echo $codigo;?>">

<?php
if (isset($_POST["Regresar"])){
header("location:../estructura.php");
}
?>
<div class="Container">
	<center>
  <div class="form-group">
	 <center>
	 <h1>Generar Nomina</h1>
	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >
      <table border="1" class="color-Tabla" align="left">
          <td align="legth"><img src="../../IMG/nominas.jpg" width="150px">
          </td></table>

          <table border="1" class="color-Tabla" align="rigth">
          <tr class="Estilo-tabla" align="regth">
          <td>Periodo de Pago</td> </tr>
          <tr><td>Noviembre/01/2020-Noviembre/30/2020</td></tr>
          <tr class="Estilo-tabla"align="regth" ><td>Fecha de Liquidacion</td></tr>
		    <?php $fcha = date("Y-m-d");?>
          <tr><td><?php echo $fcha;?></td></tr>
        </tr>
        </table>
		</div>
	
    </center><br/><br/>
    <table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla">
       <td>Codigo Nomina</td> 
    </tr>
    <?php 
	/*
    $sql="SELECT Cod_Nomina from nominageneral " ;
    
        $res=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($res)){*/
            echo "<tr>";
            echo "<td>";echo "1"; /*$mostrar['Cod_Nomina'];*/ echo"</td>";
            echo "<tr>";
    ?>
    <?php //}?>
     </table><br/><br/>
	<!--<button name="Insertar"  class="boton_Añadir">Añadir Usuario  <i class="fas fa-plus"></i></button>
--><div class="container-table">
	<center>
	
<table border="1" class="color-Tabla"><br/><br/>

    <tr class="Estilo-tabla" >
       <td rowspan="2">Nº_Empleado</td> <br/><br/>
       <td rowspan="2">Nombre_Completo</td>
       <td rowspan="2">Sueldo_Ordinario</td>
       <td colspan="3">Tiempo_Extra</td>
       <td rowspan="2">Total_Devengado</td>
	   <td colspan="2">Deducciones </td>
	   <td rowspan="2">Total_Deducciones</td>
	   <td rowspan="2">Total_PagosComplementarios</td>
	   <td rowspan="2">Total Aumento</td>
	    <td rowspan="2">Sueldo Neto a Pagar</td>
	   <td rowspan="2">Eliminar</td>
	   <td rowspan="2">Editar</td>
    </tr>
    <tr>   
        <th># H.EXTRA</th>
        <th>C.UNITARIO</th>
        <th>C.TOTAL</th>
        <th>IHSS</th>
        <th>RAP</th>
    </tr>
	
    <?php
  $sql="SELECT * FROM nominageneral";
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
  
  echo "<tr>";
		echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";
		echo "<td>";echo $mostrar['Primer_Nombre'];echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_base']; echo"</td>";
		echo "<td>";echo $mostrar['Cant_Horas']; echo"</td>";
		echo "<td>";echo $mostrar['Costo_U']; echo"</td>";
		echo "<td>";echo $mostrar['TotalP_HE']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Devengado']; echo"</td>";
		echo "<td>";echo $mostrar['IHSS']; echo"</td>";
		echo "<td>";echo $mostrar['RAP']; echo"</td>";
		echo "<td>";echo $mostrar['Total_Deducciones']; echo"</td>";
		echo "<td>";echo $mostrar['Total_PagosComplemetarios']; echo"</td>";
	    echo "<td>";echo $mostrar['Total_aumento']; echo"</td>";	
	    echo "<td>";echo $mostrar['SUELDO_NETO_Pagar']; echo"</td>";	
		echo "<td><a href='Eliminar.php?CE=".$mostrar['Cod_empleados']."'><button name='Eliminar' class='boton-eliminar' ><i class='far fa-trash-alt'></a></i></button></td>";
		echo "<td><a href='Actualizar.php?CE=".$mostrar['Cod_empleados']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-edit'></a></i></button></td>";
		echo "</tr>";
			
	?>

<?php
}
?>


   </div class="color-Tabla">
</center>
   </table> <br/><br/>
	</center>
	<br/>
	<td><button name="Regresar" class="Boton-Regresar" ><i class="fas fa-reply"></i></button>
	</div>
	</div>
    </form>
</div>
<br>
    </body>
    </html>
