
@include('partials.nav_admi')
<br>
<div class="container border">
    <h1>{{ $package->title}}</h1>
    <hr>
    <div class="row">
  
      
        <div class="col">
        <iframe src="{{url('storage/archivos/'.$package->file)}}" frameborder="0"></iframe> 
        </div>
        <div class="col">
           <div class="row">
               <div class="col">
                <a href="{{ route('package.edit', $package)}}" type="button" class="btn btn-outline-info  btn-lg btn-block">Editar</a>
          
          <a style="font-size: 25px;padding:3%;" href="{{ route('package.index')}}">volver</a>  
               </div>
               <div class="col">
                <form method="POST" action="{{ route('package.destroy',$package)}}" enctype="multipart/form-data">
                    @csrf @method('DELETE')
                    <button class="btn btn-outline-danger  btn-lg btn-block" id="eli">Eliminar</button>
                    
                    </form>
               </div>
           </div>
            
            
        </div>
           
      </div>
      
</div>
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