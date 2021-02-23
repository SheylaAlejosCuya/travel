<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Mensaje Nuevo</title>
</head>
<body style=" font-family: 'Rubik', sans-serif;
font-size: 25px;">
    <div class="padre">
        <div class="hijo" style="width: 450px;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #ccc;
        padding: 1%;">
            <h2 style="text-align: center;
            color: #1a3898;">Star Travel</h2>
            <hr>
            <p>
                <b style="color: #1a3898;">Nombres:</b> {{ $package['nombre']}}
                 {{$package['apellido']}} <br> <b style="color: #1a3898;">Correo:</b> {{ $package['correo']}} <br> <b style="color: #1a3898;">Telefono:</b>  {{ $package['telefono']}} <br> <b style="color: #1a3898;">Vuelo:</b>
                <b id='title_modale'>{{$package['package']}}</b> <br>
                <br> <b style="color: #1a3898;">Mensaje:</b> {{ $package['content']}}{{-- comment --}}
            </p>
        </div>
    </div>


</body>

</html>