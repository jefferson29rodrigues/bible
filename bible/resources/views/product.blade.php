@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id != null)
        <p>Produto com o id: {{ $id }}</p>
    @endif

@endsection