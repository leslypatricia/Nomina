<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Documento sin t&iacute;tulo</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

<label>Cod_Empleado:</label>
<input type="text" name="CE" value="" size="5" maxlength="5" />
<span class="icon-search">
<input type="submit" name="buscar" value="Buscar" class="btn-btn-primary"></span>
<br/>
<br/>


<h1>$olucion Nominas<span class="subtitulo"></span></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table width="50%" border="0" align="center">
    <tr >
	  <td class="primera_fila">Items</td>
      <td class="primera_fila">Codigo_Empleado</td>
      <td class="primera_fila">Identidad</td>
      <td class="primera_fila">Primer_Nombre</td>
      <td class="primera_fila">Segundo_Nombre</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
	        <td class="sin">&nbsp;</td>
    </tr> 
   
		<?php
		
		foreach ($registros as $empleados):?>
		

   	<tr>
	  <td><input type="checkbox" name="casilla" ></td>
      <td><?php echo $empleados->ID?> </td>
      <td><?php echo $empleados->Nombre?></td>
      <td><?php echo $empleados->Apellido?></td>
      <td><?php echo $empleados->Direccion?></td>
	 

     
     
    </tr>  
	
	<?php
	
	endforeach;
	
	?>
	
	     
	<tr>
<td></td>
<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td> 
	   
  </table>
  <tr>

  <td class="bot" ><a href="eliminar.php?Id=<?php echo $empleados->ID?>"><input type='button' name='del' id='del' value='Borrar' >  </a></td>
<td class='bot'><a href="editar.php?Id=<?php echo $empleados->ID?> & nombre=<?php echo $empleados->Nombre?> & apellido=<?php echo $empleados->Apellido?> & dir=<?php echo $empleados->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'> </a></td>
	  <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar' class='centrado'></td></tr> 
	  </tr>  
</form>
	  
<p>&nbsp;</p>

</body>
</html>
