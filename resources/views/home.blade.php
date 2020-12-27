@include('partials.nav')
<style>
	@charset "utf-8";
/* CSS Document */
body{
	margin:0px;
	padding:0px;
}
ul{
	list-style:none;
}
a{
  text-decoration:none;
  height: 100%;
  width:auto; 
}

.box{
  height:700px;
	background-color:#ffffff;
	border-radius: 10px;
	box-shadow: 2px 10px 12px rgba(0, 0, 0, 0.5);
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-between;
	box-sizing: border-box;
	margin: 0px;
}
.model{
  height: 100%;
  width: auto;
	max-height: 100%;
	max-width: 100%;
}


@media(max-width:520px){
  .model {
    height:300px;
    width: auto;
    max-height: 100%;
    max-width: 100%;
}
.box{
  height: 300px;
}
}




.card-img, .card-img-top {
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
    padding: 5%;
}
#contenido{
  -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
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
.img-fluid {
    max-width: 100%;
    height: auto;
    border-radius: 2rem;
}
.btn-outline-primary {
  color: #a8cf45;
    border-color: #a8cf45;
}
.btn-outline-primary:hover {
    color: #fff;
    background-color: #a8cf45;
    border-color: #a8cf45;
}
.h1{
  text-align: center;
    color: #1a3898;
}
form{
  border: 1px solid rgb(202, 202, 202);
  border-radius: 15px;
  padding: 3%;
  margin-top:5%;
}
.btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active, .show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #a8cf45;
    border-color: #a8cf45;
    
}
.btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(168,207,69,.5);
}

}
</style>
<section class="buscaador">
    <div class="subtitulo">
      <h1><b> Encuentra cientos de vuelos a la vez</b></h1>
      <hr id="subtibarra"> 
        <iframe src="http://startravelperu.clickandbook.com"  target="_blank" frameborder="0"  height="100%" style="overflow:hidden; height:100%; width:100%; min-height:500px;"></iframe>
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
              
              <form>
               <p>Reservar vuelo:</p>
                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Nombres">
                  </div>
                  <div  class="col">
                    <input type="email" class="form-control" placeholder="Correo">
                  </div>
                </div>
                  <div>
                   </div>
                  <br>
                  <button type="button" class="btn btn-outline-primary btn-lg btn-block">Consultar disponibilidad</button>
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
  @include('partials.modal')
@include('partials.footer')

{{-- MOdal --}}
<script type="text/javascript"> 


  $(document).on('click', '.btn_modal_mostrar', function() {

      $('#modal_viajes').modal('show');
      console.log($(this).data('imagen'));
      $('#title_modal').text($(this).data('title'));
      $('#descripcion').text($(this).data('descripcion'));
      $('#imagen').attr('src', $(this).data('image'));
  });

 
</script>

{{-- MOdal --}}