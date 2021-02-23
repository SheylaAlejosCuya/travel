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
#esnap{
  position: absolute;
      color:#1a3898;
      top: 50%;
      transform: translateY(-50%);
      font-size: calc(1.5rem + 0.9vw);
      text-decoration: underline;
      padding-left: 25%;
}
     
#imagen{
  background: #0d82c6;
    padding: 2%;
    border-radius: 15px;
    }
@media(max-width:920px){
    #nosotros{
    background-image: url('images/fondoInfo.png');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #464646;
    height: auto;
    color: white;
    padding: 5%;;
    text-align: left;
    }
    #esna{
      padding: 0%;
    }

    #imagen{
      width: 100%;
      margin-top: 5%;
    }
    #esnap{
      padding-left: 5%;

}
#imageEsna{
  margin-top: 5%;
}
}
     </style>
<section id="nosotros" class="container-fluid">
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
     
    <div class="container" id="texto" style=" color:rgb(105, 105, 105); font-size: calc(0.5rem + 0.9vw);">
        <p>
            Somos tu mejor opción para viajar, con más de 5 años de experiencia
            en el mercado te ofrecemos paquetes a nivel nacional e internacional,
            vuelos, estadías, seguros de viajes, cruceros y más dándote experiencias
            inolvidables para ti y tu familia.
        </p>
        <p>
            Es nuestra visión ser reconocidos a nivel mundial por contar con una
            amplia gama de servicios acordes a las necesidades de nuestros clientes,
            destacando además por su dedicación a la formación, capacitación y desarrollo 
            de sus empleados lo cual nos permita brindarle las mejores alternativas de viajes
             corporativos junto al asesoramiento respectivo, destacando en el mercado por la
              eficacia, dinamismo y la más alta calidad en los servicios que brindamos.

        </p>
        <div class="row">
            <div class="col" style="text-align: left; padding-top:5%; color:#1a3898;font-size: calc(1.5rem + 0.9vw); ">
                <p>Disfruta tu viaje
                    <br> con <strong>Star Travel</strong> </p>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>
<section style="padding: 5%" id="esna">
  <div class="row">
    <div class="col-lg">
      <p id="esnap"  style="text-aling:center; padding-bottom: 15px;"><b> Ley de protección contra la trata de personas y explotación infantil.</b>   </p> 
    </div>
    {{-- comment --}}
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <img src="images/Afiche-ESNNA-para-agencias-de-viajes.jpg" alt="" width="100%" >
        </div>
      </div>
    </div>
     {{-- comment --}}
    <div class="col" id="imageEsna">
     
      <a type="button"  data-toggle="modal" data-target="#exampleModalCenter">
       <img src="images/Afiche-ESNNA-para-agencias-de-viajes.jpg" alt="" width="70%" id="imagen">
      </a>
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
      <a href="images/ESNNA-RM_430-2018-MINCETUR.pdf" style="color: white"  target="_blank" >Ley deProtección de explotación infantil    </a><br>
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


</body>
</html>