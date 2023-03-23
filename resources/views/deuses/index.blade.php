<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Deuses</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Deuses</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('deuses.create') }}">Novo Deus</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Poderes</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Arma</th>
                    <th>Animal</th>
                    <th>Filiação</th>


                @foreach ($deuses as $deuses)
                    <tr>
                        <td>{{ $deuses->nome }}</td>
                        <td>{{ $deuses->poderes }}</td>
                        <td>{{ $deuses->idade}}</td>
                        <td>{{ $deuses->sexo}}</td>
                        <td>{{ $deuses->arma}}</td>
                        <td>{{ $deuses->animal}}</td>
                        <td>{{ $deuses->filiacao}}</td>
                        <td> <a class="link" href="{{ route('deuses.show', $deuses->id) }}">
                            Ver
                        </a>
                    </td>
                    </tr>


                @endforeach
            </table>
        </div>


    </body>
</html>
