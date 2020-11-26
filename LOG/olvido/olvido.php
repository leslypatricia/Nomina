<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>     Recuperar Contraseña    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" hsref="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../LOG/olvidoestilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    <style>
body{
	margin:0;
    padding:0;
	background-image: url("../../IMG/Fondo10.jpg");
	background-repeat: no-repeat;
	background-size:cover;
    background-attachment: fixed;
  
    }
    @font-face {
  font-family: Poppins-Regular;
  src: url('fuentes/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('fuentes/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('fuentes/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('fuentes/poppins/Poppins-SemiBold.ttf'); 
}

*{
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Poppins-Regular, sans-serif;
}


input {
	outline: none;
  border: none;
  outline: none !important;
	border: none;
	background: transparent;
}

button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

/*-- contenedor del Login--*/

.container-login {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-flex;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  
}

.wrap-login {
  width: 400px;
  background: #eceff1;
  border-radius: 20px;
  overflow: hidden;
  padding: 77px 55px 53px 55px;
  -webkit-box-shadow: 25px 40px 28px 0px rgba(0, 0, 0, 0.38);
 /* box-shadow: eje-x | eje-y | blur-radius | color */
}


/*----Formulario de user y password----*/

.login-form {
  width: 100%;
}

.login-form-title {
  display: block;
  font-family: Poppins-Bold;
  font-size: 40px;
  color: #333333;
  line-height: 1.5;
  text-align: center;
}


/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #adadad;
  margin-bottom: 37px;
}

.input100 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #555555;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 45px;
  background: transparent;
  padding: 0 5px;
}

/*---------------------------------------------*/ 
.focus-efecto {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-efecto::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 4px; /*ancho de la linea que hace el efecto de barra de progeso en el input al hacer foco*/

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

}

.focus-efecto::after {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #999999;
  line-height: 1.2;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 16px;
  left: 0px;
  padding-left: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-efecto::after {
  top: -15px;
}

.input100:focus + .focus-efecto::before {
  width: 100%;
}

.has-val.input100 + .focus-efecto::after {
  top: -15px;
}

.has-val.input100 + .focus-efecto::before {
  width: 100%;
}

/*---------------------------------------------*/


/*------------------------------------------------------------------
[ Button ]*/
.container-login-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 13px;
}

.wrap-login-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 40px 5px;
  overflow: hidden;
  margin: 0 auto;
}

.login-form-btn {
  font-family: Poppins-Medium;
  font-size: 20px;
  color: black;
  line-height: 1.2;
  text-transform: uppercase;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}

.wrap-login-form-btn:hover .login-form-bgbtn {
  left: 0;
}


/*--- Para dispositivos small responsive ---*/

@media (max-width: 576px) {
  .wrap-login {
    padding: 77px 15px 33px 15px;
  }
}
   
    </style>
</head>

<body>
<div class="container-login" align="center">
        <div class="wrap-login">
            <div>
                <h4 class="login-form-title"> <b>NOMINA</b> </h4>
            </div>
            <div align="center"   >
                <img src="../../IMG/email.png" id="icon" alt="User Icon" width="200px" />
            </div>

            <form class="login-form validate-form" id="formLogin" method="POST" action="user1.php">
                <input class="wrap-input100"  type="email" id="Correo" name="Correo" placeholder="Correo Electrónico"> 
                <div  class="login-form-bgbtn">
                    <button class="login-form-btn" type="submit" name="submit" value="  Enviar Contraseña">Enviar Contraseña</button>
                </div>               
            </form>
            <!-- Remind Passowrd -->
            <div  class="login-form-bgbtn"></div>
                <a class="login-form-btn" class="underlineHover" href="../../index.php">Volver a iniciar sesión</a>
            

        </div>
    </div>
    <script>
        var url = "//localhost:801/mini_emails/mini3_login/";
    </script>
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../..bootstrap/js/bootstrap.min.js"></script>
    </body>
 

</html>