@include('partials.nav_admi')


<section>
 
    <br>
      <div class="container border">   <h1>Nuevo Viaje</h1> 
        <hr>
         <br>
         @include('partials.validation-errors')
<form method="POST" action="{{route('viaje.store')}}" enctype="multipart/form-data">
   
    @include('_form',['btnText'=>'Guardar'])
</form>
      </div>
  </section>
{{-- 

<h1>Crear viajeo</h1>
@include('partials.validation-errors')
<form method="POST" action="{{route('viaje.store')}}" enctype="multipart/form-data">
   
    @include('_form',['btnText'=>'Guardar'])
</form>
  comment --}}
@include('partials.footer_admi')   