<h1>Paises</h1>

<ul>
    @forelse($countries as $country)
       <a href="{{ route('country.show',$country)}}"> <li>
        {{ $country->title}}       
        </li></a>
    @empty
        <li>No hay paises registrados</li>
    @endforelse
</ul>

