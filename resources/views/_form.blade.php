@csrf
<div class="row">
  <div class="col">
  <img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="100%" alt="Vista previa">       

  </div>
  <div class="col-lg">

  
<h2>Elementos</h2>

<label for="inputEmail3" class="col-sm-2 col-form-label">Campaña:</label>

    <div class="col-sm-10">
    <input type="text"  class="form-control-file" id="inputEmail3" name="title" value="{{old('title', $viaje->title) }}">
    </div>
</label>
    <br>
<label for="inputPassword3" class="col-sm-2 col-form-label">Descripción:</label>
<div class="col-sm-10">
    <textarea type="text" class="form-control" id="inputPassword3" name="descripcion" >{{ old('descripcion', $viaje->descripcion) }}</textarea>
  </div>
</label>
    <br>
<label for="image">
  <div class="col-sm-10">
        <input type="file" name="image" accept="image/*">
      </div>
</label>
    <br>
    <div class="col-sm-10">
<button class="btn btn-outline-info  btn-lg btn-block">{{$btnText}}</button>
</div>
</div>
</div>
      {{-- comment 

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
  <label for="image">
    <input type="file" name="image">
</label>
 
  <div class="form-group row">
    <div class="col-sm">
        <br>
        <button  class="btn btn-outline-info  btn-lg btn-block">{{$btnText}}  </button>
       </div>
  </div>--}}