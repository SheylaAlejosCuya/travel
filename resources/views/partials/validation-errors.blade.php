@if($errors->any())
    @foreach($errors->all() as $error)
    
        <div class="alert alert-danger" role="alert">
           <strong> <img src="images/advertir.png" alt="" style="padding-left:15px; padding-right: 15px;"> {{$error}}</strong> 
        </div>
    @endforeach
@endif  