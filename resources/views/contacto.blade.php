<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_slider.css"/>
    <link rel="stylesheet" href="css/lightslider.css"/>
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Travel</title>
    <link rel="shortcut icon" href="images/logo-travel.png" />
  </head>
  <body>


   

 <style>
     .redes {
  /* IMPORTANTE */
  text-align: center;
}
.btn-outline-primary {
    color: #1a3898;
    border-color: #1a3898;
}
.btn-outline-primary:hover {
    color: #fff;
    background-color: #1a3898;
    border-color: #1a3898;
}
.padre {
  
  /*IMPORTANTE*/
  display: flex;
  justify-content: center;
  align-items: center;
}

.hijo {
 background: rgba(255, 255, 255, 0.6);
 padding: 2%;
  width: 720px;
  border-radius: 15px;
  margin-bottom: 3%;
}
#cont{
    background-image: url('images/cuzcoo.png');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #464646;
    color: white;
    height: auto;
    text-align: left;
    
    
}

#nosotrosText{
    border-bottom-left-radius: 15px;
    border-top-left-radius: 15px;
    color: white;
}
#contactoText {
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    color: white;
}

@media(max-width:1000px){
    #nosotrosText, #contactoText {
        border-radius:15px;
        color: white;
        margin-bottom:1.5px;
        padding-left:5%;
    }
}

     </style>
<section id="cont" class="container-fluid">
 
   
    <nav class="navbar navbar-light navbar-expand-lg bg-ligth">
      <a class="navbar-brand" href="{{ route('viaje.home')}}">
            <img src="images/logo-travel.png" width="200"  class="d-inline-block align-top" alt="" loading="lazy">
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item ">                   
                <a class="nav-link" href="{{ route('nosotros')}}" id="nosotrosText"> <img src="images/nosotros.png" width="30"  style="margin-right: 5px;" class="d-inline-block align-top" alt="">Nosotros </a>
              </li>
             <li class="nav-item">
                <a class="nav-link " href="{{ route('package.home')}}" id="homeText"> <img src="images/viajes.png" alt="" width="20px" style="margin-right: 5px;" class="d-inline-block align-top">Viajes</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link " href="{{ route('contacto')}}" id="contactoText"> <img src="images/pregunta.png" alt="" width="20px" style="margin-right: 5px;" class="d-inline-block align-top">Contacto</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="padre" >
            <div class="hijo">
                <div class="form" style="  text-align: center; ">
                  {{-- FORMULARIO --}}
                 
                    <form class="formulario-contacto" action="{{route('viaje.contact')}}" method="POST">
                     @csrf
                     
                        <h1>Contacto</h1>
                         <hr>
                         @if(Session::has('flash_message'))
                         <div class="alert alert-success" role="alert">
                        {{Session::get('flash_message')}}
                      </div>
                       @endif
                        <div>
                          <input type="text" class="form-control" name="name" placeholder="Nombres  Apellido"> <br>
                          {!! $errors->first('name','<small style="color:red;">:message</small><br>')!!}
                        </div>
                        <div class="form-row">

                          <div class="col">
                            <input type="text" class="form-control" name="subject" placeholder="Asunto">
                            {!! $errors->first('subject','<small style="color:red;">:message</small><br>')!!}
                          </div>
                          <div  class="col">
                            <input type="email" class="form-control" placeholder="Correo" name="email">
                            {!! $errors->first('email','<small style="color:red;">:message</small><br>')!!}
                          </div>
                        </div>
                          <div>
                              <br>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje" name="content"></textarea>
                            {!! $errors->first('content','<small style="color:red;">:message</small><br>')!!}
                          </div>
                         
                          <br>
                          <button class="btn btn-outline-primary btn-lg btn-block">Enviar Mensaje  </button>
                           <br>
                          
                      </form>
                     
                       {{-- FORMULARIO --}}
                      <div class="row" style="padding: 5%">
                    <div class="col-lg">
                        <img src="images/telefono.png" alt="">
                        <b style="color:#1a3898"> +51 987 654 321</b>
                    </div>
                    <div class="col-lg">
                        <img src="images/mail.png" alt="">
                        <b style="color:#1a3898"> info@startravelperu.com</b>
                    </div>
                    
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249743.72060533662!2d-77.12820757769941!3d-12.026603229136008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1609066396938!5m2!1ses-419!2spe" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           
                </div>
               
            </div>
            
        </div>
        
   
</section>
<section class="container-fluid footer">
  <div class="row " style="padding-left: 5%">
    <div class="col-lg">
      <h4><strong>Nuestra empresa</strong></h4>
      <br>
      <a href="{{ route('nosotros')}}" style="color: white">¿Quiénes Somos?</a><br>
      <a href="{{ route('contacto')}}" style="color: white">Contáctanos</a><br>
      <a href="images/ESNNA-RM_430-2018-MINCETUR.pdf" style="color: white"  target="_blank" >Ley de Protección de explotación infantil  </a><br>
      <a href="images/cokies-startravel-pagina-web-politica-2021.pdf" target="_blank" style="color: white">Politica de uso de cookies  </a><br>
      <a href="images/condiciones-de-tratamiento-de-datos-de-web-startravel.pdf" target="_blank" style="color: white">Declaración de Tratamiento de Datos
Personales   </a><br>
      <a href="images/condiciones-web-startravel-2021.pdf" target="_blank" style="color: white">Términos y Condiciones.</a><br>
      <br>
    </div>
    <div class="col" style="text-align: center">
    
    <a href="{{route('viaje.reclamo')}}"><img src="images/libroreclamaciones.png" alt="" width="50%" height="auto"></a>
    <br>
    </div>
    <div class="col" style="text-align: center">      
      <a href="{{ route('travel')}}"><img src="images/logo-travel.png" alt="" width="50%" height="auto"></a>        
      <br>
      </div>      
  </div>
  <div class="copy">
    <hr>
    <div class="redes" style="  text-align: center;r">
     <a href="https://www.facebook.com/Startravel360" target="_blank"> <img src="images/fb.png" alt="" width="40px" height="40px"></a>
     <a href="https://www.instagram.com/startravelperu" target="_blank"><img src="images/ig.png" alt="" width="40px" height="40px"></a>
      <a href="wa.link/fbxsb6" target="_blank"><img src="images/wspFooter.png" alt="" width="40px" height="40px"></a>
    </div>
    <p>Copyright <b>Appsitec</b> Todos los derechos reservados © 2020</p>
  </div>  
  
</section>
 <!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{asset('/js/lightslider.js')}}"></script>

<script src="{{asset('js/scripte.js')}}" type="text/javascript"></script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->


<script>
  $(document).ready(function() {
   
      $(".formulario-contacto").bind("button", function(){
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(respuesta) {
              if(respuesta == "ok"){
              $('#alerta').remove('hide').addClass("show");
              $(".respuesta").html("Mensaje Enviado!");
              $(".mensaje").html("El mensaje fue enviado correctamente.");  
              }
              
            },
            error: function(){
              $('#alerta').remove('hide').addClass("show");
              $(".respuesta").html("Error!");
              $(".mensaje").html("El mensaje no fue enviado.");
            }
        });
      });
  });
</script>
</body>
</html>