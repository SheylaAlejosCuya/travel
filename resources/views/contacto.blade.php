<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_slider.css"/>
    <link rel="stylesheet" href="css/lightslider.css"/>
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Travel</title>
    <link rel="shortcut icon" href="images/logo-travel.png" />
  </head>
  <body>


   

 <style>
     .redes {
  /* IMPORTANTE */
  text-align: center;
}
.btn-outline-primary {
    color: #1a3898;
    border-color: #1a3898;
}
.btn-outline-primary:hover {
    color: #fff;
    background-color: #1a3898;
    border-color: #1a3898;
}
.padre {
  
  /*IMPORTANTE*/
  display: flex;
  justify-content: center;
  align-items: center;
}

.hijo {
 background: rgba(255, 255, 255, 0.6);
 padding: 2%;
  width: 720px;
  border-radius: 15px;
  margin-bottom: 3%;
}
#cont{
    background-image: url('images/cuzcoo.png');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #464646;
    color: white;
    height: auto;
    text-align: left;
    
    
}
     </style>
<section id="cont" class="container-fluid">
   
    <nav class="navbar navbar-light navbar-expand-lg bg-ligth">
        <a class="navbar-brand" href="{{ route('viaje.home')}}">
            <img src="images/logo-travel.png" width="200"  class="d-inline-block align-top" alt="" loading="lazy">
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item ">                   
                <a class="nav-link" href="{{ route('nosotros')}}" style="border-bottom-left-radius: 15px; border-top-left-radius: 15px; color:white;"> <img src="images/nosotros.png" width="30"  class="d-inline-block align-top" alt="">Nosotros </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link " href="{{ route('contacto')}}" style="border-bottom-right-radius: 15px; border-top-right-radius: 15px; color:white;"> <img src="images/pregunta.png" alt="" width="20px" class="d-inline-block align-top">Contacto</a>
              </li>
            </ul>
          </div>
        </nav>
        
        <div class="padre" >
           
            <div class="hijo">
                <div class="form" style="  text-align: center; ">
                    <form>
                        <h1>Contacto</h1>
        <hr>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Asunto">
                          </div>
                          <div  class="col">
                            <input type="email" class="form-control" placeholder="Correo">
                          </div>
                        </div>
                          <div>
                              <br>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                          </div>
                          <br>
                          <button type="button" class="btn btn-outline-primary btn-lg btn-block">Enviar Mensaje  </button>
                      </form>
                      <div class="row" style="padding: 5%">
                    <div class="col-lg">
                        <img src="images/telefono.png" alt="">
                        <b style="color:#1a3898"> +51 987 654 321</b>
                    </div>
                    <div class="col-lg">
                        <img src="images/mail.png" alt="">
                        <b style="color:#1a3898"> info@startravelperu.com</b>
                    </div>
                    
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249743.72060533662!2d-77.12820757769941!3d-12.026603229136008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1609066396938!5m2!1ses-419!2spe" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           
                </div>
               
            </div>
            
        </div>
        
   
</section>
<section class="container-fluid footer">
    <div class="row">
      <div class="col">
        <img src="images/logo-travel.png" alt="" width="50%">
      </div>
      <div class="col">
      <p><b>NUESTROS HOTELES</b></p>
      <p>Tarapoto</p>
      <p>Lambayeque</p>
      <p>Piura</p>
      </div>
      <div class="col">
        <p><b>CONTÁCTANOS</b></p>
        <p>987 654 321</p>
        <p>info@startravelperu.com</p>
      </div>
    </div>
    <div class="copy">
      <hr>
      <div class="redes" style="  text-align: center;r">
        <a href="https://www.facebook.com/Startravel360" target="_blank"> <img src="images/fb.png" alt="" width="40px" height="40px"></a>
        <a href="https://www.instagram.com/startravelperu" target="_blank"><img src="images/ig.png" alt="" width="40px" height="40px"></a>
         <a href="wa.link/fbxsb6" target="_blank"><img src="images/wspFooter.png" alt="" width="40px" height="40px"></a>
       </div>
      <p>Copyright <b>Appsitec</b> Todos los derechos reservados © 2020</p>
    </div>
    
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>