<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Nuevo</title>
</head>
<body>
    <p>
        Nuevo mensaje de : {{ $mensaje['name']}} - {{$mensaje['email']}}
    </p>
    <p>
        Asunto: <strong> {{ $mensaje['subject']}} </strong> 
    </p>
    <p>
       Mensaje: {{ $mensaje['content']}}
    </p>
</body>
</html>