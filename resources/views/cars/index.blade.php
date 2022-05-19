<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Lista auto
    </h1>
    <a href="{{route("home")}}">Torna alla Home</a>
    <a href="{{route("cars.create")}}">Aggiungi Auto</a>
    @foreach ($cars as $car)
    <div>
        <h3>
            {{$car->marca}}
        </h3>
        <h4>
            {{$car->numero_telaio}}
        </h4>
        <a href="{{route("cars.show", $car->id)}}">Dettagli</a>
    </div>
       
    @endforeach
</body>
</html>