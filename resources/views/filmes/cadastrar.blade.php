{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Filmes')

@section('conteudo')
    <p>Preencha o formulário: </p>

    @if($errors->any())
        <div>
            <h3>Você preencheu algum campo incorretamente: </h3>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="post" enctype="multipart/form-data" action="{{ route('filmes.gravar')}}" class="p-10 bg-white rounded shadow-xl">
        @csrf
        <div class="">
            <label class="block text-sm text-gray-600" for="nome">Nome</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="text" required="" name="nome" placeholder="Nome" value="{{ old('nome') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="sinopse">Sinopse</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="text" required="" name="sinopse" placeholder="Sinopse" value="{{ old('sinopse') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="ano">Ano</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="number" required="" name="ano" placeholder="Ano" value="{{ old('ano') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="categoria">Categoria</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="text" required="" name="categoria" placeholder="Categoria" value="{{ old('categoria') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="capa">Capa</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="file" required="" name="capa" placeholder="Capa" value="{{ old('capa') }}">
        </div>
        <div class="mt-2">
            <label class="block text-sm text-gray-600" for="link">Link do Trailer</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" type="text" required="" name="link" placeholder="Link" value="{{ old('link') }}">
        </div>
        <div class="mt-6">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"><i class="fas fa-save"></i></i> Gravar</button>
        </div>
    </form>
@endsection