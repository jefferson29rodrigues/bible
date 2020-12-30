<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">
        
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

    </body>
</html>
