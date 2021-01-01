@extends('layouts.main')

@section('title', 'Ranking')

@section('content')
<div>
   <h1>Ranking</h1>
   <br><br>
   <a href="/">Voltar para home</a>

   @foreach ($colocados as $jogador)
   <p>{{ $jogador }} Você é o {{ $loop->index+1 }} Colocado</p>
   @endforeach

   {{ print_r($pessoas) }}
</div>
<br><br>
 ---------------------------------------------
<div>
   @foreach ($positions as $pos)
   <p>Posição {{ $pos }}</p>
   <p>Índice {{ $loop->index }}</p>
   @endforeach

   @if ($posicao == 1)
   <p>{{ $posicao }}° Colocado MEDALHA DE OURO Parabens!</p>
   @elseif ($posicao == 2)
   <p>{{ $posicao }}° Colocado MEDALHA DE PRATA</p>
   @elseif ($posicao == 3)
   <p>{{ $posicao }}° Colocado MEDALHA DE BRONZE</p>
   @else
   <p>{{ $posicao }}° Colocado que pena, você não foi medalhista...</p>
   @endif

   @for ($i = 1; $i < count($positions); $i++)
   <p>Este é o item {{ $positions[$i] }} do Array</p>
   @endfor
</div>
@endsection