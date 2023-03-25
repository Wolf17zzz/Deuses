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
            <h1>Edição de Deuses {{ $deuses->id }}</h1>

            <form method="POST" action="{{ route('deuses.update', $deuses->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $deuses->nome }}">
                </div>

                <div class="mb-3">
                    <label>Poderes</label>
                    <input type="text" name="poderes" class="form-control" value="{{ $deuses->poderes }}">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control" value="{{ $deuses->idade }}">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M" {{ $deuses->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $deuses->sexo == 'F' ? 'selected' : '' }}>Feminino</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Arma</label>
                    <input type="text" name="arma" class="form-control" value="{{ $deuses->arma }}">
                </div>

                <div class="mb-3">
                    <label>Animal</label>
                    <textarea name="animal" id=" "class="form-control">{{ $deuses->animal }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Filiação</label>
                    <textarea name="filiacao" id=" "class="form-control" >{{ $deuses->filiacao}}</textarea>
                </div>

                <div>
                    <input type="submit" value="Atualizar Deus" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
