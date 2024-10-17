@extends('master')
@section('content')

<a href="{{ route('funcionarios.create')}}">Adicionar</a>

<hr>

<h2>Funcionarios</h2>

    @foreach ($funcionarios as $funcionario)
    <p id="p">{{$funcionario->nome}} - {{$funcionario->idade}} <a href="{{ route('funcionarios.edit',['funcionario' => $funcionario->id])}}">editar</a> 
        <a href="{{ route('funcionarios.show',['funcionario' => $funcionario->id])}}">Mostrar</a></p>
    @endforeach


@endsection