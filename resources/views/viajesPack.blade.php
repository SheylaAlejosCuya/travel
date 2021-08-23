<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightslider.css"/>
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Travel</title>
    <link rel="shortcut icon" href="images/logo-travel.png" />
  </head>
  <body>


   

 <style>
     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        background: #E0E4E5;
        font-family: 'Open Sans', sans-serif;
    }
    
    .wrap {
        max-width: 2100px;
        width: 90%;
        margin: auto;
    }
    
    .wrap>h1 {
        color: #1a3898;
        font-weight: 400;
        display: flex;
        flex-direction: column;
        text-align: center;
        margin: 15px 0px;
    }
    
    .wrap>h1:after {
        content: '';
        width: 100%;
        height: 1px;
        background: #C7C7C7;
        margin: 20px 0;
    }
    
    .store-wrapper {
        display: flex;
        flex-wrap: wrap;
    }
    
    .category_list {
        display: flex;
        flex-direction: column;
        width: 18%;
    }
    
    .category_list .category_item {
        display: block;
        width: 90%;
        padding: 15px 0;
        margin-bottom: 20px;
        background: #21618C;
        text-align: center;
        text-decoration: none;
        color: #fff;
    }
    
    .category_list .ct_item-active {
        background: #1a3898;
    }
    /* PRODUCTOS ============*/
    
    .products-list {
        width: 82%;
        display: flex;
        flex-wrap: wrap;
    }
    
    .products-list .product-item {
        width: 22%;
        margin-left: 3%;
        margin-bottom: 25px;
        box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.22);
        display: flex;
        flex-direction: column;
        align-items: center;
        align-self: flex-start;
        transition: all .4s;
    }
    
    .products-list .product-item iframe {
        width: 100%;
    }
    
    .products-list .product-item a {
        display: block;
        width: 100%;
        padding: 8px 0;
        background: #1a3898;
        color: #fff;
        text-align: center;
        text-decoration: none;
    }
    /* RESPONSIVE */
    
    @media screen and (max-width: 1100px) {
        .products-list .product-item {
            width: 30.3%;
        }
    }
    
    @media screen and (max-width: 900px) {
        .category_list,
        .products-list {
            width: 100%;
        }
        .category_list {
            flex-direction: row;
            justify-content: space-between;
        }
        .category_list .category_item {
            align-self: flex-start;
            width: 15%;
            font-size: 14px;
        }
        .products-list .product-item {
            margin-left: 4.5%;
        }
        .products-list .product-item:nth-child(3n+1) {
            margin-left: 0px;
        }
    }
    
    @media screen and (max-width: 700px) {
        .category_list {
            flex-direction: column;
        }
        .category_list .category_item {
            width: 100%;
            margin-bottom: 10px;
        }
    }
    
    @media screen and (max-width: 600px) {
        .products-list .product-item {
            width: 47.5%;
        }
        .products-list .product-item:nth-child(3n+1) {
            margin-left: 4.5%;
        }
        .products-list .product-item:nth-child(2n+1) {
            margin-left: 0px;
        }
    }
    
    @media screen and (max-width: 350px) {
        .products-list .product_item {
            width: 100%;
            margin-left: 0px;
        }
    }
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 0px;
   padding-left: 0px; 
}

.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 2rem;
    outline: 0;
}
#contenidos{
  padding-left: 30px;
    padding-right: 30px;
}
#cont{
  background-image: url('images/package.jpg') ;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;;
  height: 100%;
}

     </style>
<section id="cont" class="container-fluid">
 
   
    <nav class="navbar navbar-light navbar-expand-lg bg-ligth">
      <a class="navbar-brand" href="{{ route('travel')}}">
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
    <div class="wrap">
        <h1>Escoge un Paquete</h1>
        @if(Session::has('flash_message'))
        <div class="alert alert-success" role="alert">
        <strong> 
            <img src="images/comprobado.png" alt="" style="padding-left:15px; padding-right: 15px;">
             {{Session::get('flash_message')}}
            </strong>
        </div>
@endif
        <div class="store-wrapper">
            <div class="category_list">
                <a href="#" class="category_item" category="all">TODO</a> 
                @forelse ($countries as $country)
                <a href="#" class="category_item" category="{{$country->id}}">{{$country->title}}</a> 
                @empty No hay viajes que mostrar @endforelse

            </div>

            <section class="products-list">
               
                @forelse ($packages as $package)
                <div class="product-item" category="{{$package->country->id}}">
                 <a href="#"
                    >{{ $package->title}}</a>
                     <iframe src="{{ asset(Storage::url($package->documento))}}" frameborder="0"></iframe>
                    
                    <div class="row" style="width: 100%">
                      <div class="col" style="width: 100% ">
                        <a type="button" class="btn_modale_mostrar btn btn-outline-secondary"  data-toggle="modal" 
                         data-target=".bd-example-modal-xl" 
                         data-documento="{{ asset(Storage::url($package->documento))}}">Ver Documento
 {{-- comment 
   <iframe src="{{ asset(Storage::url($package->documento))}}" frameborder="0"></iframe>--}}
    </a>
    {{-- modal inicio --}}

<div class="modal fade bd-example-modal-xl" id='modal_packages' tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content" style="height: 1000px;
    width: 1200px;">
      <div class="modal-body">
        <iframe id="documento" frameborder="0" width="100%" style="height: 900px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
{{-- modal fin --}}
</div>
<div class="col" style="width: 100%"> 
    <a type="button" class="btn_modal_mostrar btn-outline-secondary" data-target="#modal_viajes"
    data-title="{{$package->title}}"
>Reservar</a>
</div>


</div>

{{-- comment

<div class="col"></div>                 
  <a type="button" class="btn_modal_mostrar"
  data-title="{{$package->title}}">{{ $package->title}}</a> --}}            


  </div>
  @empty
  
    @endforelse
</div>
</section>
</section>
<div class="modal fade bd-example-modal-x " tabindex="-1" role="dialog" id='modal_viajes'>
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
      <div class="modal-content">        
        <div class="modal-body" >
          <div class="row">          
            <div class="col" id="contenidos">
                          
                 
              <form action="{{route('package.reservas')}}" method="POST">
                            @csrf
               <h2>Reservar Paquete:
                  <h1 class="modal-title" id='title_modal'>Modal title</h1>  
                </h2>      
                   <hr style="background: rgb(203 203 203);">               
                <div class="form-row">
                  <div class="col">
                    <input type="text" id='title_modale' hidden name="package">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombres">
                    {!! $errors->first('nombre','<small>:message</small><br>')!!}
                  </div>                  
                  <div  class="col">
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    {!! $errors->first('apellido','<small>:message</small><br>')!!}
                  </div>
                  
                  
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <input type="email" class="form-control" name="correo" placeholder="Correo">
                    {!! $errors->first('correo','<small>:message</small><br>')!!}
                  </div>
                  <div  class="col">
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                    {!! $errors->first('telefono','<small>:message</small><br>')!!}
                  </div>
                </div>
                <br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje" name="content"></textarea>
                {!! $errors->first('content','<small>:message</small><br>')!!}
                  <br> {{-- commentcomment --}}
                  <button  class="btn btn-outline-primary btn-lg btn-block">Enviar</button>
              </form>
            
            </div>
          </div>
         </div>
        
      </div>
    </div>
  </div>
<section class="container-fluid footer">
  <div class="row " style="padding-left: 5%">
    <div class="col-lg">
      <h4><strong>Nuestra empresa</strong></h4>
      <br>
      <a href="{{ route('nosotros')}}" style="color: white">¿Quiénes Somos?</a><br>
      <a href="{{ route('contacto')}}" style="color: white">Contáctanos</a><br>
      <a href="images/ESNNA-RM_430-2018-MINCETUR.pdf" style="color: white"  target="_blank" >Ley de protección contra la trata de personas y explotación infantil. </a><br>
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

        // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
        $('.category_list .category_item[category="all"]').addClass('ct_item-active');

        // FILTRANDO PRODUCTOS  ============================================

        $('.category_item').click(function() {
            var catProduct = $(this).attr('category');
            console.log(catProduct);

            // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
            $('.category_item').removeClass('ct_item-active');
            $(this).addClass('ct_item-active');

            // OCULTANDO PRODUCTOS =========================
            $('.product-item').css('transform', 'scale(0)');

            function hideProduct() {
                $('.product-item').hide();
            }
            setTimeout(hideProduct, 400);

            // MOSTRANDO PRODUCTOS =========================
            function showProduct() {
                $('.product-item[category="' + catProduct + '"]').show();
                $('.product-item[category="' + catProduct + '"]').css('transform', 'scale(1)');
            }
            setTimeout(showProduct, 400);
        });

        // MOSTRANDO TODOS LOS PRODUCTOS =======================

        $('.category_item[category="all"]').click(function() {
            function showAll() {
                $('.product-item').show();
                $('.product-item').css('transform', 'scale(1)');
            }
            setTimeout(showAll, 400);
        });
    });

    $(document).on('click', '.btn_modal_mostrar', function() {

    $('#modal_viajes').modal('show');
    $('#title_modal').text($(this).data('title'));
    $('#title_modale').val($(this).data('title'));
    //$('#descripcion').text($(this).data('descripcion'));
    //$('#imagen').attr('src', $(this).data('image'));
    });

    $(document).on('click', '.btn_modale_mostrar', function() {

    $('#modal_packages').modal('show');
    console.log($(this).data('documento'));    
    $('#documento').attr('src', $(this).data('documento'));
    });
</script>
</body>
</html>