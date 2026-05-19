@extends('layout.padrao')
@section('conteudo')
<div>
    @foreach($users as $user)

    <div>
        {{$user->name}} <br>
    </div>
    @endforeach
</div>
@endsection