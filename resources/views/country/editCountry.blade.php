@include('partials.nav_admi')


<section>
 
    <br>
      <div class="container border">   <h1>Editar Categoria</h1> 
        <hr>
         <br>
        @include('partials.validation-errors')
        <form method="POST"  action="{{route('country.update', $country)}}" enctype="multipart/form-data">
         @method('PATCH')
              @include('_formCountry',['btnText'=>'Actualizar'])   
        </form>
      </div>
</section>

@include('partials.footer_admi')   