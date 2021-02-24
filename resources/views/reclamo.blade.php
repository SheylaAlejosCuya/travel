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
  text-align: left;
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
 background: rgba(255, 255, 255, 0.8);
 padding: 2%;
  width: 1000px;
  border-radius: 15px;
  margin-bottom: 3%;
}
#cont{
    background-image: url('images/bleach.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #464646;
    color: white;
    height: auto;
    text-align: left;
    
    
}
label, p, li{
    color: #1a3898;
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
                <div class="form" style="   ">
                  {{-- FORMULARIO --}}
                  @include('partials.validation-errors')
                    <form class="formulario-contacto" action="{{route('viaje.reclamo')}}" method="POST">

                     @csrf
                     @if(Session::has('flash_message'))
                     <div class="alert alert-success" role="alert">
                      <strong> <img src="images/comprobado.png" alt="" style="padding-left:15px; padding-right: 15px;"> {{Session::get('flash_message')}}</strong>
                  </div>
                   @endif
                   
                        <h1>Libro de Reclamaciones virtual</h1>
                         <hr>
                         <p style="color: #1a3898;text-align: left;">
                            Este formulario es exclusivamente para expresar su disconformidad con algún producto o servicio brindado por <b> Star Travel Multiservice EIRL.</b> 
                            <br>
                            <b>Todos los campos son obligatorios.</b> 
                         </p>
                         <p style="color: #1a3898; text-align: left;" >
                             <b>Razón Social: </b>STAR TRAVEL MULTISERVICE EIRL. <br>
                             <b>Dirección Legal: </b>COO. VIV COVITI MZA. G LOTE. 4 CRUCE DE ANGELICA GAMARRA Y TOMAS VALLE LIMA-LIMA-SAN MARTIN DE PORRES <br>
                             <b>RUC: </b>20566460352 <br>
                             <b>Fecha actual: </b> 
                             <script type="text/javascript">
                              var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                              var f = new Date();
                              fecha = document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                          </script>
                           <br>
                         </p>
                         
                     <p>
                       <b> 1. Identificación del consumidor reclamante</b>
                     </p>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombres Completos:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="nombre" value="{{old('nombre') }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Domicilio:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="domicilio"  value="{{old('domicilio') }}">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo de documento:</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="documento"  value="{{old('documento') }}">
                                    
                                    <option value="Documento Nacional de Identidad">Documento Nacional de Identidad</option>
                                    <option value="Carnet de Identidad">Carnet de Identidad</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                  </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label" >Número de documento:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" name="numeroDoc"  value="{{old('numeroDoc') }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Teléfono:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" name="telefono"  value="{{old('telefono') }}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label" >Correo electrónico:</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputPassword3" name="email"  value="{{old('email') }}">
                            </div>
                          </div>
                          <p>
                              <b>2. Identificación del bien contratado</b>
                              
                          </p>
                          <p>
                             Tipo de bien a reclamar:
                        </p>
                          <div class="form-check">    
                            <input type="radio" id="producto" name="bien" value="Producto" >
                            <label for="producto">Producto</label><br>
                            <input type="radio" id="servicio" name="bien" value="Servicio">
                            <label for="servicio">Servicio</label><br>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Monto reclamado:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" name="monto"  value="{{old('monto') }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripción del producto o servicio</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="DescProdu">{{old('DescProdu') }}</textarea>
                          </div>
                          <p>
                              <b>3. Detalle de la reclamación</b>
                            
                          </p>
                          <p>
                            Tipo de reclamo:
                       </p>
                         <div class="form-check">                            
                          <div class="form-check">    
                            <input type="radio" id="queja" name="tipReclamo" value="Queja"   >
                            <label for="queja">Queja</label><br>
                            <input type="radio" id="reclamo" name="tipReclamo" value="Reclamo" >
                            <label for="reclamo">Reclamo</label><br>
                          </div>
                           <br>
                         <i>
                             <li>
                                Queja: Malestar, descontento o disconformidad no relacionada al producto o servicio o con respecto a la atención recibida.
                             </li>
                             <li>
                                Reclamo: Disconformidad con respecto al producto o servicio.
                             </li>
                            </i>
                            <br>
                         </div>
                         <div class="form-group">
                            <label for="exampleFormControlTextarea1">Detalle del reclamo:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="DetReclamo">{{old('DetReclamo') }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pedido del reclamo:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="PedReclamo">{{old('PedReclamo') }}</textarea>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Aceptó" id="defaultCheck1" name="acuerdo"  value="{{old('acuerdo') }}">
                            <label class="form-check-label" for="defaultCheck1">
                                Declaro ser el titular del servicio y acepto el contenido del presente formulario manifestando bajo declaración jurada la veracidad de los hechos descritos.
                            </label>
                          </div>

                        
                         
                          <br>
                          <button class="btn btn-outline-primary btn-lg btn-block">Enviar Reclamo  </button>
                           <br>
                           
                      </form>
                     
                       {{-- FORMULARIO --}}
                     
                  
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
      <a href="images/ESNNA-RM_430-2018-MINCETUR.pdf" style="color: white"  target="_blank" >Ley de protección contra la trata de personas y explotación infantil.  </a><a href="images/Afiche-ESNNA-para-agencias-de-viajes.jpg"target="_blank" style="color: white">(Ver afiche)</a><br>
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
    <div class="redes" style="  text-align: center;">
     <a href="https://www.facebook.com/Startravel360" target="_blank"> <img src="images/fb.png" alt="" width="40px" height="40px"></a>
     <a href="https://www.instagram.com/startravelperu" target="_blank"><img src="images/ig.png" alt="" width="40px" height="40px"></a>
      <a href="wa.link/fbxsb6" target="_blank"><img src="images/wspFooter.png" alt="" width="40px" height="40px"></a>
    </div>
    <div style="  text-align: ritgh;"> 
        <p style="color:white; 
        text-align: center;" >Copyright <b>Appsitec</b> Todos los derechos reservados © 2020</p>
  </div>
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