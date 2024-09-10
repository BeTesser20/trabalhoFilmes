{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Veja nossa listagem de filmes')

@section('conteudo')
    <p>
        <a href="{{ route('filmes.cadastrar') }}" class="px-4 py-2 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i>Cadastrar filme: </a>
    </p>

    <p>Confira aqui nossa lista de filmes</p>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Sinopse</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ano</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Categoria</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Capa</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Link</th>
                </tr>
            </thead>
    
            @foreach($filmes as $filme)     
                <tbody class="text-gray-700">
                    <tr @if ($loop->even) class="bg-gray-200" @endif>
                        <td class="text-left py-3 px-4">{{ $filme['nome'] }}</td>
                        <td class="text-left py-3 px-4">{{ $filme['sinopse'] }}</td>
                        <td class="text-left py-3 px-4">{{ $filme['ano'] }}</td>
                        <td class="text-left py-3 px-4">{{ $filme['categoria'] }}</td>
                        <td class="text-left py-3 px-4">{{ $filme['capa'] }}</td>
                        <td class="text-left py-3 px-4">{{ $filme['link'] }}</td>
                        <td class="text-left py-3 px-4"><a class="px-3 py-1 font-bold text-green-900 bg-green-200 rounded-full" href="{{ route('filmes.editar', $filme['id']) }}"><i class="fas fa-edit"></i>Editar</a></td>
                        <td class="text-left py-3 px-4"><a class="px-3 py-1 font-bold text-red-900 bg-red-200 rounded-full" href="{{ route('filmes.apagar', $filme['id']) }}"><i class="fas fa-trash-alt"></i>Apagar</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection