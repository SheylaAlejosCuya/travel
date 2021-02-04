@include('partials.nav')
<style>
	@charset "utf-8";
/* CSS Document */
.responsive-iframe {
  position: relative;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
.buscaador{
      height: 1000px;
    }
     .subtitulo{
      height: 1500px;
    }
@media(max-width:1000px) {
    #nosotrosText,
    #homeText,
    #contactoText {
        border-radius: 15px;
        color: white;
        margin-bottom: 1.5px;
        padding-left: 5%;
    }
    .buscaador{
      height: 1500px;
    }
     .subtitulo{
      height: 1500px;
    }
}
</style>
<section class="buscaador" >
    <div class="subtitulo"  >
      <h1><b> Encuentra cientos de vuelos a la vez</b></h1>
      <hr id="subtibarra"> 
      <iframe src="https://startravelperu.clickandbook.com" class="responsive-iframe" frameborder="0"></iframe>
      {{-- comment 
        <iframe src="http://startravelperu.clickandbook.com"   frameborder="0"   style="overflow:hidden; height:100%; width:100%; min-height:500px;"></iframe>
--}}
      </div>      
  </section>

  {{-- comment 
  <section class="container-fluid viajes">
    <h1><b>Ofertas y Promociones</b></h1>

    <hr id="subtibarra">



    <div class="row">
       @forelse($viajes as $viaje)
          <div class="col">
          <div class="card">
         
             
              <a type="button" class="btn_modal_mostrar" href="#"
               data-title="{{$viaje->title}}"
               data-descripcion="{{$viaje->descripcion}}"
               data-image="{{ asset(Storage::url($viaje->image))}}" > 

          <img  src="{{ asset(Storage::url($viaje->image))}}" class="card-img-top" alt="..." width="100%"> </a>
              <div class="card-body">
               
                <hr>
                <p class="card-text"><small class="text-muted">{{ $viaje->updated_at->diffForHumans()}}</small></p>
                 
                </a>
              </div>
            </div>
            
      </div>

          @empty
              <li>No hay p</li>
              
          @endforelse


    </div>      
    <br>


  </section>
comment  --}} 
 {{-- comment 
<h1><b>Ofertas y Promociones</b></h1>
<hr id="subtibarra">

  <div class="modal fade bd-example-modal-x " tabindex="-1" role="dialog" id='modal_viajes'>
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
      <div class="modal-content">
        
        <div class="modal-body" >
          <div class="row">
            <div class="col-lg" >
              <img id="imagen" class="card-img-top img-fluid" style="width: auto" height="100%" style="margin-left: -550px; position:relative;">
        
            </div>
            <div class="col" id="contenido">
              <h1 class="modal-title" id='title_modal'>Modal title</h1>
              
              <hr>
              <br>
              <p id="descripcion" style="white-space: pre-line;"></p>
              
              <form action="{{route('viaje.reserva')}}" method="POST">
                @csrf
               <p>Reservar vuelo:</p> 
               
                <div class="form-row">
                  <div class="col">
                    <input type="text" id='title_modale' hidden name="viaje">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombres">
                    {!! $errors->first('nombre','<small>:message</small><br>')!!}
                  </div>
                  <div  class="col">
                    <input type="apellido" class="form-control" name="apellido" placeholder="Apellido">
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
                  <br>
                  <button  class="btn btn-outline-primary btn-lg btn-block">Enviar</button>
              </form>
            
          
            </div>
          </div>
         </div>
        
      </div>
    </div>
  </div>





  <div class="container-fluid">
		<!--slider------------------->
		<ul id="autoWidth" class="cs-hidden">
      
		<!--1------------------------------>
  <li class="item-a">

    @forelse($viajes as $viaje)
	  <!--slider-box-->
		<div class="box">	
    <!--model-->
    <a type="button" class="btn_modal_mostrar" href="#"
      data-title="{{$viaje->title}}"
      data-descripcion="{{$viaje->descripcion}}"
      data-image="{{ asset(Storage::url($viaje->image))}}"  > 
    <img  src="{{ asset(Storage::url($viaje->image))}}" class="model" alt="..." > </a>
    <!--details
		<div class="details">		
    <p>{{ $viaje->updated_at->diffForHumans()}}</p>
    </a>
		</div>-->
  
    </div>
    


    </li>
    @empty
    no hay viajes que mostrar
       
   @endforelse
		</ul>
			
			
	
	
    </div>
    

--}}

  @include('partials.modal')
@include('partials.footer')

{{-- MOdal --}}
<script type="text/javascript"> 


  $(document).on('click', '.btn_modal_mostrar', function() {

      $('#modal_viajes').modal('show');
      console.log($(this).data('imagen'));
      $('#title_modal').text($(this).data('title'));
      $('#title_modale').val($(this).data('title'));
      $('#descripcion').text($(this).data('descripcion'));
      $('#imagen').attr('src', $(this).data('image'));
  });

 
</script>

{{-- MOdal --}}