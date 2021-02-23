<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>          
        <th scope="col">categoria</th>
        <th scope="col">Documento</th>
        <th scope="col">Fecha de creación</th>
        <th scope="col">
            Acción
        </th>
      </tr>
    </thead>
    <tbody>
      @forelse($packages as $package)
    <tr>
    <th scope="row">{{ $package->id}}</th>
    <td>{{ $package->title}}</td>    
    <td>{{$package->country->title}}</td>
    
    <td><a type="button" class="btn_modal_mostrar btn btn-outline-secondary"  data-toggle="modal" 
      data-target=".bd-example-modal-xl" 
      data-documento="{{ asset(Storage::url($package->documento))}}">Ver Documento
 {{-- comment 
   <iframe src="{{ asset(Storage::url($package->documento))}}" frameborder="0"></iframe>--}}
    </a>
</td>
    <td>{{$package->created_at}}</td>
    <td> 
      <form method="POST" action="{{ route('package.destroy',$package)}}" enctype="multipart/form-data">
      @csrf @method('DELETE')
      <button class="btn btn-outline-danger  btn-lg btn-block" id="eli">Eliminar</button>
      
      </form></td>
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
{{-- modal inicio --}}

<div class="modal fade bd-example-modal-xl" id='modal_packages' tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content" style="height: 1000px;
    width: 1200px;">
      <div class="modal-body">
        <iframe id="documento" frameborder="0" width="100%" style="height: 900px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
{{-- modal fin --}}
