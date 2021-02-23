<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
       
	<link rel="shortcut icon" href="img/logo-travel.png" />
</head>
<style>
	@charset "utf-8";
/* CSS Document */
body{
  	color: white;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 80vh;
    margin: 0;
	  background-size: cover;
    background-image: url(images/fondoo.png);
    background-attachment: fixed;
    background-repeat: no-repeat;

}
.full-height {
    height: 80vh; 
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
 
.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links>a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}

nav{
	color: #ffff;
}
a.pass_lost{
    color: white;
}
  
a.pass_lost:hover {
  	color: white;
  }

#formulario_admi{
    margin: 5%;
    background: rgba(26, 56, 152, 0.8);
    color: white;
    padding: 55px;
    text-align: center;
 	border-radius: 5%;   
}
ul.nav li a{
    color: white;
}

input[type="text"] {
    width: 100%;
    border: 2px solid white;
    color: white;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
    background: rgba(26, 56, 152);
  }
  input[type="password"] {
    width: 100%;
    border: 2px solid white;
    color: white;
    border-radius: 4px;
    margin: 8px 0;
    outline: none;
    padding: 8px;
    box-sizing: border-box;
    transition: 0.3s;
    background:rgba(26, 56, 152);
  }
  
  input[type="text"]:focus {
    border-color: dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue;
  }
  input[type="password"]:focus {
    border-color: dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue;
  }
  
  .inputWithIcon input[type="text"] {
    padding-left: 40px;
  }
  .inputWithIcon input[type="password"] {
    padding-left: 40px;
  }
  
  .inputWithIcon {
    position: relative;
  }
  
  .inputWithIcon i {
    position: absolute;
    left: 0;
    top: 1px;
    color: rgba(26, 56, 152);
    ;
    transition: 0.3s;
  }
  
  .inputWithIcon input[type="text"]:focus + i {
    color: dodgerBlue;
  }
  .inputWithIcon input[type="password"]:focus + i {
    color: dodgerBlue;
  }
  
  .inputWithIcon.inputIconBg i {
    background-color: white;
    color:rgba(26, 56, 152);
    padding: 9px 4px;
    border-radius: 4px 0 0 4px;
  }
  
  .inputWithIcon.inputIconBg input[type="text"]:focus + i {
    color:rgba(26, 56, 152);
    background-color: dodgerBlue;
  }
  .inputWithIcon.inputIconBg input[type="password"]:focus + i {
    color:rgba(26, 56, 152);
    background-color: dodgerBlue;
  }
  #boton{
  	background: white;
  	border-color: white;
  	color: rgba(26, 56, 152);
  	font-size: 20px;
      width: 150px;
      text-align: center;
}
#boton:hover{
  background: rgba(26, 56, 152);
  border-color: white;
  color: white;
  font-size: 20px;
  width: 150px;
}
#logo{
  margin-top: -55%;
}
</style>
<body>
    <div id="app">
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   
                    <ul class="navbar-nav ml-auto">
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


<header>
    <nav class="navbar sticky-top">
   <a class="navbar-brand" href="#">
          <img src="images/logo-travel.png" width="170px" height="67" alt="" loading="lazy">
     </a>
   <ul class="nav justify-content-end">
       <li class="nav-item">
           <h1>Administrador</h1>
       </li>
   </ul> 
</nav>
</header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
