@csrf
  {{-- comment 
<label for="">
    <img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="50px">    
    <br>

    Titulo
    <input type="text" name="title" value="{{old('title', $viaje->title) }}">
</label>
    <br>
<label for="">
    Descripcion
    <br>
    <textarea type="text" name="descripcion" >{{ old('descripcion', $viaje->descripcion) }}</textarea>
</label>
    <br>
<label for="image">
        <input type="file" name="image">
</label>
    <br>
<button>{{$btnText}}</button>
    
--}}
<img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="150px">    
<br>
<div class="form-group row">

    <label for="inputEmail3" class="col-sm-2 col-form-label">Campaña:</label>
    
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="title" value="{{old('title', $viaje->title) }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción:</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="inputPassword3"name="descripcion" >{{ old('descripcion', $viaje->descripcion) }}</textarea>
    </div>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFileLang" lang="es"  name="image">
    <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
  </div>
  <div class="form-group row">
    <div class="col-sm">
        <br>
        <button  class="btn btn-outline-info  btn-lg btn-block">{{$btnText}}  </button>
       </div>
  </div>