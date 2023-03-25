<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Deuses</title>
    </head>

    <body>
        <div class="container mb-3">
            <h1>Novo Deus</h1>

            <form method="POST" action="{{ route('deuses.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Poderes</label>
                    <input type="text" name="poderes" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Idade</label>
                    <input type="number" name="idade" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Arma</label>
                    <input type="text" name="arma" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Animal</label>
                    <textarea name="animal" id=" "class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Filiação</label>
                    <textarea name="filiacao" id=" "class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar Deus" class="btn btn-primary">
                    <a href="{{ route('deuses.index') }}" class="btn btn-primary">Voltar à Lista</a>
                </div>


            </form>
        </div>
    </body>
</html>
