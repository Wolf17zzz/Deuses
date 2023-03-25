<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deus;

class DeusesController extends Controller
{
    public function index()
    {
        $deuses = Deus::all();

        return view('deuses.index', compact('deuses'));
    }


    public function create()
    {
        return view('deuses.create');
    }


    public function store(Request $requisicao)
    {
   //
        // Cria um novo objeto do tipo Deus em branco
        $deuses = new Deus();

        // Preenche os campos do objeto com os dados da requisição
        $deuses->nome = $requisicao->nome;
        $deuses->poderes = $requisicao->poderes;
        $deuses->idade = $requisicao->idade;
        $deuses->sexo = $requisicao->sexo;
        $deuses->arma = $requisicao->arma;
        $deuses->animal = $requisicao->animal;
        $deuses->filiacao = $requisicao->filiacao;

        // Salva o objeto no banco de dados
        $deuses->save();

        // Redireciona para a página de detalhes do gato
        return redirect()->route('deuses.show', $deuses->id);
    }

    /**
     * Mostra um Deus específico
     */



    public function show(Deus $deuses)
    {
        return view('deuses.view', compact('deuses'));
    }


    public function edit(Deus $deuses)
    {
        return view('deuses.edit', compact('deuses'));
    }

    public function update(Request $requisicao, $deuses)
    {
        $deuses->update($requisicao->all());

        // Redireciona para a página de detalhes do gato
        return redirect()->route('deuses.show', $deuses->id);
    }

    public function destroy(Deus $deuses)
    {
        $deuses->delete();

        return redirect()->route('deuses.index');
    }
}
