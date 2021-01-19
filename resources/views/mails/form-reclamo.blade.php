<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Reclamo registrado</title>
</head>
<body style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
    <hr>

    <h1>Libro de Reclamaciones virtual</h1>
    <hr>
    <p style="color: #1a3898;text-align: left;">
        Este formulario es exclusivamente para expresar la disconformidad con algún producto o servicio brindado por <b> Star Travel Multiservice EIRL.</b> 
        
     </p>
     <p style="color: #1a3898; text-align: left;" >
         <b>Razón Social: </b>STAR TRAVEL MULTISERVICE EIRL. <br>
         <b>Dirección Legal: </b>COO. VIV COVITI MZA. G LOTE. 4 CRUCE DE ANGELICA GAMARRA Y TOMAS VALLE LIMA-LIMA-SAN MARTIN DE PORRES <br>
         <b>RUC: </b>20566460352 <br>
       </p>
    <p>
        <b> 1. Identificación del consumidor reclamante:</b> 
        </p>
        <p>
        <b>Nombres Completos:</b>   {{ $reclamo['nombre']}} <br>
        <b>Domicilio :</b>   {{ $reclamo['domicilio']}} <br>
        <b>Tipo de documento: </b>   {{ $reclamo['documento']}} <br>
        <b>Número de documento: </b>   {{ $reclamo['numeroDoc']}} <br>
        <b>Teléfono :</b>   {{ $reclamo['telefono']}} <br>
        <b>Correo electrónico :</b>   {{ $reclamo['email']}} <br>
      </p>  
      <p>
        <b> 2. Identificación del bien contratado:</b> 
        </p>
        <p>
        <b>Tipo de bien a reclamar:</b>   {{ $reclamo['bien']}} <br>
        <b>Monto reclamado:</b>   {{ $reclamo['monto']}} <br>
        <b>Descripción del producto o servicio:</b>   {{ $reclamo['DescProdu']}} <br>
      </p>
      <p>
        <b> 3. Detalle de la reclamación</b> 
        </p>
        <p>
        <b> Tipo de reclamo:</b>   {{ $reclamo['tipReclamo']}} <br>
        <b>Monto reclamado:</b>   {{ $reclamo['DetReclamo']}} <br>
        <b>Descripción del producto o servicio:</b>   {{ $reclamo['PedReclamo']}} <br>
        <b> Declaró ser el titular del servicio y acepto el contenido del presente formulario manifestando bajo declaración jurada la veracidad de los hechos descritos.
        :</b> {{ $reclamo['acuerdo']}}  
      </p> 
     
</body>
</html>