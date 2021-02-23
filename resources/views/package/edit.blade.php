@include('partials.nav_admi')


<section>
 
    <br>
      <div class="container border">   <h1>Editar paquete</h1> 
        <hr>
        
         <br>
        @include('partials.validation-errors')
        <form method="POST"  action="{{route('package.update', $package, $country)}}" enctype="multipart/form-data">
         @method('PATCH')
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
               @foreach ($country as $countries)
             
              <option value="{{$countries->id}}">{{$countries->title}}</option>   
             @endforeach
             </select>
               </div> </div>
             </label>
             <button class="btn btn-outline-info  btn-lg btn-block" style="margin:4% ">Actualizar</button>
             
           </div>
         </div>  
              

        </form>
      </div>
</section>
@include('partials.footer_admi')    