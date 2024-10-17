@extends('master')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}   
@endif

<h2>Criar</h2>
<form action="{{ route('funcionarios.store',)}}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Seu nome:">
    <input type="text" name="idade" placeholder="Sua idade:">
    <button type="submit">Criar</button>
</form>


@endsection