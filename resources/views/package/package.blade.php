@include('partials.nav_admi')


 
<section>
  
  <div class="container">
    <br>
    <h1>Paquetes Web</h1>
    <br>
    <hr>
   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Crear nuevo paquete
    </button>
   @include('package/packagetable')
</section>
{{-- modal inicio --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container border">   <h1>Nuevo paquete</h1> 
          <hr>
          
           <br>
           @include('partials.validation-errors')
  <form method="POST" action="{{route('package.store')}}" enctype="multipart/form-data">
    @csrf
<div class="row">
  <div class="col">
 
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre:</label>
  
    <div class="col-sm-12">
   {{-- comment --}}
      <input type="text"  class="form-control-file" id="inputEmail3" name="title">
      <label for="exampleFormControlSelect1">Categoria</label>
      <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" name="country_id" >
      @foreach ($countries as $country)
    
     <option value="{{$country->id}}">{{$country->title}}</option>   
    @endforeach
    </select>
      </div> </div>
    </label>
    <label for="documento">
      <div class="col-sm-10">
            <input type="file" name="documento" accept="application/pdf">
          </div>
    </label>
    <button class="btn btn-outline-info  btn-lg btn-block" style="margin:4% ">guardar</button>
  </div>
</div>
  </form>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
{{-- modal fin --}}
@include('partials.footer_admi')   
<script>
  $(document).on('click', '.btn_modal_mostrar', function() {

  $('#modal_packages').modal('show');
  console.log($(this).data('documento'));
  $('#documento').attr('src', $(this).data('documento'));
  });
</script>