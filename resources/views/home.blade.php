@include('partials.nav')
<section class="buscaador">
    <div class="subtitulo">
      <h1><b> Encuentra cientos de vuelos a la vez</b></h1>
      <hr id="subtibarra">
      <iframe src="http://startravelperu.clickandbook.com" frameborder="0" height="100%" width="100%" style="overflow:hidden; height:100%; width:100%; min-height:500px;"></iframe>
    </div>      
  </section>
  <section class="container-fluid viajes">
    <h1><b>Ofertas y Promociones</b></h1>

    <hr id="subtibarra">



    <div class="row">
       @forelse($viajes as $viaje)
          <div class="col-lg">
          <div class="card">
             <a  href="{{ route('viaje.show',$viaje)}} "> 
              
         
          <img  src="{{ asset(Storage::url($viaje->image))}}" class="card-img-top" alt="..."> </a>
              <div class="card-body">
                <h5 class="card-title">{{ $viaje->title}}</h5>
                <hr>
                <p class="card-text"><small class="text-muted">{{ $viaje->updated_at->diffForHumans()}}</small></p>
              </div>
            </div>
            
      </div>

          @empty
              <li>No hay p</li>
              
          @endforelse


    </div>      
   

{{-- datos --}}
  </section>
@include('partials.footer')