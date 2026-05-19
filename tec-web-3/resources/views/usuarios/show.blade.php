@extends('layout.padrao')
@section('conteudo')
    <h1>Dados do Usuário</h1>

    <p>ID: {{ $usuario->id }}</p>
    <p>Nome: {{ $usuario->name }}</p>
    <p>Email: {{ $usuario->email }}</p>
@endsection