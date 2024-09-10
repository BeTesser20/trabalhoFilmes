@extends('base')

@section('titulo', 'Cadastrar')

@section('conteudo')
<p>Preencha o formulario: </p>

@if($errors->any())
<div>
    <h2>Algum campo do formulário não foi preenchido corretamente</h2>
    @foreach($errors->all() as $erro)
    <p>{{$erro}}</p>
    @endforeach
</div>
@endif 

 
<form method="post" enctype="multipart/form-data" action="{{ route ('filmes.gravar') }}">
    @csrf
    <input type="text" name="nome" 
    placeholder="Nome" value="{{ old('nome')}}" >
    <br>
    <input type="number" name="ano"
    placeholder="Ano de lançamento" value="{{ old('ano')}}">
    <br>
    <input type="text" name="sinopse"
    placeholder="Sinopse" value="{{ old('sinopse')}}">
    <br>
    <input type="file" name="capa" 
    placeholder="Capa do filme" value="{{ old('capa')}}" >
    <br>
    <input type="submit" name="Gravar">
</form>

@endsection