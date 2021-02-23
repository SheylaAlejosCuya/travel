@include('partials.nav_admi')
<br>
<div class="container border">
    <h1>{{ $country->title}}</h1>
    <hr>
    <div class="row">
      
        <div class="col">
        
           <div class="row">
               <div class="col">
                <a href="{{ route('country.edit', $country)}}" type="button" class="btn btn-outline-info  btn-lg btn-block">Editar</a>
          
               </div>
               <div class="col">
                <form method="POST" action="{{ route('country.destroy',$country)}}" enctype="multipart/form-data">
                    @csrf @method('DELETE')
                    <button class="btn btn-outline-danger  btn-lg btn-block" id="eli">Eliminar</button>
                    </form>
               </div>
           </div>
            
            
        </div>
           
      </div>
      
</div>
<a style="font-size: 25px;padding:3%;" href="{{ route('country.index')}}">volver</a>  
{{-- comment 

<p>
<h1>{{ $viaje->title}}</h1>
<a href="{{ route('viaje.edit', $viaje)}}">Editar</a>
<form method="POST" action="{{ route('viaje.destroy',$viaje)}}" enctype="multipart/form-data">
@csrf @method('DELETE')
<button>Eliminar</button>
<img src="{{ asset(Storage::url($viaje->image))}}" alt="" widht="50px">
</form>
<br>
{{ $viaje->descripcion}}
</p>
--}}
@include('partials.footer_admi')  






