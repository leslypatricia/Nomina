<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Web Animada</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@300;500&display=swap');

body{
    background: radial-gradient(at top,rgb(255, 0, 0),rgb(191, 0, 0),rgb(74, 2, 2));
    height: 100vh;
    margin: 0;
    font-family: 'Dosis', sans-serif;

}
nav{
    display: flex;
    width: 1000px;
    background: black;
    border-radius: 0px 0px 20px 20px;
    margin: 0 auto;
    justify-content: space-around;
}
nav a{
    margin-top:50px;
    margin-bottom: 10px;
    font-size: 20px;
    text-decoration: none;
    width: 90%;
    text-align: center;
    color: white;
    font-weight: 300;
}
.link_activo{
    color: red;
}
nav a:nth-child(1),
nav a:nth-child(4){
    border-right: rgba(0, 128, 128, 0.39) 1px solid;
}
.logo{
    letter-spacing: 5px;
    font-size: 20px;
    color: white;
    font-weight: 500;
}
.contenedor{
    width: 1000px;
    margin: 0 auto;
    position: relative;
}
.page{
    width: 100%;
    height: 50vh;
    top: 100px;
    left: 0;
    background: linear-gradient(10deg, black 90%, white 90%);
    border-radius: 20px;
    position: absolute;
    box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.644);
    transform: translateX(150%);
    display: flex;
    align-items: center;
    justify-content: center;
   
    
}
.page .contenido{
    padding: 50px;
    width: 100%;
    color: white;
}
.page .contenido h2{
    text-align: center;
}
.page .contenido p{
    column-count: 3;
    column-gap: 50px;
    column-rule: 1px dotted black;
    }

.active{
    transform: translateX(0%);
}
/* TEXTO EFECTO */
.texto{
   display: flex;
   align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    border-radius: 20px;
    background: linear-gradient(to right, white 0%, white 50%, black 50%, black 100%);
}
.texto h1{
    background: linear-gradient(to right, black 0%, black 50%, white 50%, white 100% );
    color: white;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 80px;
    animation: texto 2s ease-in infinite;
}
@keyframes texto {
    0%{ transform: scale(1);}
    50%{ transform: scale(1.5);}
    100%{ transform: scale(1);}
    
}


@keyframes navlinkfade {
    from{
        transform: translateX(100%);
    }
    to{
        transform: translateX(0%);
    }
}
@keyframes salir {
    from{
        transform: translateX(0%);
    }
    to{
        transform: translateX(-150%);
    }
}
@media only screen and (max-width: 800px) {
    nav{
        flex-direction: column;
    }
    .contenedor{
        width: 100%;
    }
}
    </style>
</head>
<body>
    <nav>
        <a href="#" class="link link_activo" id="uno">Home</a>
        <a href="#" class="link" id="dos">Empresa</a>
        <a href="/" class="logo">CODEA APP</a>
        <a href="#" class="link" id="tres">Servicios</a>
        <a href="#" class="link" id="cuatro">Contacto</a>
    </nav>
    <div class="contenedor">
        
        <div class="page active" id="page_uno">
            
                <div class="texto">
                    <h1>PÁGINA ANIMADA</h1>
                </div>
            
        </div>
        <div class="page" id="page_dos">
            <div class="contenido">
                <h2>EMPRESA</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quisquam omnis debitis odit deserunt eaque tenetur vel sed iste sint illo voluptatum fuga iure officiis distinctio velit ea, error assumenda! Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto asperiores laborum odio quam eaque? Minima blanditiis id excepturi ipsa velit eveniet ea unde repellendus, perspiciatis autem possimus fugit architecto quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consequatur modi enim voluptatibus non ipsa dolorem veniam labore, doloremque ex tempore illum aut numquam atque. Provident culpa dolores repudiandae quod? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem libero dolor, facilis et sequi quos iusto non maxime, magnam, omnis saepe obcaecati quae inventore optio quas fugit beatae quaerat. Sint!</p>
            </div>
        </div>
        <div class="page" id="page_tres">
            <div class="contenido">
                <h2>SERVICIOS</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quisquam omnis debitis odit deserunt eaque tenetur vel sed iste sint illo voluptatum fuga iure officiis distinctio velit ea, error assumenda! Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto asperiores laborum odio quam eaque? Minima blanditiis id excepturi ipsa velit eveniet ea unde repellendus, perspiciatis autem possimus fugit architecto quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consequatur modi enim voluptatibus non ipsa dolorem veniam labore, doloremque ex tempore illum aut numquam atque. Provident culpa dolores repudiandae quod? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem libero dolor, facilis et sequi quos iusto non maxime, magnam, omnis saepe obcaecati quae inventore optio quas fugit beatae quaerat. Sint!</p>
            </div>
        </div>
        <div class="page" id="page_cuatro">
            <div class="contenido">
                <h2>CONTACTO</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quisquam omnis debitis odit deserunt eaque tenetur vel sed iste sint illo voluptatum fuga iure officiis distinctio velit ea, error assumenda! Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto asperiores laborum odio quam eaque? Minima blanditiis id excepturi ipsa velit eveniet ea unde repellendus, perspiciatis autem possimus fugit architecto quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consequatur modi enim voluptatibus non ipsa dolorem veniam labore, doloremque ex tempore illum aut numquam atque. Provident culpa dolores repudiandae quod? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem libero dolor, facilis et sequi quos iusto non maxime, magnam, omnis saepe obcaecati quae inventore optio quas fugit beatae quaerat. Sint!</p>
            </div>
        </div>
    </div>
    <script>
        const menu = document.querySelectorAll('.link')
let pagina_actual = '#page_uno';
let link_actual = '#uno';
for (const m of menu) {
    m.addEventListener('click', function(event) {
        //SALIDA DE LA PAGINA
        document.querySelector(pagina_actual).style.animation = `salir 0.5s ease forwards 0s`
        document.querySelector(link_actual).style.color = `white`
        
        // ENTRADA DE LA PAGINA
        document.querySelector('#page_'+event.target.id).style.animation = `navlinkfade 0.5s ease  forwards 0s`;
        document.querySelector('#'+event.target.id).style.color = `red`

        // ACTUALIZAMOS PAGINA ACTUAL
        pagina_actual ='#page_'+event.target.id
        link_actual = '#'+event.target.id
    })
    
}
    </script>
</body>
</html>