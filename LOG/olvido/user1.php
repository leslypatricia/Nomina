<?php
include('../Bd/Conexion.php');
$correo=$_POST['Correo'];
 
$c = "SELECT Cod_Usuario IFNULL( Usuario 'usuario' ) as Usuario FROM usuario WHERE Correo='$correo' LIMIT 1";
$f = mysqli_query( $cnx , $c );
$a = mysqli_fetch_assoc($f);
if( ! $a ){
	$_SESSION['error'] = 'Usuario inexistente';
	header( "Location: ../index.php?seccion=contrasenia" );
	die( );
}
//generar una clave aleatoria y el token

$token = md5( $a['Cod_Usuario'] . time( ) . rand( 1000, 9999 ) );
$clave_nueva = rand( 10000000, 99999999 );
$idusuario = $a['Cod_Usuario'];

$c2 = "INSERT INTO Usuario SET Correo='$correo', TOKEN='$token', FECHA_ALTA=NOW( ), CLAVE_NUEVA='$clave_nueva' ON DUPLICATE KEY UPDATE TOKEN='$token', CLAVE_NUEVA='$clave_nueva'";
mysqli_query($cnx, $c2);

$link = "http://localhost/forms/recuperar_clave_confirmar.php?e=$email&t=$token";

//envío de mail
$mensaje = <<<EMAIL
<p>Hola $a[NOMBRE]</p>
<p>Has solicitado recuperar tu contraseña, el sistema te ha generado una nueva clave que es: <code style='background: lightyellow; color: darkred; padding: 1px 2px;'>$clave_nueva</code></p>
<p>Pero antes de poder usarla, deberás hacer <a href='$link'>click en este vínculo</a> o copiar este código en la URL de tu navegador</p>
<code style='background: black; color: white; padding: 4px;'>$link</code>
<p>Si tu no has hecho esta solicitud, ingora el presente mensaje</p>
EMAIL;

echo $mensaje;

//enviar ese mail 
//redireccionar al formulario....





?>