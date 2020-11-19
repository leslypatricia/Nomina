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
	
  <div class="form-group">
	 
	 <center>
     <table border="1" class="color-Tabla" align="left">
	 <tr class="Estilo-tabla" align="regth"> <h1>Recibo De Nómina</h1>
             <td>
           <p>Nombre de la empresa</p>
            <p><center>Reg</center></p>
            <p>DONDE ESTA UBICADA LA EMPRESA</p>
            <p>LA DIRECCION TAMBIEN</p>
            </td>
         </tr>
        </table><br/><br/>
	 </center>
	 <center>
	  <div class="form">
	  <form class="from"  id="form1" action= "" method="POST" >

          <table border="1" class="color-Tabla" align="rigth">
          <tr class="Estilo-tabla" align="regth">
          <td>FOLIO</td> </tr>
          <tr><td>2020</td></tr>
        </tr>
        </table><br/><br/><br/><br/>
        <h1>RECIBO DE PERCEPCIONES Y DEDUCCIONES</h1>
		</div>
	</table>
    </center>
    <table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla">
       <td>Código Nómina</td> 
       <td>Código Nómina</td> 
       <td>Código Nómina</td> 
       <td>Código Nómina</td> 
       <td>Código Nómina</td> 
    </tr>
    <?php 
	/*
    $sql="SELECT Cod_Nomina from nominageneral " ;
    
        $res=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($res)){*/
            echo "<tr>";
            echo "<td>";echo "1"; /*$mostrar['Cod_Nomina'];*/ echo"</td>";
            echo "<td>";echo "1"; /*$mostrar['Cod_Nomina'];*/ echo"</td>";
            echo "<td>";echo "1"; /*$mostrar['Cod_Nomina'];*/ echo"</td>";
            echo "<td>";echo "1"; /*$mostrar['Cod_Nomina'];*/ echo"</td>";
            echo "<td>";echo "1"; /*$mostrar['Cod_Nomina'];*/ echo"</td>";
            echo "<tr>";
    ?>
    <?php //}?>
	 </table><br/><br/><br/><br/>
	 <!--

		-->
	 
     <h1 align="left">PERCEPCIONES</h1> 
<div class="container-table">	
<table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla" >
       <td >Código Empleado</td> 
       <td >Concepto</td>
       <td >Cantidad</td>
       <td >Valor</td>
       <td>Editar</td>
	</tr>
    <?php
  $sql="SELECT * FROM empleados";
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
  
        echo "<tr>";
		echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";
		echo "<td>";echo $mostrar['Primer_Nombre'];echo"</td>";
		echo "<td>";echo $mostrar['Sueldo_base']; echo"</td>";
		echo "<td>";echo $mostrar['Telefono']; echo"</td>";	
		echo "<td><a href='Actualizar.php?CE=".$mostrar['Cod_empleados']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-edit'></a></i></button></td>";
		echo "</tr>";
     /* */   
			
	?>

<?php
}
?>
</div class="color-Tabla">
   </table>
<!-- 

--> 
    <div class="container-table">
    <!--<h1 align=rigth> DEDUCCIONES</h1>-->
    <table border="1" class="color-Tabla" align="rigth">
    <h1 align="rigth">DEDUCCIONES</h1>
    <tr class="Estilo-tabla" >
       <td >Código Empleado</td>
	   <td >Concepto </td>
	   <td >Saldo</td>
	   <td >Valor</td>
	   <td>Editar</td>
    </tr >
<?php 
  $sql="SELECT * FROM empleados";
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";
echo "<td>";echo $mostrar['Primer_Nombre'];echo"</td>";
echo "<td>";echo $mostrar['Sueldo_base']; echo"</td>";
echo "<td>";echo $mostrar['Telefono']; echo"</td>";	
echo "<td><a href='Actualizar.php?CE=".$mostrar['Cod_empleados']."'><button name='Actualizar' class='boton-actualizar'><i class='fas fa-edit'></a></i></button></td>";
echo "</tr>";
?>
<?php 
}
?>
</div class="color-Tabla">
   </table> <br/><br/>

  <!-- 
      
-->
<div class="container-table">
    <!--<h1 align=rigth> DEDUCCIONES</h1>-->
    <table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla" >
	   <td>Total Percepciones</td>
	   <td>   </td>
	   <td>Total Deducciones</td>
	   <td>   </td>
    </tr >
<?php 
  $sql="SELECT * FROM empleados";
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";	
echo "</tr>";
?>
<?php 
}
?>
</div class="color-Tabla">
   </table> <br/><br/><br/><br/>
 <!--
     
-->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="container-table">
    <!--<h1 align=rigth> DEDUCCIONES</h1>-->
    <table border="1" class="color-Tabla" align="left">
    <tr class="Estilo-tabla" >
	   <td>Neto a Pagar</td>
    </tr >

<?php  $sql="SELECT * FROM empleados";
  $res=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($res)){
echo "<tr>";
echo "<td>";echo $mostrar['Cod_empleados']; echo"</td>";	
echo "</tr>";?>
<?php 
}
?>
</div class="color-Tabla">
   </table> 
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


<h1>_____________________</h1>
	<h1 align="">Firma
</h1>
	<td><button name="Regresar" class="Boton-Regresar" ><i class="fas fa-reply"></i></button>
	</div>
	</div>

    </form>
</div>
<br>
    </body>
    </html>
