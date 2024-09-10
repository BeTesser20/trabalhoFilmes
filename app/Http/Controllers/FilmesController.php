<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $dados = Filme::all();
        // dd($dados);
        return view('filmes.index', [
            'filmes' => $dados,
        ]);
    }

    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {
        // // dd($form);
        // echo $form->nome;
        $img = $form->file('imagem')->store('filmes', 'imagens');
        
        // dd($form);
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required|min:3',
            'ano' => 'required|integer',
            'categoria' => 'required|min:3',
            'capa' => 'required|min:3',
            'link' => 'required|min:3'
        ]);

        $dados['imagem'] = $img;

        Filmes::create($dados);
        // echo 'Tudo certo!';
        return redirect()->route('filmes');
    }

    // mostra na tela a confirmacao
    public function apagar(Filme $filme){
        // dd($animal);
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }

    // efetivamente deleta no banco
    public function deletar(Filmes $filme){
        $filme->delete();
        return redirect()->route('filmes');
    }


    public function editar(Filme $filme) {
        return view('filmes/editar', ['filme' => $filme]);
    }

    public function editarGravar(Request $form, Filme $filme) {
        $dados = $form->validate([
            'nome' => 'required|max:255',
            'sinopse' => 'required|max:255',
            'ano' => 'required',
            'categoria' => 'required|max:255',
            'capa' => 'required',
            'link' => 'required'
        ]);

        $filme->fill($dados);
        $filme->save();
        return redirect()->route('filmes');
    }
}