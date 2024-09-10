{{-- views/animais/editar.blade.php --}}

@extends('base')

@section('titulo', 'Página de Filmes - Editar')

@section('conteudo')
    <h1>Filmes - Editar</h1>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('filmes.editar', $filme->id) }}" method="post" class="p-10 bg-white rounded shadow-xl">
        @csrf
        @method('put')

        <div class="">
            <label class="block text-sm text-gray-600" for="nome">Nome</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('nome', $filme->nome ?? '') }}" type="text" name="nome" placeholder="Filme" value="">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="sinopse">Sinopse</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('sinopse', $filme->sinopse ?? '') }}" type="text" name="sinopse" placeholder="Sinopse" value="">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="ano">Ano</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('ano', $filme->ano ?? '') }}" type="number" name="ano" placeholder="Ano">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="categoria">Categoria</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('categoria', $filme->categoria ?? '') }}" type="text" name="categoria" placeholder="Categoria" value="">
        </div>

        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="capa">Capa</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('capa', $filme->capa ?? '') }}" type="file" required="" name="capa" placeholder="Capa" value="">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="link">Link do Trailer</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" value="{{ old('link', $filme->link ?? '') }}" type="text" required="" name="link" placeholder="Link" value="">
        </div>

        <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"><i class="fas fa-save"></i></i> Gravar</button>
        </div>
    </form>
@endsection