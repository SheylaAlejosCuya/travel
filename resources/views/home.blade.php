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
}

.box{
	width:auto;
	background-color:#ffffff;
	border-radius: 10px;
	box-shadow: 2px 10px 12px rgba(0, 0, 0, 0.5);
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-between;
	box-sizing: border-box;
	margin: 20px 10px;
}
.model{
	height: 700px;
	max-height: 100%;
	max-width: 100%;
}
.details{
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 300px;
}
.details p{
	font-family: calibri;
	font-weight: bold;
	color:#6a6a74;
	text-align: center;
	margin-top: 20px;
}
.marvel{
	color:#32323e;
	font-weight: bold;
	letter-spacing: 2px;
	font-family: bebas kai;
	font-size: 25px;
}
.marvel:hover{
	color:#fff;
	font-weight: bold;
	letter-spacing: 2px;
	font-family: bebas kai;
	font-size: 25px;
}
.logo{
	height: 60px;
}
.box:hover{
  background-color:#1a3898; 
  color:#fff;
	transform-style: preserve-3d;
	transform: scale(1.02);
	transition: all ease 0.3s;
}
.details p:hover{
  font-family: calibri;
	font-weight: bold;
	color:#fff;
	text-align: center;
	margin-top: 20px;
}
.box:hover .marvel{
	color:#fffff;
	transition: all ease 0.5s;
}
/*--responsive for mobile phone-
@media(max-width:520px){
	.box{
		width: 94%;
		height: 800px;
	}
	.model{
		height:600px;
	}
	.details p{
		font-size: 16px;
		width: 100px;
	}
	-*/
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
.btn-primary {
    color: #fff;
    background-color: #a8cf45;
    border-color: #a8cf45;
}
.h1{
  text-align: center;
    color: #1a3898;
}

</style>
<section class="buscaador">
    <div class="subtitulo">
      <h1><b> Encuentra cientos de vuelos a la vez</b></h1>
      <hr id="subtibarra">
      
     
       <iframe src="http://startravelperu.clickandbook.com" frameborder="0" height="100%" width="100%" style="overflow:hidden; height:100%; width:100%; min-height:500px;"></iframe>
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
              <img id="imagen" class="card-img-top img-fluid" style="width: 100%" style="margin-left: -550px; position:relative;">
        
            </div>
            <div class="col" id="contenido">
              <h1 class="modal-title" id='title_modal'>Modal title</h1>
              <hr>
              <br>
              <p id="descripcion" style="white-space: pre-line;"></p>
            <button type="button" class="btn btn-primary">Consultar disponibilidad</button>
          
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
    data-image="{{ asset(Storage::url($viaje->image))}}" > 
    <img  src="{{ asset(Storage::url($viaje->image))}}" class="model" alt="..."> </a>
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