<?php 
ob_start();
include("../conexion.php");  // Llama al archivo que contiene la conección a la BD.

// Abre la Conexión con la BD.
//$conexion = AbreConn('dbe');

// Creo la consulta de selección SQL a la BD.
$sql = "SELECT * from nominageneral";
// Ejecuto la consulta de selección.
mysqli_set_charset($conexion,"utf8"); // Función que Codifica a UTF8 para evitar errores de JSON.
$result = mysqli_query($conexion, $sql);    
?>  

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
<title>Ejemplo de Exportación de HTML a PDF</title> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="NOINDEX,NOFOLLOW,NOARCHIVE,NOODP,NOSNIPPET">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link href="assests/bootstrap/css/bootstrap-3.3.7.min.css" type="text/css" rel="stylesheet">      
<script src="assests/jquery/jquery.min.js" type="text/javascript"></script> 
<script src="assests/bootstrap/js/bootstrap.min.js" type="text/javascript">  </script>
<style type="text/css"> thead:before, thead:after { display: none; } tbody:before, tbody:after { display: none; } </style>
</head>
<body>
<table border="0" width="100%" height="60" cellspacing="0" cellpadding="0"><tr><td>&nbsp;</td></tr></table>
<div class="container">
    <div class="btn btn-primary"><a href="generarpdf.php" style="color:#FFF; text-decoration:none; " target="_blank">Visualizar en PDF</a></div>  
<div class="row">
    <div class="col-md-14">             
        <div class="panel panel-default">
            <br><p>
            <p><font face="arial" size="5" color="#000000">Nomina Genereral</font></p> 
            <br><p>  
            <p><font face="verdana" size="3" color="#000000"><b>Noviembre</b></font></p>  
            <div class="panel-body"> 
<?php               
            echo '<table class="table table-striped table-hover table-responsive cell-border" id="Codigos_Empleados">';
                echo '<thead>';
                    echo '<tr style="background-color:#e6e6e6;">';
                        echo '<th>/th>';
                        echo '<th>Codigo Empleado</th>';
                        echo '<th>Nombre Completo</th>';
                        echo '<th>Sueldo Ordinario</th>';
                        echo '<th>Horas Extras</th>';
                        echo '<th>Total Devengado</th>';
                        echo '<th>Total Deducciones</th>';
                        echo '<th>Total Complementarios</th>';
                        echo '<th>Total Aumento</th>';
                        echo '<th>Sueldo Neto</th>'; 
						echo '<th>Status</th>';       
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                    while($row = mysqli_fetch_assoc($result)) {
                    $active = '';
                    if($row['Sueldo Neto'] == 'Activo') {
                        $active = '<label class="label label-success">Activo</label>';
                    } else {
                        $active = '<label class="label label-danger">Inactivo</label>'; 
                    }

                    echo '<tr>';
                        echo '<td>'.$row['Cod_empleados'].'</td>';
                        echo '<td>'.$row['Primer_Nombre'].'</td>';
                        echo '<td>'.$row['Sueldo_base'].'</td>';
                        echo '<td>'.$row['Cant_Horas'].'</td>';
                        echo '<td>'.$row['Total_Devengado'].'</td>';
                        echo '<td>'.$row['Total_Deducciones'].'</td>';
                        echo '<td>'.$row['Total_PagosComplementarios'].'</td>';
                        echo '<td>'.$row['Total_aumento'].'</td>';
                        echo '<td>'.$row['SUELDO_NETO_Pagar'].'</td>';                         
                        echo '<td>'.$active.'</td>';
                    echo '</tr>';                       
                    } // Fin while 

                    // Cierra la Conexión con la BD.
                    mysqli_close($conexion);

                    echo '</tbody>';
                echo '</table>';
            ?>  
            </div> <!-- / panel-body -->
        </div> <!-- / panel panel-default -->               
    </div> <!-- / col-md-14 -->
</div> <!-- / row -->
</div> <!-- / container -->
</body>
</html>
<?php

?>