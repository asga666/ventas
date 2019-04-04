jQuery(document).on('submit','#sesion_id',function(event){
    event.preventDefault();
    jQuery.ajax({
        url:'main.app/Sesion/iniciar_sesion.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize(),
        beforeSend:function(){
        }
      })
      .done(function(respuesta){
        console.log(respuesta);

        if(!respuesta.error){
            location="./listar.php";
        }else{
          swal({
            button:"Aceptar",
            text: "Usuario o contraseña incorrectos",
            icon: "error",
          });
        }
      })
      .fail(function(resp){
        console.log(resp.responseText);
      })
      .always(function(){
        console.log("complete");
    });
});

jQuery(document).on('submit','#correo_verificar',function(event){
  event.preventDefault();
  jQuery.ajax({
      url:'main.app/Sesion/verificar_correo.php',
      type:'POST',
      dataType:'json',
      data:$(this).serialize(),
      beforeSend:function(){
      }
    })
    .done(function(respuesta){
      console.log(respuesta);

      if(!respuesta.error){
          location="./Codig-verfi.php";
      }else{
        swal({
          button:"Aceptar",
          text: "El correo no coincide, inténtelo de nuevo porfavor",
          icon: "error",
        });
      }
    })
    .fail(function(resp){
      console.log(resp.responseText);
    })
    .always(function(){
      console.log("complete");
  });
});

jQuery(document).on('submit','#form_contraseña_verificar',function(event){
  event.preventDefault();
  jQuery.ajax({
      url:'main.app/Sesion/verif-contraseña.php',
      type:'POST',
      dataType:'json',
      data:$(this).serialize(),
      beforeSend:function(){
      }
    })
    .done(function(respuesta){
      console.log(respuesta);

      if(!respuesta.error){
          location="./listar.php";
      }else{
        swal({
          button:"Aceptar",
          text: "Contraseña incorrecta, inténtelo de nuevo porfavor",
          icon: "error",
        });
      }
    })
    .fail(function(resp){
      console.log(resp.responseText);
    })
    .always(function(){
      console.log("complete");
  });
});