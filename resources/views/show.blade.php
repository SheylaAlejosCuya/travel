@include('partials.nav_admi')
<br>
<div class="container border">
    <h1>{{ $viaje->title}}</h1>
    <hr>
    <div class="row">
        <div class="col">
            <img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="500px">
          </div>
        <div class="col">
          <p>Descripción:</p>
           <p>{{ $viaje->descripcion}}</p>
           <div class="row">
               <div class="col">
                <a href="{{ route('viaje.edit', $viaje)}}" type="button" class="btn btn-outline-info  btn-lg btn-block">Editar</a>
          
               </div>
               <div class="col">
                <form method="POST" action="{{ route('viaje.destroy',$viaje)}}" enctype="multipart/form-data">
                    @csrf @method('DELETE')
                    <button class="btn btn-outline-danger  btn-lg btn-block" id="eli">Eliminar</button>
                    </form>
               </div>
           </div>
            
            
        </div>
           
      </div>
      
</div>
<a style="font-size: 25px;padding:3%;" href="{{ route('viaje.index')}}">volver</a>  
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