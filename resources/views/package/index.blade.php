@include('partials.nav_admi')


 
<section>
  
  <div class="container">
    <br>
    <h1>Paquetes Web</h1>
    <br>
    <hr>
    <a href="{{route('package.create')}}" type="button" class="btn_modal_mostrar">Crear nuevo paquete</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Crear nuevo paquete
    </button>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titulo</th>          
          <th scope="col">PDF</th>
          <th scope="col">
              -
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse($packages as $package)
      <tr>
      <th scope="row">{{ $package->id}}</th>
      <td>{{ $package->title}}</td>    
      <td> <a href="/paquetes/{{$package->file}}">ver</a></td>
      <td> <a href="{{ route('package.show', $package)}}">Detalles</a></td>
    </tr>
 
    @empty
        <li>No hay viajes que mostrar</li>
    @endforelse
        
      </tbody>
    </table>
  </div>
  @auth
      {{auth()->user()->index}}
  @endauth
</section>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container border">   <h1>Nuevo paquete</h1> 
          <hr>
           <br>
           @include('partials.validation-errors')
  <form method="POST" action="{{route('package.store')}}" enctype="multipart/form-data">
     
      @include('_formPackage',['btnText'=>'Guardar'])
  </form>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

@include('partials.footer_admi')   