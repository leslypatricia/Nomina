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
echo "Error , Contraseña y Usuario incorrectos";
	header("Location: ../index.php");
	
}else
    if($_SESSION["s_idRol"]!=1000){
	 header("Location: /Nomina/LOG/Menu_usuario.php");
    }
	
	else{
	  if($_SESSION["s_idRol"]=1000){
	header("Location: /Nomina/LOG/Menu_Admin.php");
	}
}
print json_encode($data);
$conexion=null;
?>