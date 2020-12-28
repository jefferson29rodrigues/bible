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
   <p>$posicao Colocado Parabens!</p>
   @else
   <p>$posicao Colocado que pena...</p>
   @endif
</body>
</html>