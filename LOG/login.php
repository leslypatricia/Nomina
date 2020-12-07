<?php
session_start();

include("../Bd/conexion.php");


$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST["usuario"])) ? $_POST["usuario"] : ' ';
$password = (isset($_POST["password"])) ? $_POST["password"] : ' ';

//$pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT usuario.Cod_rol AS idRol, rol.Descripcion AS rol FROM usuario JOIN rol ON usuario.Cod_rol = rol.Cod_rol WHERE Usuario='$usuario' AND Password='$password' ";	


$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){ 
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);    
    $_SESSION["s_usuario"] = $usuario;    
    $_SESSION["s_idRol"] = $data[0]["idRol"];
    $_SESSION["s_rol_Descripcion"] = $data[0]["rol"];
}else{

    $_SESSION["s_usuario"] = null;  
    $data=null;
}

if ($_SESSION["s_usuario"] === null){
echo "<script>
     
	     alert ('Usuario y Contraseña Incorrectos!!!');
	 	  window.location='../index.php';
	  </script>";

	
}else
    if($_SESSION["s_idRol"]!=1000){

$db_host="localhost";
$db_usuario="root";
$db_contra="";
$db_nombre="nominas";

 $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
$usuario = (isset($_POST["usuario"])) ? $_POST["usuario"] : ' ';
$password = (isset($_POST["password"])) ? $_POST["password"] : ' ';
$registros=mysqli_query($conexion,"SELECT Cod_Usuario, Cod_empleados FROM usuario WHERE Usuario='$usuario' AND Password='$password'");

while ($registro= mysqli_fetch_array($registros)){
$CU=$registro['Cod_Usuario'];
$CE=$registro['Cod_empleados'];
}
	  echo "<script>
     
	     alert ('Bienvenido!!!');
	 	  window.location='../LOG/menu.php?CE=$CU';
	  </script>";

}

	else{
	  if($_SESSION["s_idRol"]=1000){
  echo "<script>
     
	     alert ('Bienvenido!!!');
	 	  window.location='../LOG/Menu_Admin.php';
	  </script>";

    }
	}

print json_encode($data);
$conexion=null;
?>

