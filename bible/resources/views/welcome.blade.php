@extends('layouts.main')

@section('title', 'Bible')

@section('content')
<div>
    <h1>Home</h1>
    <br><br>
    <a href="/ranking">ir para o Ranking</a>
    <br><br>
    <a href="/chat">ir para o forum</a>

    @if (10 > 14)
        <p>A condição é verdadeira</p>
    @else
        <p>Acondição é falsa</p>
    @endif
</div>
@endsection