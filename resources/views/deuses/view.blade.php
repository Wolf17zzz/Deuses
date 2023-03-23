<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Deus #{{ $deuses->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $deuses->nome }}</h1>

            <h1>{{ $deuses->poderes }}</h1>

            <h2>{{ $deuses->idade }} anos</h2>


            @if($deuses->sexo == 'F')
                <h2>Feminino</h2>
            @elseif($deuses->sexo == 'M')
                <h2>Masculino</h2>
            @endif

            <h2>{{ $deuses->arma }}</h2>

            <h2>{{ $deuses->animal }}</h2>

            <h2>{{ $deuses->filiacao }}</h2>

            <a href="{{ route('deuses.index') }}">Voltar a lista</a>
        </div>
    </body>
</html>
