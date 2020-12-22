@include('partials.nav_admi')


 
<section>
  
  <div class="container">
    <br>
    <h1>Flyers Web</h1>
    <br>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Campaña</th>
          <th scope="col">Descripción</th>
          <th scope="col">Image</th>
          <th scope="col">
              -
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse($viajes as $viaje)
      <tr>
      <th scope="row">{{ $viaje->id}}       </th>
      <td>{{ $viaje->title}}       </td>
      <td>{{ $viaje->descripcion}}       </td>
      <td> <img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="50px"></td>
      <td> <a href="{{ route('viaje.show', $viaje)}}">Detalles</a></td>
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