$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
 
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o Contraseña',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                  title:'Usuario y/o Contraseña incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Bienvenido!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingrese'
                   }).this((result) => { 
                       if(result.value){
                window.location.href = "LOG/Menu_Admin";
                }
                   })
                   
               }
           }    
        });
    }     
});