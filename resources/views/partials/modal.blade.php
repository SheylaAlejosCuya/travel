{{-- comment 

<br>
<div class="container border">
    <h1>{{ $viaje->title}}</h1>
    <hr>
    <div class="row">
        <div class="col">
            <img src="{{ asset(Storage::url($viaje->image))}}" alt="" width="500px">
          </div>
        <div class="col">
          <p>Descripción:</p>
           <p>{{ $viaje->descripcion}}</p>
       
            
        </div>
           
      </div>
      
</div>
--}}
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
