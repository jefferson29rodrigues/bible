@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <p>produtos</p>

    @if($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
        <p>A idade do usuário é: {{ $idade }}</p>
    @endif
@endsection