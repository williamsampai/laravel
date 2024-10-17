@extends('master')

@section('content')


<h2>Funcionario - {{ $funcionario->nome }}</h2>

<form action="{{ route('funcionarios.destroy',['funcionario' => $funcionario->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button>Deletar</button>


@endsection