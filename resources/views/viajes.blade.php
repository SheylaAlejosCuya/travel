<h1>viajes</h1>

<ul>
    @forelse($viajes as $viaje)
       <a href="{{ route('viaje.show',$viaje)}}"> <li>
        {{ $viaje->title}}       
        </li></a>
    @empty
        <li>No hay p</li>
    @endforelse
</ul>

