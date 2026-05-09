@extends('layout.padrao')
@section('conteudo')
<div>
    @foreach($users as $users)

    <div>
        {{$users->name}} <br>
    </div>
</div>
@endsection