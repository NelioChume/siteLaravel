@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Tela de Produtos </h1>

@if($busca != '')
    <p>O utilizador esta' procurando por: {{$busca}}</p>
@endif
@endsection