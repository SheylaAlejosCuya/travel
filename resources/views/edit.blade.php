@include('partials.nav_admi')


<section>
 
    <br>
      <div class="container border">   <h1>Editar Viaje</h1> 
        <hr>
         <br>
        @include('partials.validation-errors')
        <form method="POST"  action="{{route('viaje.update', $viaje)}}" enctype="multipart/form-data">
         @method('PATCH')
              @include('_form',['btnText'=>'Actualizar'])   
        </form>
      </div>
</section>
<a style="font-size: 25px;padding:3%; text-aling:rigth" href="{{ route('viaje.index')}}">volver</a> 
@include('partials.footer_admi')   