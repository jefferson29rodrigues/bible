<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
</head>
<body>
   <h1>Ranking</h1>
   <br><br>
   <a href="/">Voltar para home</a>

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

   @foreach ($positions as $pos)
   <p>Posição {{ $pos }}</p>
   <p>Índice {{ $loop->index }}</p>
   @endforeach
</body>
</html>