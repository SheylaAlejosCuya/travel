@include('partials.nav_admi')


 
<section>
  
  <div class="container">
    <br>
    <h1>Categoria</h1>
    <br>
    <hr>
    <a href="{{route('country.create')}}">Crear nueva Categoria</a>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titulo</th>
          <th scope="col">Fecha de Creación</th>
          <th scope="col">
              Acción
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse($countries as $country)
      <tr>
      <th scope="row">{{ $country->id}}       </th>
      <td>{{ $country->title}}       </td>
      <td>{{$country->created_at}}</td>
     <td> <a href="{{ route('country.edit', $country)}}" type="button" class="btn btn-outline-info  btn-lg btn-block">Editar</a><form method="POST" action="{{ route('country.destroy',$country)}}" enctype="multipart/form-data">
      @csrf @method('DELETE')
      <button class="btn btn-outline-danger  btn-lg btn-block" id="eli">Eliminar</button>
      </form></td>
    </tr>
 
    @empty
        <li>No hay paises que mostrar</li>
    @endforelse
        
      </tbody>
    </table>
  </div>
  @auth
      {{auth()->user()->index}}
  @endauth
</section>
{{-- datos 

<a href="{{route('viaje.create')}}">crear nuevo viajea</a>
<ul>
    @forelse($viajes as $viaje)
       <a href="{{ route('viaje.show',$viaje)}}"> <li>
        {{ $viaje->title}}       
        </li>
    <li>
        <img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="50px">    
    </li></a>
    @empty
        <li>No hay p</li>
    @endforelse
</ul>
{{-- datos --}}
@include('partials.footer_admi')   