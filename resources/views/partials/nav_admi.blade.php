<!DOCTYPE html>
<html>
        
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="css/style_admi.css">
<link rel="stylesheet" href="../css/style_admi.css">
<link rel="stylesheet" href="../../css/style_admi.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="images/logo-travel.png" alt="" width="200px">



  <hr>
  <a href="{{route('viaje.index')}}">Flyers</a>
   <hr>
  <a href="{{route('country.index')}}">Categorias</a>
  <hr>
  <a href="{{route('package.index')}}">Paquetes</a>
 
 
  @guest
  <hr>
  <a href="{{route('login')}}">Login</a>      
  <hr>
  @else
  <hr>
  <a href="{{route('login')}}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">Cerrar sesion</a>  
  <hr>
@endguest
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</div>

<div id="main">
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>